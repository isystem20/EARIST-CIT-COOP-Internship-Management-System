<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmailModel extends CI_Model {

    function __construct(){
        parent::__construct();
    }



	public function SendCode($code,$data) {

		$this->load->helper('file');
		$this->config->load('email', TRUE);
		$this->load->library('Mailer');

		$variables = array();

        $key = $this->config->item('encryption_key');
        $salt1 = hash('sha512', $key . $code);
        $salt2 = hash('sha512', $code . $key);
        $hashed_code = hash('sha512', $salt1 . $code . $salt2);
		$variables['code'] = $code;
		// $variables['firstname'] = $data['r_fname'];
		$variables['activationlink'] = base_url('activate/userid/'.$hashed_code);

		$template = read_file(APPPATH.'templates/email_send_code.html');

		foreach($variables as $key => $value)
		{
		    $template = str_replace('{{'.$key.'}}', $value, $template);
		}
		// try {

			// $recipient_email = $data['PersonalEmail'];
			$recipient_email = 'isystem20@gmail.com';
			$recipient_name = $data['FirstName'];
			$subject = 'Quezon City PESO Account Verification';

			$mail = new PHPMailer(true);
			$mail->IsSMTP(); 
			$mail->SMTPDebug = 1;
			
			$mail->From = "citcms2019@gmail.com";
			$mail->FromName = "Quezon City PESO (Do not Reply)";
			$mail->Host = $this->config->item('smtp_host', 'email');
			$mail->SMTPSecure= $this->config->item('smtp_protocol', 'email');
			$mail->Port = $this->config->item('smtp_port', 'email');
			$mail->SMTPAuth = $this->config->item('smtp_authentication', 'email');	
			$mail->Username = $this->config->item('username', 'email');	
			$mail->Password = $this->config->item('password', 'email');	

			$mail->AddAddress($recipient_email, $recipient_name); 
			$mail->AddReplyTo("no-reply@cit-cms.com", "Do not reply");

			$mail->AddEmbeddedImage(APPPATH.'templates/email/send_verification_code/images/Qcpeso.png', 'qcpesologo');
			$mail->AddEmbeddedImage(APPPATH.'templates/email/send_verification_code/images/facebook@2x.png', 'facebook');

			$mail->IsHTML(true);

		    $mail->Subject = $subject;
		    $body = $template;
			$mail->Body = $body;

			$mail->Send();

			print($mail);
			return true;
		// }
		//  catch (phpmailerException $e) {
		//  	// echo $e->errorMessage();
		//  	return $e->errorMessage();
		//  }catch (Exception $e) {
		//   // echo $e->getMessage();
		//   // $this->session->set_flashdata('response', 'Update Failed: '.$e->getMessage());
		//   return $e->errorMessage();
		// }

		}




    function SentJobAlert($recipients,$str,$id) {

		$this->load->helper('file');
		$this->config->load('email', TRUE);
		$this->load->library('mailer');


		try {

		$recipients = substr($recipients, -10);
		$recipient_email = '63' . $recipients . '@txtlocal.co.uk';
		$recipient_name = '';
			$subject = 'Quezon City PESO Job Alert';

			$mail = new PHPMailer(true);
			$mail->IsSMTP(); 
			// $mail->SMTPDebug = 2;
			
			$mail->From = "admin@qcpeso.com";
			$mail->FromName = "Quezon City PESO (Do not Reply)";
			$mail->Host = $this->config->item('smtp_host', 'email');
			$mail->SMTPSecure= $this->config->item('smtp_protocol', 'email');
			$mail->Port = $this->config->item('smtp_port', 'email');
			$mail->SMTPAuth = $this->config->item('smtp_authentication', 'email');	
			$mail->Username = $this->config->item('username', 'email');	
			$mail->Password = $this->config->item('password', 'email');	

			$mail->AddAddress($recipient_email, $recipient_name); 
			$mail->AddReplyTo("no-reply@qcpeso.com", "Do not reply");

			// $mail->AddEmbeddedImage(APPPATH.'templates/email/send_verification_code/images/Qcpeso.png', 'qcpesologo');
			// $mail->AddEmbeddedImage(APPPATH.'templates/email/send_verification_code/images/facebook@2x.png', 'facebook');

			$mail->IsHTML(true);

		    $mail->Subject = $subject;
		    // $body = $template;
			$mail->Body = 'Quezon City Public Employment Service Office\nPosted new job opportunity: <br>' .$str;

			$mail->Send();
			return true;
		}
		 catch (phpmailerException $e) {
		 	// echo $e->errorMessage();
		 	return $e->errorMessage();
		 }catch (Exception $e) {
		  // echo $e->getMessage();
		  // $this->session->set_flashdata('response', 'Update Failed: '.$e->getMessage());
		  return $e->errorMessage();
		}

    	}



	}


