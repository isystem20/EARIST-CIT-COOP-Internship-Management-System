<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DocumentController extends MY_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('LoggerModel','logger'); 
        $this->load->model('DocumentModel','docs');
    }


	public function LoadMasterlist()
	{
		$layout = array('datatable'=>TRUE, 'page_title'=>'Document Masterlist');
		$data['all_list'] = $this->docs->LoadMasterlist();
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar');
		$this->load->view('pages/documents',$data);
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        $this->logger->log('Load Masterlist','Documents',$json); //Log  
	}

	public function RegisterDocument()
	{
		$layout = array('formelements'=>TRUE, 'page_title'=>'Document Registration','editor'=>TRUE);
		$data['docslist'] = $this->docs->LoadMasterlist();
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar');
		$this->load->view('pages/documentregister',$data);
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        $this->logger->log('Register Form','Documents',$json); //Log  
	}

	public function ViewDocument($id){ 
		$layout = array('formelements'=>TRUE, 'page_title'=>'Document Viewer','editor'=>TRUE);
		$data['docslist'] = $this->docs->LoadMasterlist();
		$document = $this->docs->LoadSingle($id);
		if ($document == FALSE) {
			return redirect(base_url('404'));
		}
		$data['doc'] = $document->result();
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar');
		$this->load->view('pages/loaddocument',$data);
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        $this->logger->log('View Form','Documents',$json); //Log  
	}




	public function Create() {
		$postdata = $this->input->post();
		$this->form_validation->set_rules('Code', 'Unique Code', 'required|is_unique[tbl_documents.Code]');
        $this->form_validation->set_rules('DocumentName', 'Document Name', 'required');
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

	        $result = $this->docs->AddDocument($postdata);
	 		if ($result != FALSE) {	
				$json = json_encode($result); //log
		        $this->logger->log('Success Register','Documents',$json); //Log  
	    		echo json_encode(['redirect'=>base_url('manage/documents')]);
	 		}
	 		else {
				$json = json_encode($postdata); //log
		        $this->logger->log('Invalid Register','Documents',$json); //Log 
	    		echo json_encode(['error'=>'Failed to save.']);
	 		}

        }
	}


	public function Update() {
		$postdata = $this->input->post();
		$this->form_validation->set_rules('Id', 'Selected Document', 'required');
		$this->form_validation->set_rules('Code', 'Unique Code', 'required');
        $this->form_validation->set_rules('DocumentName', 'Document Name', 'required');
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
	        $result = $this->docs->UpdateStudent($id,$postdata);
	 		if ($result != FALSE) {	
				$json = json_encode($result); //log
		        $this->logger->log('Success Register','Documents',$json); //Log  
	    		echo json_encode(['redirect'=>$_SERVER['HTTP_REFERER']]);
	 		}
	 		else {
				$json = json_encode($postdata); //log
		        $this->logger->log('Invalid Register','Documents',$json); //Log 
	    		echo json_encode(['error'=>'Failed to save.']);
	 		}

        }
	}







}
