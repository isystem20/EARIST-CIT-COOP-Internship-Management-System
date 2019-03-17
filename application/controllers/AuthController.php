<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends Public_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('LoggerModel','logger'); 
        $this->load->model('AuthModel','auth');
        $this->load->model('StudentModel','stud');
        $this->load->model('EmailModel','email');
        $this->load->model('AccountModel','acct');
        $this->load->model('CityModel','city');
        $this->load->model('RegionModel','region');
        $this->load->model('CourseModel','course');
        $this->load->model('SemesterModel','semester');
        $this->load->model('SectionModel','section');
        $this->load->model('YearLevelModel','yearlevel');
        $this->load->model('AdvisorModel','advisors');
        $this->load->model('NationalityModel','nationality');
    }


	public function LoginPage()
	{
		$layout = array('charts' => TRUE, 'page_title'=>'Dashboard');
		$this->load->view('layout/head',$layout);
		$this->load->view('pages/login');
		$this->load->view('layout/scripts',$layout);
	}


	public function RegisterPage()
	{
		$layout = array('form'=>TRUE,'formelements'=>TRUE, 'page_title'=>'Student Registration');

		$data['cities'] = $this->city->LoadMasterlist('Id,Name');
		$data['regions'] = $this->region->LoadMasterlist('Id,Name');
		$data['courses'] = $this->course->LoadMasterlist('Id,Name');
		$data['semesters'] = $this->semester->LoadMasterlist('Id,Name');
		$data['sections'] = $this->section->LoadMasterlist('Id,Name');
		$data['yearlevels'] = $this->yearlevel->LoadMasterlist('Id,Name');
		$data['nationality'] = $this->nationality->LoadMasterlist('Id,Name');
		$data['advisors'] = $this->advisors->LoadMasterlist('Id,LastName,FirstName');

		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		// $this->load->view('layout/topbar');
		$this->load->view('pages/register',$data);
		$this->load->view('layout/scripts',$layout);
	}


	public function AccountRecoveryPage()
	{
		$layout = array('charts' => TRUE, 'page_title'=>'Dashboard');
		$this->load->view('layout/head',$layout);
		$this->load->view('pages/forgotpassword');
		$this->load->view('layout/scripts',$layout);
	}

	public function SendCode()
	{
		$this->form_validation->set_rules('Email','Email Address','required');
  		if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
        }
        else {
        	//Check the email
        	$postdata = $this->input->post();
        	$found = $this->stud->FindEmail($postdata['Email']);
        	if ($found->num_rows() > 0) {
        		$raw = $found->result_array();
        		$parsed = $raw[0];
        		// die($parsed['Id']);
        		$code = $this->acct->UpdateActivationCode($parsed['Id']);
        		if ($code != FALSE) {
        			$status = $this->email->SendCode($code,$parsed);
        			if ($status != true) {
        				$json = $postdata;
		    			$this->logger->log('Send Email Success','Account Recovery',$json); //Log
		    			echo json_encode(['url'=>base_url('changepassword')]);  
        			}else {
        				$json = $status;
		    			$this->logger->log('Send Email Attempt','Account Recovery',$json); //Log
		    			echo json_encode(['error'=>$status]);        				
        			}
	          			
        		}
        		else {
	        		$json = json_encode($postdata); //log
	    			$this->logger->log('Failed Attempt','Account Recovery',$json); //Log
	    			echo json_encode(['error'=>'Failed to set code. User account might not be existing. Please contact Administrator.']);	        			
        		}
        		
        	}
        	else {
        		$json = json_encode($postdata); //log
    			$this->logger->log('Failed Attempt','Account Recovery',$json); //Log
    			echo json_encode(['error'=>'Email does not exist.']);	
        	}
        }
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

	public function PublicRegister() {
		$postdata = $this->input->post();
		$this->form_validation->set_rules('FirstName', 'Given Name', 'required');
        $this->form_validation->set_rules('LastName', 'Family Name', 'required');
        $this->form_validation->set_rules('Birthdate', 'Date of birth', 'required');
        $this->form_validation->set_rules('PersonalEmail', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('MobileNo', 'Mobile', 'required');
        $this->form_validation->set_rules('Code', 'Student Number', 'required|is_unique[tbl_students.Code]');
        $this->form_validation->set_rules('CourseId', 'Course', 'required');
        $this->form_validation->set_rules('YearLevelId', 'Year Level', 'required');
        $this->form_validation->set_rules('SemesterId', 'Semester', 'required');
        $this->form_validation->set_rules('SectionId', 'Section', 'required');
        $this->form_validation->set_rules('Advisor', 'Advisor', 'required');
        $this->form_validation->set_error_delimiters('<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">','</li></ul>');
        if ($this->form_validation->run() == FALSE){
        	foreach ($postdata as $key => $value) {
        		$data['responses'][$key] = form_error($key);
        	}
            $errors = validation_errors();
            $data['error'] = $errors;
            $json = json_encode($postdata); //log
	        $this->logger->log('Invalid Register','Students',$json); //Log  
            echo json_encode($data);
        }else{
	        $path = dirname(BASEPATH).'/uploads/public/';
	        $config['upload_path'] = $path;
	        $config['allowed_types'] = 'gif|jpg|png';
	        $config['max_size'] = '100000';
	 		$senderror = FALSE;
	        $this->load->library('upload', $config);

			if (!empty($_FILES["Profile"]["name"])) {

		        if ($this->upload->do_upload('Profile')) {
		        	$photo_file = $this->upload->data();
            		$postdata['PhotoPath'] = 'uploads/public/' . $photo_file['file_name'];
		        }		 
		        else {
		        	$errors = $this->upload->display_errors();
		            $json = json_encode($errors); //log
			        $this->logger->log('Invalid Upload','Students',$json); //Log  
		            $senderror = TRUE;
		        }

			}

			if (!empty($_FILES["Banner"]["name"])) {

		        if ($this->upload->do_upload('Banner')) {
		        	$banner_file = $this->upload->data();
		        	$postdata['BannerPath'] = 'uploads/public/' . $banner_file['file_name'];
	            
		        }		
		        else {
		            $errors = $this->upload->display_errors();
		            $json = json_encode($errors); //log
			        $this->logger->log('Invalid Upload','Students',$json); //Log  
		            $senderror = TRUE;	
		        }   
		        
			}
	
    		if ($senderror == TRUE) {
    			echo json_encode(['error'=>'Failed to Upload Images.']);
    		}
    		else {

		        $result = $this->stud->AddStudent($postdata);
	     		if ($result != FALSE) {	
					$json = json_encode($result); //log
			        $this->logger->log('Success Register','Studdents',$json); //Log 
			        if (!empty($this->session->userdata('userid'))) {
			        	echo json_encode(['redirect'=>base_url('manage/students')]);
			        }
			        else {
			        	echo json_encode(['redirect'=>base_url()]);
			        }
	        		
	     		}
	     		else {
		            $json = json_encode($postdata); //log
			        $this->logger->log('Invalid Register','Students',$json); //Log  
	        		echo json_encode(['error'=>'Failed to save.']);
	     		}

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
