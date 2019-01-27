<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends Public_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('LoggerModel','logger'); 
        $this->load->model('AuthModel','auth');
    }


	public function LoginPage()
	{
		$layout = array('charts' => TRUE, 'page_title'=>'Dashboard');
		$this->load->view('layout/head',$layout);
		$this->load->view('pages/login');
		$this->load->view('layout/scripts',$layout);
	}



	Public function Authenticate() {
		$this->form_validation->set_rules('Username','Username','required');
		$this->form_validation->set_rules('Password','Password','required');


  		if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
        }
        else {
   
        	$postdata = $this->input->post();
        	$login = $this->auth->ExecuteLogin($postdata);

			$password = $postdata['Password'];
	        $key = $this->config->item('encryption_key');
	        $salt1 = hash('sha512', $key . $password);
	        $salt2 = hash('sha512', $password . $key);
	        $hashed_password = hash('sha512', $salt1 . $password . $salt2);

	        // die($hashed_password);

        	if ($login != FALSE) {

        		if ($login->Active == '0' || $login->AccountStatus == '0') {
        			$json = json_encode($login) . 'inputs:' . json_encode($postdata); //log
        			$this->logger->log('Account Disabled','Authentication',$json); //Log 
        			echo json_encode(['error'=>'Account Disabled.']);
        		}
        		elseif ($login->PasswordHash != $hashed_password) {
        			$json = json_encode($login) . 'inputs:' . json_encode($postdata); //log
        			$this->logger->log('Incorect Password','Authentication',$json); //Log
        			echo json_encode(['error'=>'Incorrect Password']);
        		}
        		else {
	        		$session_data = array(
	        			'userid' => $login->Id,
	        			'lastname' => $login->LastName,
	        			'firstname'=> $login->FirstName,
	        			'status' => $login->AccountStatus,
	        			'active' => $login->Active,
	        			'security_id' =>$login->SecurityUserLevelId,
	        			'usertype' => $login->UserType,
	        			'account_id' => $login->AccountId,
	        			'photo' => $login->Photopath,
	        			'username' => $login->LoginName,
	        			'email'=>$login->PersonalEmail,
	        		);  
	        		
	        		$this->session->set_userdata($session_data);
	        		$json = json_encode($session_data); //log
        			$this->logger->log('Success Login','Authentication',$json); //Log
        			echo json_encode(['success'=>TRUE,'url'=>base_url()]);	        		

        		}

        	}
        	else {
        		$json = json_encode($postdata); //log
    			$this->logger->log('Account not found.','Authentication',$json); //Log
        		echo json_encode(['error'=>'Account not found.']);

        	}

        }
	}



	public function Logout() {
		$this->session->unset_userdata('userid');
		$this->session->sess_destroy();
		$this->logger->log('Logout','Authentication',json_encode($this->session->userdata())); //Log
		return redirect(base_url());	
	}










}
