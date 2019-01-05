<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends MY_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('StudentModel','students');
    }


	public function LoadStudentMasterlist()
	{
		$layout = array('select2' => TRUE, 'slider'=> TRUE,'table'=>TRUE,'datepicker'=>TRUE, 'page_title'=>'Student Masterlist');
		$data['all_list'] = $this->students->LoadMasterlist();
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar');
		$this->load->view('pages/studentlist',$data);
		$this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);
	}



}
