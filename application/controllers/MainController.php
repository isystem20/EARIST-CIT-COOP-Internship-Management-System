<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends MY_Controller {

	function __construct()
    {
        parent::__construct();
    }


	public function index()
	{
		$layout = array('charts' => TRUE, 'page_title'=>'Dashboard');
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar');
		$this->load->view('pages/dashboard');
		// $this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);
	}
}
