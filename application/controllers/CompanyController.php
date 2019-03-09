<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyController extends MY_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('LoggerModel','logger'); 
        $this->load->model('CompanyModel','com');
		$this->load->model('DocumentModel','doc');

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



}