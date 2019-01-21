<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DocumentController extends MY_Controller {

	function __construct()
    {
        parent::__construct();
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
		$this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);
	}



}
