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

    public function LoadRequests($id = null){
		$layout = array('datatable' => TRUE, 'page_title'=>'OJT Applications');
		$data['all_list'] = $this->app->LoadSingle(null,$this->session->userdata('account_id'));
		$data['docs'] = $this->docs->LoadMasterlist();
        $requestlist = $this->req->RequestDocuments($id);
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


}