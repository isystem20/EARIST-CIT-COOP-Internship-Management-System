<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends MY_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('LoggerModel','logger'); 
        $this->load->model('StudentModel','students');
        $this->load->model('CityModel','city');
        $this->load->model('RegionModel','region');
        $this->load->model('CourseModel','course');
        $this->load->model('SemesterModel','semester');
        $this->load->model('SectionModel','section');
        $this->load->model('YearLevelModel','yearlevel');
        $this->load->model('AdvisorModel','advisors');
        $this->load->model('NationalityModel','nationality');
		$this->load->model('DocumentModel','doc');
    }


	public function LoadUserMasterlist() {
		$layout = array('datatable'=>TRUE, 'page_title'=>'Student Masterlist');
		$data['all_list'] = $this->students->LoadMasterlist();
		$l['docs'] = $this->doc->DocumentwithRequests();
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar',$l);
		$this->load->view('pages/userlist',$data);
		// $this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        $this->logger->log('Load Masterlist','Students',$json); //Log  
	}


}