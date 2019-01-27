<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends Admin_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('LoggerModel','logger'); 
        $this->load->model('DashboardModel','dash'); 
    }

	public function Dashboard() {
		$usertype = $this->session->userdata('usertype');
		if ($usertype == 'ADMIN') {
			$layout = array('charts' => TRUE, 'page_title'=>'Dashboard');
			$data['recent_acts'] = '';
			$data['counters'] = array('active_students' => $this->dash->Get_Student_Count(1), );
			$this->load->view('layout/head',$layout);
			$this->load->view('layout/wrapper');
			$this->load->view('layout/topbar');
			$this->load->view('layout/leftbar');
			$this->load->view('pages/dashboard',$data);
			// $this->load->view('layout/rightbar');
			$this->load->view('layout/scripts',$layout);
			$json = json_encode($data); //log
	        $this->logger->log('Load Dashboard','Dashboard',$json); //Log  			
		}

	}




}