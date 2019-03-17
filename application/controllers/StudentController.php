<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends MY_Controller {

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
    private $cou = 'tbl_courses';

	public function LoadStudentMasterlist($filter = null,$value = null) {
		$layout = array('datatable'=>TRUE, 'page_title'=>'Student Masterlist');
		if (!empty($filter)) {
				$data['all_list'] = $this->students->LoadMasterlist($filter,$value);	
		}else {
			$data['all_list'] = $this->students->LoadMasterlist();			
		}

		$l['docs'] = $this->doc->DocumentwithRequests();
		$data['courses'] = $this->course->LoadMasterlist(null,$this->cou);

		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar',$l);
		$this->load->view('pages/studentlist',$data);
		// $this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        $this->logger->log('Load Masterlist','Students',$json); //Log  
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
		$l['docs'] = $this->doc->DocumentwithRequests();
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar',$l);
		$this->load->view('pages/studentregister',$data);
		// $this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        $this->logger->log('Register Form','Students',$json); //Log  
	}

	public function ViewStudent($id){ 
		$layout = array('form'=>TRUE,'formelements'=>TRUE, 'page_title'=>'Student Details');
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
		$l['docs'] = $this->doc->DocumentwithRequests();
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar',$l);
		$this->load->view('pages/loadstudentprofile',$data);
		// $this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        $this->logger->log('View Form','Students',$json); //Log  
	}

	public function UpdateStudent($id){ 
		$layout = array('form'=>TRUE,'formelements'=>TRUE, 'page_title'=>'Student Update');
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
		$l['docs'] = $this->doc->DocumentwithRequests();
		$this->load->view('layout/head',$layout);
		$this->load->view('layout/wrapper');
		$this->load->view('layout/topbar');
		$this->load->view('layout/leftbar',$l);
		$this->load->view('pages/loadstudentprofile',$data);
		// $this->load->view('layout/rightbar');
		$this->load->view('layout/scripts',$layout);
		$json = json_encode($data); //log
        $this->logger->log('Edit Form','Students',$json); //Log  
	}


	function callback_date_valid($date){
	    $day = (int) substr($date, 0, 2);
	    $month = (int) substr($date, 3, 2);
	    $year = (int) substr($date, 6, 4);
	    return checkdate($month, $day, $year);
	}

	public function Create() {
		$postdata = $this->input->post();
		$this->form_validation->set_rules('FirstName', 'Given Name', 'required');
        $this->form_validation->set_rules('LastName', 'Family Name', 'required');
        $this->form_validation->set_rules('Birthdate', 'Date of birth', 'required');
        $this->form_validation->set_rules('PersonalEmail', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('MobileNo', 'Mobile', 'required|exact_length[11]');
        $this->form_validation->set_rules('TelNo', 'Landline', 'exact_length[9]');
        $this->form_validation->set_rules('Code', 'Student Number', 'required|is_unique[tbl_students.Code]');
        $this->form_validation->set_rules('CourseId', 'Course', 'required');
        $this->form_validation->set_rules('YearLevelId', 'Year Level', 'required');
        $this->form_validation->set_rules('SemesterId', 'Semester', 'required');
        $this->form_validation->set_rules('SectionId', 'Section', 'required');
        $this->form_validation->set_rules('Advisor', 'Advisor', 'required');
        $this->form_validation->set_error_delimiters('<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">','</li></ul>');
        if ($this->form_validation->run() == FALSE){
        	foreach ($postdata as $key => $value) {
        		$data['responses'][$key] = form_error($key);
        	}
            $errors = validation_errors();
            $data['error'] = $errors;
            $json = json_encode($postdata); //log
	        $this->logger->log('Invalid Register','Students',$json); //Log  
            echo json_encode($data);
        }else{

        	foreach ($postdata as $key => $value) {
        		$postdata[$key] = ucwords($value);
        	}


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
		            $json = json_encode($errors); //log
			        $this->logger->log('Invalid Upload','Students',$json); //Log  
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
		            $json = json_encode($errors); //log
			        $this->logger->log('Invalid Upload','Students',$json); //Log  
		            $senderror = TRUE;	
		        }   
		        
			}
	
    		if ($senderror == TRUE) {
    			echo json_encode(['error'=>'Failed to Upload Images.']);
    		}
    		else {

		        $result = $this->students->AddStudent($postdata);
	     		if ($result != FALSE) {	
					$json = json_encode($result); //log
			        $this->logger->log('Success Register','Studdents',$json); //Log 
			        if (!empty($this->session->userdata('userid'))) {
			        	echo json_encode(['redirect'=>base_url('manage/students')]);
			        }
			        else {
			        	echo json_encode(['redirect'=>base_url()]);
			        }
	        		
	     		}
	     		else {
		            $json = json_encode($postdata); //log
			        $this->logger->log('Invalid Register','Students',$json); //Log  
	        		echo json_encode(['error'=>'Failed to save.']);
	     		}

    		}



        }
	}


	public function Update() {
		$postdata = $this->input->post();

		$this->form_validation->set_rules('Id', 'Selected Account', 'required');
		$this->form_validation->set_rules('FirstName', 'Given Name', 'required');
        $this->form_validation->set_rules('LastName', 'Family Name', 'required');
        $this->form_validation->set_rules('Birthdate', 'Date of birth', 'required');
        $this->form_validation->set_rules('PersonalEmail', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('MobileNo', 'Mobile', 'required|exact_length[11]');
        $this->form_validation->set_rules('TelNo', 'Landline', 'exact_length[9]');
        $this->form_validation->set_rules('Code', 'Student Number', 'required');
        $this->form_validation->set_rules('CourseId', 'Course', 'required');
        $this->form_validation->set_rules('YearLevelId', 'Year Level', 'required');
        $this->form_validation->set_rules('SemesterId', 'Semester', 'required');
        $this->form_validation->set_rules('SectionId', 'Section', 'required');
        $this->form_validation->set_rules('Advisor', 'Advisor', 'required');
        $this->form_validation->set_error_delimiters('<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">','</li></ul>');
        if ($this->form_validation->run() == FALSE){
        	foreach ($postdata as $key => $value) {
        		$data['responses'][$key] = form_error($key);
        	}
            $errors = validation_errors();
            $data['error'] = $errors;
            $json = json_encode($postdata); //log
	        $this->logger->log('Invalid Update','Students',$json); //Log  
            echo json_encode($data);
        }else{


        	foreach ($postdata as $key => $value) {
        		$postdata[$key] = ucwords($value);
        	}

        	
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
		            $json = json_encode($errors); //log
			        $this->logger->log('Invalid Upload','Students',$json); //Log  
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
		            $json = json_encode($errors); //log
			        $this->logger->log('Invalid Upload','Students',$json); //Log  
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
					$json = json_encode($result); //log
			        $this->logger->log('Success Update','Studdents',$json); //Log  
	        		echo json_encode(['redirect'=>$_SERVER['HTTP_REFERER']]);
	     		}
	     		else {
		            $json = json_encode($postdata); //log
			        $this->logger->log('Invalid Update','Students',$json); //Log  
	        		echo json_encode(['error'=>'Failed to save.']);
	     		}

    		}



        }
	}


	public function ChangeStatus() {
		$postdata = $this->input->post();
		// print_r($postdata);
		// die();
		if (!empty($postdata['Ids']) && (!empty($postdata['IsActive']) || $postdata['IsActive'] == 0 )) {
			$id = $postdata['Ids'];
			unset($postdata['Ids']);
	        $result = $this->students->UpdateStudentStatus($id,$postdata);
     		if ($result != FALSE) {	
				$json = json_encode($result); //log
		        $this->logger->log('Success Update','Students',$json); //Log  
        		echo json_encode(['redirect'=>$_SERVER['HTTP_REFERER']]);
     		}
     		else {
	            $json = json_encode($postdata); //log
		        $this->logger->log('Invalid Update','Students',$json); //Log  
        		echo json_encode(['error'=>'Failed to save.']);
     		}
		}else {
			$json = json_encode($postdata); //log
	        $this->logger->log('Missing Input','Students Update',$json); //Log  
    		echo json_encode(['error'=>'Undefined selection or command.']);
		}



	}




}
