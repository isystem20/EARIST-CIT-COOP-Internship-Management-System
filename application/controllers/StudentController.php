<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends MY_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('StudentModel','students');
        $this->load->model('CityModel','city');
        $this->load->model('RegionModel','region');
        $this->load->model('CourseModel','course');
        $this->load->model('SemesterModel','semester');
        $this->load->model('SectionModel','section');
        $this->load->model('YearLevelModel','yearlevel');
        $this->load->model('AdvisorModel','advisors');
        $this->load->model('NationalityModel','nationality');
    }


	public function LoadStudentMasterlist() {
		$layout = array('datatable'=>TRUE, 'page_title'=>'Student Masterlist');
		$data['all_list'] = $this->students->LoadMasterlist();
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar');
		$this->load->view('pages/studentlist',$data);
		$this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);
	}


	public function RegisterStudent(){ 
		$layout = array('form'=>TRUE,'formelements'=>TRUE, 'page_title'=>'Student Registration');
		$data['cities'] = $this->city->LoadMasterlist('Id,Name');
		$data['regions'] = $this->region->LoadMasterlist('Id,Name');
		$data['courses'] = $this->course->LoadMasterlist('Id,Name');
		$data['semesters'] = $this->semester->LoadMasterlist('Id,Name');
		$data['sections'] = $this->section->LoadMasterlist('Id,Name');
		$data['yearlevels'] = $this->yearlevel->LoadMasterlist('Id,Name');
		$data['nationality'] = $this->nationality->LoadMasterlist('Id,Name');
		$data['advisors'] = $this->advisors->LoadMasterlist('Id,LastName,FirstName');
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar');
		$this->load->view('pages/studentregister',$data);
		$this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);
	}

	public function ViewStudent($id){ 
		$layout = array('form'=>TRUE,'formelements'=>TRUE, 'page_title'=>'Student Registration');
		$data['cities'] = $this->city->LoadMasterlist('Id,Name');
		$data['regions'] = $this->region->LoadMasterlist('Id,Name');
		$data['courses'] = $this->course->LoadMasterlist('Id,Name');
		$data['semesters'] = $this->semester->LoadMasterlist('Id,Name');
		$data['sections'] = $this->section->LoadMasterlist('Id,Name');
		$data['yearlevels'] = $this->yearlevel->LoadMasterlist('Id,Name');
		$data['nationality'] = $this->nationality->LoadMasterlist('Id,Name');
		$data['advisors'] = $this->advisors->LoadMasterlist('Id,LastName,FirstName');
		$student_profile = $this->students->LoadSingle($id);
		if ($student_profile == FALSE) {
			return redirect(base_url('404'));
		}
		$data['profile'] = $student_profile->result();
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar');
		$this->load->view('pages/loadstudentprofile',$data);
		$this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);
	}

	public function UpdateStudent($id){ 
		$layout = array('form'=>TRUE,'formelements'=>TRUE, 'page_title'=>'Student Registration');
		$data['cities'] = $this->city->LoadMasterlist('Id,Name');
		$data['regions'] = $this->region->LoadMasterlist('Id,Name');
		$data['courses'] = $this->course->LoadMasterlist('Id,Name');
		$data['semesters'] = $this->semester->LoadMasterlist('Id,Name');
		$data['sections'] = $this->section->LoadMasterlist('Id,Name');
		$data['yearlevels'] = $this->yearlevel->LoadMasterlist('Id,Name');
		$data['nationality'] = $this->nationality->LoadMasterlist('Id,Name');
		$data['advisors'] = $this->advisors->LoadMasterlist('Id,LastName,FirstName');
		$student_profile = $this->students->LoadSingle($id);
		if ($student_profile == FALSE) {
			return redirect(base_url('404'));
		}
		$data['profile'] = $student_profile->result();
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar');
		$this->load->view('pages/loadstudentprofile',$data);
		$this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);
	}


	public function Create() {
		$postdata = $this->input->post();
		$this->form_validation->set_rules('FirstName', 'Given Name', 'required');
        // $this->form_validation->set_rules('LastName', 'Family Name', 'required');
        // $this->form_validation->set_rules('Birthdate', 'Date of birth', 'required');
        // $this->form_validation->set_rules('PersonalEmail', 'Email', 'required|email');
        // $this->form_validation->set_rules('MobileNo', 'Mobile', 'required');
        // $this->form_validation->set_rules('Code', 'Student Number', 'required|unique[tbl_students.Code]');
        // $this->form_validation->set_rules('CourseId', 'Course', 'required');
        // $this->form_validation->set_rules('YearLevelId', 'Year Level', 'required');
        // $this->form_validation->set_rules('SemesterId', 'Semester', 'required');
        // $this->form_validation->set_rules('SectionId', 'Section', 'required');
        // $this->form_validation->set_rules('Advisor', 'Advisor', 'required');
        $this->form_validation->set_error_delimiters('<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">','</li></ul>');
        if ($this->form_validation->run() == FALSE){
        	foreach ($postdata as $key => $value) {
        		$data['responses'][$key] = form_error($key);
        	}
            $errors = validation_errors();
            $data['error'] = $errors;
            // array_push($data, ['error'=>$errors]);
            echo json_encode($data);
        }else{
	        $path = dirname(BASEPATH).'/uploads/public/';
	        $config['upload_path'] = $path;
	        $config['allowed_types'] = 'gif|jpg|png';
	        $config['max_size'] = '100000';
	 		$senderror = FALSE;
	        $this->load->library('upload', $config);

			if (!empty($_FILES["Profile"]["name"])) {

		        if ($this->upload->do_upload('Profile')) {
		        	$photo_file = $this->upload->data();
            		$postdata['PhotoPath'] = 'uploads/public/' . $photo_file['file_name'];
		        }		 
		        else {
		            $errors = $this->upload->display_errors();
		            $senderror = TRUE;
		        }

			}

			if (!empty($_FILES["Banner"]["name"])) {

		        if ($this->upload->do_upload('Banner')) {
		        	$banner_file = $this->upload->data();
		        	$postdata['BannerPath'] = 'uploads/public/' . $banner_file['file_name'];
	            
		        }		
		        else {
		            $errors = $this->upload->display_errors();
		            $senderror = TRUE;	
		        }   
		        
			}
	
    		if ($senderror == TRUE) {
    			echo json_encode(['error'=>'Failed to Upload Images.']);
    		}
    		else {

		        $result = $this->students->AddStudent($postdata);
	     		if ($result != FALSE) {	
	        		echo json_encode(['redirect'=>base_url('manage/students')]);
	     		}
	     		else {
	        		echo json_encode(['error'=>'Failed to save.']);
	     		}

    		}



        }
	}


	public function Update() {
		$postdata = $this->input->post();

		$this->form_validation->set_rules('Id', 'Selected Account', 'required');
		$this->form_validation->set_rules('FirstName', 'Given Name', 'required');
        // $this->form_validation->set_rules('LastName', 'Family Name', 'required');
        // $this->form_validation->set_rules('Birthdate', 'Date of birth', 'required');
        // $this->form_validation->set_rules('PersonalEmail', 'Email', 'required|email');
        // $this->form_validation->set_rules('MobileNo', 'Mobile', 'required');
        // $this->form_validation->set_rules('Code', 'Student Number', 'required|unique[tbl_students.Code]');
        // $this->form_validation->set_rules('CourseId', 'Course', 'required');
        // $this->form_validation->set_rules('YearLevelId', 'Year Level', 'required');
        // $this->form_validation->set_rules('SemesterId', 'Semester', 'required');
        // $this->form_validation->set_rules('SectionId', 'Section', 'required');
        // $this->form_validation->set_rules('Advisor', 'Advisor', 'required');
        $this->form_validation->set_error_delimiters('<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">','</li></ul>');
        if ($this->form_validation->run() == FALSE){
        	foreach ($postdata as $key => $value) {
        		$data['responses'][$key] = form_error($key);
        	}
            $errors = validation_errors();
            $data['error'] = $errors;
            // array_push($data, ['error'=>$errors]);
            echo json_encode($data);
        }else{
	        $path = dirname(BASEPATH).'/uploads/public/';
	        $config['upload_path'] = $path;
	        $config['allowed_types'] = 'gif|jpg|png';
	        $config['max_size'] = '100000';
	 		$senderror = FALSE;
	        $this->load->library('upload', $config);

			if (!empty($_FILES["Profile"]["name"])) {

		        if ($this->upload->do_upload('Profile')) {
		        	$photo_file = $this->upload->data();
            		$postdata['PhotoPath'] = 'uploads/public/' . $photo_file['file_name'];
		        }		 
		        else {
		            $errors = $this->upload->display_errors();
		            $senderror = TRUE;
		        }

			}

			if (!empty($_FILES["Banner"]["name"])) {

		        if ($this->upload->do_upload('Banner')) {
		        	$banner_file = $this->upload->data();
		        	$postdata['BannerPath'] = 'uploads/public/' . $banner_file['file_name'];
	            
		        }		
		        else {
		            $errors = $this->upload->display_errors();
		            $senderror = TRUE;	
		        }   
		        
			}
	
    		if ($senderror == TRUE) {
    			echo json_encode(['error'=>'Failed to Upload Images.']);
    		}
    		else {
    			$id = $postdata['Id'];
    			unset($postdata['Id']);
		        $result = $this->students->UpdateStudent($id,$postdata);
	     		if ($result != FALSE) {	
	        		echo json_encode(['redirect'=>base_url('student/students')]);
	     		}
	     		else {
	        		echo json_encode(['error'=>'Failed to save.']);
	     		}

    		}



        }
	}




}
