<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GenericController extends Admin_Controller {

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
		$this->load->model('GenericModel','generic');

    }
    private $sec = 'tbl_sections';
    private $sem = 'tbl_semesters';
    private $cou = 'tbl_courses';
    private $lvl = 'tbl_school_levels';
    private $nat = 'tbl_nationalities';
    private $cit = 'tbl_cities';
    private $reg = 'tbl_regions';

	public function LoadMasterlist($str) {
		
		$str = strtolower($str);
		if ($str == 'sections') {
			$layout = array('datatable'=>TRUE, 'page_title'=>'Section Masterlist');
			$data['all_list'] = $this->generic->LoadMasterlist(null,$this->sec);
			$data['labels'] = array('title' => 'Section Masterlist', 'class'=>'sections');
		}
		elseif ($str == 'semesters') {
			$layout = array('datatable'=>TRUE, 'page_title'=>'Semester Masterlist');
			$data['all_list'] = $this->generic->LoadMasterlist(null,$this->sem);
			$data['labels'] = array('title' => 'Semester Masterlist', 'class'=>'semesters');
		}
		elseif ($str == 'courses') {
			$layout = array('datatable'=>TRUE, 'page_title'=>'Course Masterlist');
			$data['all_list'] = $this->generic->LoadMasterlist(null,$this->cou);
			$data['labels'] = array('title' => 'Course Masterlist', 'class'=>'courses');
		}
		elseif ($str == 'levels') {
			$layout = array('datatable'=>TRUE, 'page_title'=>'Year Level Masterlist');
			$data['all_list'] = $this->generic->LoadMasterlist(null,$this->lvl);
			$data['labels'] = array('title' => 'Year Level Masterlist', 'class'=>'levels');
		}
		elseif ($str == 'nationalities') {
			$layout = array('datatable'=>TRUE, 'page_title'=>'Nationality Masterlist');
			$data['all_list'] = $this->generic->LoadMasterlist(null,$this->nat);
			$data['labels'] = array('title' => 'Nationality Masterlist', 'class'=>'nationalities');
		}
		elseif ($str == 'cities') {
			$layout = array('datatable'=>TRUE, 'page_title'=>'City Masterlist');
			$data['all_list'] = $this->generic->LoadMasterlist(null,$this->cit);
			$data['labels'] = array('title' => 'City Masterlist', 'class'=>'cities');
		}
		elseif ($str == 'regions') {
			$layout = array('datatable'=>TRUE, 'page_title'=>'Region Masterlist');
			$data['all_list'] = $this->generic->LoadMasterlist(null,$this->reg);
			$data['labels'] = array('title' => 'Region Masterlist', 'class'=>'regions');
		}

		else{
			http_response_code(404);
			die('Not Found');
		}
		
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar');
		$this->load->view('pages/genericlist',$data);
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        $this->logger->log('Load Masterlist','Generic:'.$str,$json); //Log  
	}

	public function Create($str) {

		$postdata = $this->input->post();
        $this->form_validation->set_rules('Code', 'Code', 'required');
        $this->form_validation->set_rules('Name', 'Name', 'required');
        $this->form_validation->set_error_delimiters('<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">','</li></ul>');
        if ($this->form_validation->run() == FALSE){
        	foreach ($postdata as $key => $value) {
        		$data['responses'][$key] = form_error($key);
        	}
            $errors = validation_errors();
            $data['error'] = $errors;
            $json = json_encode($postdata); //log
	        $this->logger->log('Invalid Register','Generic:'.$str,$json); //Log  
            echo json_encode($data);
        }else{

			$str = strtolower($str);
			if ($str == 'sections') {
				$result = $this->generic->Add($postdata,$this->sec);
			}
			elseif ($str == 'semesters') {
				$result = $this->generic->Add($postdata,$this->sem);
			}
			elseif ($str == 'courses') {
				$result = $this->generic->Add($postdata,$this->cou);
			}
			elseif ($str == 'levels') {
				$result = $this->generic->Add($postdata,$this->lvl);
			}
			elseif ($str == 'nationalities') {
				$result = $this->generic->Add($postdata,$this->nat);
			}
			elseif ($str == 'cities') {
				$result = $this->generic->Add($postdata,$this->cit);
			}
			elseif ($str == 'regions') {
				$result = $this->generic->Add($postdata,$this->reg);
			}
			else{
				http_response_code(404);
				die('Not Found');
			}
     		if ($result != FALSE) {	
				$json = json_encode($result); //log
		        $this->logger->log('Success Register','Generic:'.$str,$json); //Log  
        		echo json_encode(['redirect'=>base_url('manage/generic/'.$str)]);
     		}
     		else {
	            $json = json_encode($postdata); //log
		        $this->logger->log('Invalid Register','Generic:'.$str,$json); //Log  
        		echo json_encode(['error'=>'Failed to save.']);
     		}

        }
	}


	public function Update($str) {
		$postdata = $this->input->post();
		$this->form_validation->set_rules('Id', 'Selected Record', 'required');
        $this->form_validation->set_rules('Code', 'Code', 'required');
        $this->form_validation->set_rules('Name', 'Name', 'required');
        $this->form_validation->set_error_delimiters('<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">','</li></ul>');
        if ($this->form_validation->run() == FALSE){
        	foreach ($postdata as $key => $value) {
        		$data['responses'][$key] = form_error($key);
        	}
            $errors = validation_errors();
            $data['error'] = $errors;
            $json = json_encode($postdata); //log
	        $this->logger->log('Invalid Update','Generic:'.$str,$json); //Log  
            echo json_encode($data);
        }else{

			$str = strtolower($str);
			$postid = $postdata['Id'];
			unset($postdata['Id']);
			if ($str == 'sections') {
				$result = $this->generic->Edit($postid,$postdata,$this->sec);
			}
			elseif ($str == 'semesters') {
				$result = $this->generic->Edit($postid,$postdata,$this->sem);
			}
			elseif ($str == 'courses') {
				$result = $this->generic->Edit($postid,$postdata,$this->cou);
			}
			elseif ($str == 'levels') {
				$result = $this->generic->Edit($postid,$postdata,$this->lvl);
			}
			elseif ($str == 'nationalities') {
				$result = $this->generic->Edit($postid,$postdata,$this->nat);
			}
			elseif ($str == 'cities') {
				$result = $this->generic->Edit($postid,$postdata,$this->cit);
			}
			elseif ($str == 'regions') {
				$result = $this->generic->Edit($postid,$postdata,$this->reg);
			}
			else{
				http_response_code(404);
				die('Not Found');
			}
     		if ($result != FALSE) {	
				$json = json_encode($result); //log
		        $this->logger->log('Success Update','Generic:'.$str,$json); //Log  
        		echo json_encode(['redirect'=>base_url('manage/generic/'.$str)]);
     		}
     		else {
	            $json = json_encode($postdata); //log
		        $this->logger->log('Invalid Update','Generic:'.$str,$json); //Log  
        		echo json_encode(['error'=>'Failed to save.']);
     		}

        }
	}


	public function Delete($str) {
		$postdata = $this->input->post();
		$this->form_validation->set_rules('Id', 'Selected Record', 'required');
        $this->form_validation->set_error_delimiters('<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">','</li></ul>');
        if ($this->form_validation->run() == FALSE){
        	foreach ($postdata as $key => $value) {
        		$data['responses'][$key] = form_error($key);
        	}
            $errors = validation_errors();
            $data['error'] = $errors;
            $json = json_encode($postdata); //log
	        $this->logger->log('Invalid Update','Generic:'.$str,$json); //Log  
            echo json_encode($data);
        }else{

			$str = strtolower($str);
			$postid = $postdata['Id'];
			unset($postdata['Id']);
			if ($str == 'sections') {
				$result = $this->generic->Delete($postid,$this->sec);
			}
			elseif ($str == 'semesters') {
				$result = $this->generic->Delete($postid,$this->sem);
			}
			elseif ($str == 'courses') {
				$result = $this->generic->Delete($postid,$this->cou);
			}
			elseif ($str == 'levels') {
				$result = $this->generic->Delete($postid,$this->lvl);
			}
			elseif ($str == 'nationalities') {
				$result = $this->generic->Delete($postid,$this->nat);
			}
			elseif ($str == 'cities') {
				$result = $this->generic->Delete($postid,$this->cit);
			}
			elseif ($str == 'regions') {
				$result = $this->generic->Delete($postid,$this->reg);
			}
			else{
				http_response_code(404);
				die('Not Found');
			}
     		if ($result != FALSE) {	
				$json = json_encode($result); //log
		        $this->logger->log('Success Delete','Generic:'.$str,$json); //Log  
        		echo json_encode(['redirect'=>base_url('manage/generic/'.$str)]);
     		}
     		else {
	            $json = json_encode($postdata); //log
		        $this->logger->log('Invalid Delete','Generic:'.$str,$json); //Log  
        		echo json_encode(['error'=>'Failed to save.']);
     		}

        }
	}

}
