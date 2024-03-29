<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentAccountController extends Student_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('LoggerModel','logger');
        $this->load->model('ApplicationModel','app');
        $this->load->model('CompanyModel','com');
        $this->load->model('CityModel','city');
        $this->load->model('RegionModel','region');
        $this->load->model('DocumentModel','docs');
        $this->load->model('RequestModel','req');
        $this->load->model('StudentModel','students');
        $this->load->model('RecordModel','rec');

    }



    public function LoadProfile(){
		$layout = array('profile' => TRUE, 'page_title'=>'Profile');
        $requestlist = $this->req->RequestDocuments(null,$this->session->userdata('account_id'));
        if ($requestlist == FALSE) {
            return redirect(base_url('404'));
        }
        $data['requests'] = $requestlist;
		$student_profile = $this->students->LoadSingle($this->session->userdata('account_id'));
		if ($student_profile == FALSE) {
			return redirect(base_url('404'));
		}
		$data['profile'] = $student_profile->result();
        // print_r($requestlist->result_array());
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar');
		$this->load->view('pages/studentprofile',$data);
		// $this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);
    }

    public function LoadMyApplications(){
		$layout = array('datatable' => TRUE, 'page_title'=>'OJT Applications');
		$data['all_list'] = $this->app->LoadSingle(null,$this->session->userdata('account_id'));
		$data['docs'] = $this->docs->LoadMasterlist();
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar');
		$this->load->view('pages/myapplications',$data);
		// $this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        $this->logger->log('Load Applications','Applications',$json); //Log  
    }


    public function LoadMyDocuments(){
		$layout = array('datatable' => TRUE, 'page_title'=>'OJT Applications');
		$data['all_list'] = $this->app->LoadSingle(null,$this->session->userdata('account_id'));
		$data['docs'] = $this->docs->LoadMasterlist();
        $requestlist = $this->req->RequestDocuments(null,$this->session->userdata('account_id'),2);
        if ($requestlist == FALSE) {
            return redirect(base_url('404'));
        }
        $data['requests'] = $requestlist;
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar');
		$this->load->view('pages/mydocuments',$data);
		// $this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        $this->logger->log('Load Applications','Applications',$json); //Log  
    }

    public function LoadMyRequests(){
		$layout = array('datatable' => TRUE, 'page_title'=>'OJT Applications');
		$data['all_list'] = $this->app->LoadSingle(null,$this->session->userdata('account_id'));
		$data['docs'] = $this->docs->LoadMasterlist();
        $requestlist = $this->req->RequestDocuments(null,$this->session->userdata('account_id'),['1','0']);
        if ($requestlist == FALSE) {
            return redirect(base_url('404'));
        }
        $data['requests'] = $requestlist;
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar');
		$this->load->view('pages/myrequests',$data);
		// $this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        $this->logger->log('Load Applications','Applications',$json); //Log  
    }



    public function RegisterApplication() {
		$layout = array('form'=>TRUE,'formelements'=>TRUE, 'page_title'=>'Internship Application');
		$data['companies'] = $this->com->LoadMasterlist('a.Id,a.CompanyName');
		$data['cities'] = $this->city->LoadMasterlist('Id,Name');
		$data['regions'] = $this->region->LoadMasterlist('Id,Name');
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar');
		$this->load->view('pages/applicationregister',$data);
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        // $this->logger->log('Register Form','Students',$json); //Log  
    }


    public function RegisterRecord($appid) {
		$layout = array('form'=>TRUE,'formelements'=>TRUE, 'page_title'=>'Internship Record');
		$app = $this->app->LoadSingle($appid,$this->session->userdata('account_id'));
		$data['application'] = $app ->result_array();
		$data['companies'] = $this->com->LoadMasterlist('a.Id,a.CompanyName');
		$data['cities'] = $this->city->LoadMasterlist('Id,Name');
		$data['regions'] = $this->region->LoadMasterlist('Id,Name');
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar');
		$this->load->view('pages/internshiprecords',$data);
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        // $this->logger->log('Register Form','Students',$json); //Log  
    }



    public function Create() {
		$postdata = $this->input->post();
		$this->form_validation->set_rules('LabelDate', 'Application Date', 'required');
        $this->form_validation->set_rules('ContactPersonFirstName', 'Contact Person First Name', 'required');
        $this->form_validation->set_rules('ContactPersonLastName', 'Contact Person Last Name', 'required');
		$this->form_validation->set_rules('Designation', 'Contact Person Position', 'required');
        $this->form_validation->set_rules('CompanyName', 'Company Name', 'required');
        $this->form_validation->set_rules('Address1', 'Address', 'required');
		$this->form_validation->set_rules('CityId', 'City Location', 'required');
        $this->form_validation->set_error_delimiters('<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">','</li></ul>');
        if ($this->form_validation->run() == FALSE){
        	foreach ($postdata as $key => $value) {
        		$data['responses'][$key] = form_error($key);
        	}
            $errors = validation_errors();
            $data['error'] = $errors;
			$json = json_encode($postdata); //log
	        $this->logger->log('Invalid Register','Application',$json); //Log  
            echo json_encode($data);
        }else{


        	foreach ($postdata as $key => $value) {
        		$postdata[$key] = ucwords($value);
        	}

        	$postdata['ContactPerson'] = $postdata['ContactPersonFirstName'] . ' ' . $postdata['ContactPersonLastName'];

        	$result = 0;
        	if (empty($postdata['CompanyId'])) {
        		$companydata = $postdata;
        		unset($companydata['CompanyId']);
        		unset($companydata['CPTitle']);
        		unset($companydata['LabelDate']);
        		unset($companydata['ContactPersonFirstName']);
        		unset($companydata['ContactPersonLastName']);
        		unset($companydata['ContactPerson']);
        		unset($companydata['Designation']);
        		unset($companydata['ContactPersonGender']);
        		$result = $this->com->AddCompany($companydata); 
        		$postdata['CompanyId'] = $result;		
        	}
        	else {
        		$result = 1;
        	}

        	if ($result > 0) {
		        $add = $this->app->AddApplication($postdata);
		 		if ($add != FALSE) {	
					$json = json_encode($postdata); //log
			        $this->logger->log('Success Register','Application',$json); //Log  
		    		echo json_encode(['redirect'=>base_url('applications')]);
		 		}
		 		else {
					$json = json_encode($postdata); //log
			        $this->logger->log('Invalid Register','Application',$json); //Log 
		    		echo json_encode(['error'=>'Failed to save.']);
		 		}
        	}
        	else {
        		$json = json_encode($postdata); //log
		        $this->logger->log('Invalid Register','Application Unknown',$json); //Log 
	    		echo json_encode(['error'=>'Failed to save.']);
        	}

        }
    }


	public function Delete() {
		$postdata = $this->input->post();

		if (empty($postdata['Id'])) {
			$json = json_encode($postdata); //log
	        $this->logger->log('Invalid Register','Application',$json); //Log  
            echo json_encode(['error'=>'Unknown Application']);
		}else{
			$id = $postdata['Id'];
			unset($postdata['Id']);
	        $result = $this->app->DeleteApp($id);
	 		if ($result != FALSE) {	
				$json = json_encode($postdata); //log
		        $this->logger->log('Success Delete','Application',$json); //Log  
	    		echo json_encode(['redirect'=>$_SERVER['HTTP_REFERER']]);
	 		}
	 		else {
				$json = json_encode($postdata); //log
		        $this->logger->log('Failed Delete','Application',$json); //Log 
	    		echo json_encode(['error'=>'Failed to save.']);
	 		}

        }


	}



    public function LoadDocumentRecord(){
		$postdata = $this->input->post();
		$this->form_validation->set_rules('StudentId', 'Student ID', 'required');
        $this->form_validation->set_rules('DocumentId', 'Document Id', 'required');
        $this->form_validation->set_rules('ApplicationId', 'Application Id', 'required');  
        $this->form_validation->set_error_delimiters('<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">','</li></ul>');
        if ($this->form_validation->run() == FALSE){
        	foreach ($postdata as $key => $value) {
        		$data['responses'][$key] = form_error($key);
        	}
            $errors = validation_errors();
            $data['error'] = $errors;
			$json = json_encode($postdata); //log
	        $this->logger->log('Invalid Generate Preview Input','Document Request',$json); //Log  
            echo json_encode($data);
        }else{
        	$doc = $this->docs->LoadSingle($postdata['DocumentId']);
	        $app = $this->app->GenerateReportPreview($postdata);
	 		if ($doc != FALSE && $app != FALSE) {
	 			$json = array('report'=>$doc->result_array(),'data'=>$app->result_array());
				$json = json_encode($json); //log
		        $this->logger->log('Success Generate Preview','Document Request',$json); //Log  
	    		echo $json;
	 		}
	 		else {
				$json = json_encode($postdata); //log
		        $this->logger->log('Success Generate Preview','Document Request',$json); //Log  
	    		echo json_encode(['error'=>'Failed to save.']);
	 		}

        }

    }



    public function CreateRequest() {
		$postdata = $this->input->post();
        $this->form_validation->set_rules('pDocumentId', 'Selected Document', 'required');
        $this->form_validation->set_rules('pApplicationId', 'Selected Application', 'required');
        if ($this->form_validation->run() == FALSE){
			$json = json_encode($postdata); //log
	        $this->logger->log('Invalid Register','Request Document',$json); //Log  
            echo json_encode(['error'=>'Invalid Input']);
        }else{
        	$newdata = array(
        		'DocumentId' => $postdata['pDocumentId'],
        		'ApplicationId' => $postdata['pApplicationId'],
        		'RecordId' => $postdata['pRecordId'], );
	        $add = $this->req->AddRequest($newdata);
	 		if ($add != FALSE) {	
				$json = json_encode($postdata); //log
		        $this->logger->log('Success Register','Request Document',$json); //Log  
	    		echo json_encode(['redirect'=>base_url('applications')]);
	 		}
	 		else {
				$json = json_encode($postdata); //log
		        $this->logger->log('Invalid Register','Request Document',$json); //Log 
	    		echo json_encode(['error'=>'Failed to save.']);
	 		}


        }
    }



    public function UpdateApplication($id) {
		$layout = array('form'=>TRUE,'formelements'=>TRUE, 'page_title'=>'Internship Application');
		$data['companies'] = $this->com->LoadMasterlist('a.Id,a.CompanyName');
		$data['cities'] = $this->city->LoadMasterlist('Id,Name');
		$data['regions'] = $this->region->LoadMasterlist('Id,Name');
		$application = $this->app->LoadSingle($id);
		if ($application == FALSE) {
			return redirect(base_url('404'));
		}
		$data['app_info'] = $application->result();
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar');
		$this->load->view('pages/applicationdetails',$data);
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        // $this->logger->log('Register Form','Students',$json); //Log  
    }


    public function ViewRecord($recid) {
		$layout = array('form'=>TRUE,'formelements'=>TRUE, 'page_title'=>'Internship Record Update');
		$record = $this->rec->LoadSingle($recid,$this->session->userdata('account_id'));
		if ($record != FALSE) {
			$data['record'] = $record ->result_array();
		}
		else {
			return redirect(base_url('404'));
		}
		$data['companies'] = $this->com->LoadMasterlist('a.Id,a.CompanyName');
		$data['cities'] = $this->city->LoadMasterlist('Id,Name');
		$data['regions'] = $this->region->LoadMasterlist('Id,Name');
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar');
		$this->load->view('pages/internshiprecorddetails',$data);
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        // $this->logger->log('Register Form','Students',$json); //Log  
    }




    public function CreateRecord() {
    	$postdata = $this->input->post();
		$this->form_validation->set_rules('ApplicationId', 'Selected Application', 'required');
        $this->form_validation->set_rules('SFirstName', 'Supervisor First Name', 'required');
        $this->form_validation->set_rules('SLastName', 'Supervisor Last Name', 'required');
        $this->form_validation->set_rules('MFirstName', 'Manager First Name', 'required');
        $this->form_validation->set_rules('MLastName', 'Manager Last Name', 'required');
        $this->form_validation->set_rules('Department', 'Department', 'required');
        $this->form_validation->set_rules('Hours', 'Internship Hours', 'required');
        $this->form_validation->set_rules('StartDate', 'Starting Date', 'required');
        $this->form_validation->set_rules('EndDate', 'Expected End Date', 'required');
        $this->form_validation->set_rules('ScheduleDays', 'Schedule Days', 'required');
        $this->form_validation->set_rules('ScheduleTime', 'Schedule Time', 'required');
        $this->form_validation->set_error_delimiters('<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">','</li></ul>');
        if ($this->form_validation->run() == FALSE){
        	foreach ($postdata as $key => $value) {
        		$data['responses'][$key] = form_error($key);
        	}
            $errors = validation_errors();
            $data['error'] = $errors;
            $json = json_encode($postdata); //log
	        $this->logger->log('Invalid Register','Internship Record',$json); //Log  
            echo json_encode($data);
        }else{

        	if (!empty($postdata['Id'])) {
        		$id = $postdata['Id'];
        		unset($postdata['Id']);
        		$result = $this->rec->UpdateRecord($id,$postdata);
        	}
        	else {
        		$result = $this->rec->AddRecord($postdata);
        	}
	        
     		if ($result != FALSE) {	
				$json = json_encode($result); //log
		        $this->logger->log('Success Register','Internship Record',$json); //Log  
        		echo json_encode(['redirect'=>base_url('applications')]);
     		}
     		else {
	            $json = json_encode($postdata); //log
		        $this->logger->log('Invalid Register','Internship Record',$json); //Log  
        		echo json_encode(['error'=>'Failed to save.']);
     		}

        }
    }














}