<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RequestController extends Student_Controller {

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
            
            
    }

    public function LoadRequests($id = null,$status = null){
		$layout = array('datatable' => TRUE, 'page_title'=>'OJT Applications');
		$data['all_list'] = $this->app->LoadSingle(null,$this->session->userdata('account_id'));
		$data['docs'] = $this->docs->LoadMasterlist();
        if ($status != null) {
            $requestlist = $this->req->RequestDocuments($id,null,$status);
        }
        else {
            $requestlist = $this->req->RequestDocuments($id,null,1);
        }
        
        if ($requestlist == FALSE) {
            return redirect(base_url('404'));
        }
        $data['requests'] = $requestlist;
        
        $data['doc'] = $this->docs->LoadSingle($id)->result_array();        
        $l['docs'] = $this->docs->DocumentwithRequests();
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar',$l);
		$this->load->view('pages/requests',$data);
		// $this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        $this->logger->log('Load Applications','Applications',$json); //Log  
    }





    public function RequestChangeStatus() {
        $postdata = $this->input->post();
        $json = json_encode($postdata); //log
        $this->form_validation->set_rules('Id', 'Selected Item', 'required');
        $this->form_validation->set_rules('Status', 'Action', 'required');

        if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            $data['error'] = $errors;
            $json = json_encode($postdata); //log
            $this->logger->log('Invalid Generate Preview Input','Document Request',$json); //Log  
            echo json_encode($data);
        }else{
            $id = $postdata['Id'];
            unset($postdata['Id']);

            $req = $this->req->UpdateStatus($id,$postdata);

            if ($req != FALSE) {
                $this->logger->log('Success Request Update','Document Request',$json); //Log  
                echo json_encode(['newtab'=>base_url('generate/print/document/'.$id)]);
            }
            else {
                $this->logger->log('Success Request Update','Document Request',$json); //Log  
                echo json_encode(['error'=>'Failed to save.']);
            }

        }


    }


    public function RequestViewing($id) {
        $this->load->library('Pdf');
        $requestlist = $this->req->RequestDocuments(null,null,null,$id);
        if ($requestlist == FALSE) {
            return redirect(base_url('404'));
        }
        $data['form'] = $requestlist->result_array();
            // print_r($data['form']);
            // die();
        $this->load->view("reports/documentfile",$data);
    }


}