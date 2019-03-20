<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyController extends MY_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('LoggerModel','logger'); 
        $this->load->model('CompanyModel','com');
		$this->load->model('DocumentModel','doc');
		$this->load->model('CityModel','city');
		$this->load->model('RegionModel','region');

    }



    public function LoadMasterlist() {
		$layout = array('datatable' => TRUE, 'page_title'=>'Company Masterlist');
		$data['all_list'] = $this->com->LoadMasterlist();
        $l['docs'] = $this->doc->DocumentwithRequests();
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar',$l);
		$this->load->view('pages/companylist',$data);
		// $this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        $this->logger->log('Load Companies','Companies',$json); //Log 
    }


	public function RegisterCompany()
	{
		$layout = array('formelements'=>TRUE, 'page_title'=>'Document Registration','editor'=>TRUE);
		$data['coms'] = $this->com->LoadMasterlist();
		$data['cities'] = $this->city->LoadMasterlist('Id,Name');
		$data['regions'] = $this->region->LoadMasterlist('Id,Name');
		$l['docs'] = $this->doc->DocumentwithRequests();
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar',$l);
		$this->load->view('pages/companyregister',$data);
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        $this->logger->log('Register Form','Documents',$json); //Log  
	}

	public function ViewCompany($id){ 
		$layout = array('formelements'=>TRUE, 'page_title'=>'Document Viewer','editor'=>TRUE);
		$data['cities'] = $this->city->LoadMasterlist('Id,Name');
		$data['regions'] = $this->region->LoadMasterlist('Id,Name');
		$l['docs'] = $this->doc->DocumentwithRequests();
		$document = $this->com->LoadSingle($id);
		if ($document == FALSE) {
			return redirect(base_url('404'));
		}
		$data['com'] = $document->result();
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar',$l);
		$this->load->view('pages/loadcompany',$data);
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        $this->logger->log('View Form','Documents',$json); //Log  
	}




	public function Create() {
		$postdata = $this->input->post();
		$this->form_validation->set_rules('CompanyName', 'Company Name', 'required');
        $this->form_validation->set_rules('Address1', 'Address', 'required');
        $this->form_validation->set_rules('CityId', 'City Address', 'required');
        $this->form_validation->set_error_delimiters('<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">','</li></ul>');
        if ($this->form_validation->run() == FALSE){
        	foreach ($postdata as $key => $value) {
        		$data['responses'][$key] = form_error($key);
        	}
            $errors = validation_errors();
            $data['error'] = $errors;
			$json = json_encode($postdata); //log
	        $this->logger->log('Invalid Register','Company',$json); //Log  
            echo json_encode($data);
        }else{

	        $result = $this->com->AddCompany($postdata);
	 		if ($result != FALSE) {	
				$json = json_encode($result); //log
		        $this->logger->log('Success Register','Company',$json); //Log  
	    		echo json_encode(['redirect'=>base_url('manage/companies')]);
	 		}
	 		else {
				$json = json_encode($postdata); //log
		        $this->logger->log('Invalid Register','Company',$json); //Log 
	    		echo json_encode(['error'=>'Failed to save.']);
	 		}

        }
	}


	public function Update() {
		$postdata = $this->input->post();
		$this->form_validation->set_rules('Id', 'Selected Company', 'required');
		$this->form_validation->set_rules('CompanyName', 'Company Name', 'required');
        $this->form_validation->set_rules('Address1', 'Address', 'required');
        $this->form_validation->set_rules('CityId', 'City Address', 'required');
        $this->form_validation->set_error_delimiters('<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">','</li></ul>');
        if ($this->form_validation->run() == FALSE){
        	foreach ($postdata as $key => $value) {
        		$data['responses'][$key] = form_error($key);
        	}
            $errors = validation_errors();
            $data['error'] = $errors;
			$json = json_encode($postdata); //log
	        $this->logger->log('Invalid Register','Documents',$json); //Log  
            echo json_encode($data);
        }else{
			$id = $postdata['Id'];
			unset($postdata['Id']);
	        $result = $this->com->UpdateCompany($id,$postdata);
	 		if ($result != FALSE) {	
				$json = json_encode($result); //log
		        $this->logger->log('Success Register','Company',$json); //Log  
	    		echo json_encode(['redirect'=>$_SERVER['HTTP_REFERER']]);
	 		}
	 		else {
				$json = json_encode($postdata); //log
		        $this->logger->log('Invalid Register','Company',$json); //Log 
	    		echo json_encode(['error'=>'Failed to save.']);
	 		}

        }
	}



	public function Delete() {
		$postdata = $this->input->post();

		if (empty($postdata['Id'])) {
			$json = json_encode($postdata); //log
	        $this->logger->log('Invalid Register','Documents',$json); //Log  
            echo json_encode(['error'=>'Unknown Documents']);
		}else{
			$id = $postdata['Id'];
			unset($postdata['Id']);
	        $result = $this->com->DeleteCompany($id);
	 		if ($result != FALSE) {	
				$json = json_encode($postdata); //log
		        $this->logger->log('Success Delete','Company',$json); //Log  
	    		echo json_encode(['redirect'=>$_SERVER['HTTP_REFERER']]);
	 		}
	 		else {
				$json = json_encode($postdata); //log
		        $this->logger->log('Failed Delete','Company',$json); //Log 
	    		echo json_encode(['error'=>'Failed to save.']);
	 		}

        }


	}




}