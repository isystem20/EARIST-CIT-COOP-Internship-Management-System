<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InternshipController extends MY_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('LoggerModel','logger'); 
        $this->load->model('StudentModel','students');
		$this->load->model('DocumentModel','doc');
        $this->load->model('CourseModel','course');
		$this->load->model('CompanyModel','com');
    }


	public function LoadStudentMasterlist()
	{
		$layout = array('select2' => TRUE, 'slider'=> TRUE,'table'=>TRUE,'datepicker'=>TRUE, 'page_title'=>'Student Progress Monitor');
		$data['all_list'] = $this->students->LoadMasterlist();
		$data['courses'] = $this->course->LoadMasterlist('Id,Name');
		$data['companies'] = $this->com->LoadMasterlist('a.Id,CompanyName');
		$l['docs'] = $this->doc->DocumentwithRequests();
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar',$l);
		$this->load->view('pages/intern_progress',$data);
		// $this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        $this->logger->log('Load Masterlist','Interns',$json); //Log  		
	}



}
