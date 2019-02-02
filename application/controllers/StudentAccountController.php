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
    }



    public function LoadProfile(){
		$layout = array('profile' => TRUE, 'page_title'=>'Profile');
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar');
		$this->load->view('pages/studentprofile');
		// $this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);
    }

    public function LoadMyApplications(){
		$layout = array('datatable' => TRUE, 'page_title'=>'OJT Applications');
		$data['all_list'] = $this->app->LoadSingle(null,$this->session->userdata('account_id'));
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
        $this->logger->log('Register Form','Students',$json); //Log  
    }




    public function Create() {
		$postdata = $this->input->post();
		$this->form_validation->set_rules('LabelDate', 'Application Date', 'required');
        $this->form_validation->set_rules('ContactPerson', 'Contact Person', 'required');
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
        	$result = null;
        	if (empty($postdata['CompanyId'])) {
        		$companydata = $postdata;
        		unset($companydata['CompanyId']);
        		unset($companydata['LabelDate']);
        		unset($companydata['ContactPerson']);
        		unset($companydata['Designation']);
        		$result = $this->com->AddCompany($companydata); 
        		$postdata['CompanyId'] = $result;		
        	}
        	if ($result != FALSE) {
		        $add = $this->app->AddApplication($postdata);
		 		if ($result != FALSE) {	
					$json = json_encode($result); //log
			        $this->logger->log('Success Register','Application',$json); //Log  
		    		echo json_encode(['redirect'=>base_url('applications')]);
		 		}
		 		else {
					$json = json_encode($postdata); //log
			        $this->logger->log('Invalid Register','Application',$json); //Log 
		    		echo json_encode(['error'=>'Failed to save.']);
		 		}
        	}

        }
    }


}