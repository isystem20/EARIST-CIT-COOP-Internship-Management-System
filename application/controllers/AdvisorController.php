<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdvisorController extends MY_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('LoggerModel','logger'); 
        $this->load->model('StudentModel','students');
        $this->load->model('CityModel','city');
        $this->load->model('RegionModel','region');
        $this->load->model('CourseModel','course');
        $this->load->model('SemesterModel','semester');
        $this->load->model('SectionModel','section');
        $this->load->model('YearLevelModel','yearlevel');
    }


	public function LoadAdvisorMasterlist()
	{
		$layout = array('datatable'=>TRUE, 'page_title'=>'Advisor Masterlist');
		$data['all_list'] = $this->students->LoadMasterlist();
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar');
		$this->load->view('pages/advisorlist',$data);
		// $this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);

	}





}