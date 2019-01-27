<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentModel extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }


	function LoadMasterlist()
	{
		$this->db->select('s.*, c.Name as CourseName, sec.Name as SectionName, sem.Name as SemesterName, l.Name as YearLevelName');
		$this->db->from('tbl_students s');
		$this->db->join('tbl_courses c','c.Id = s.CourseId','left outer');
		$this->db->join('tbl_sections sec','sec.Id = s.SectionId','left outer');
		$this->db->join('tbl_semesters sem','sem.Id = s.SemesterId','left outer');
		$this->db->join('tbl_school_levels l','l.Id = s.YearLevelId','left outer');
		$get = $this->db->get();
		return $get;
	}

	function LoadSingle($id) {
		$this->db->select('s.*, c.Name as CourseName, sec.Name as SectionName, sem.Name as SemesterName, l.Name as YearLevelName');
		$this->db->from('tbl_students s');
		$this->db->join('tbl_courses c','c.Id = s.CourseId','left outer');
		$this->db->join('tbl_sections sec','sec.Id = s.SectionId','left outer');
		$this->db->join('tbl_semesters sem','sem.Id = s.SemesterId','left outer');
		$this->db->join('tbl_school_levels l','l.Id = s.YearLevelId','left outer');
		$this->db->where('s.Id',$id);
		$get = $this->db->get();
		if ($get->num_rows() > 0) {
			return $get;
		}
		else {
			return FALSE;
		}
				
	}


	function AddStudent($data) {
        $this->load->library('Uuid');
        $id = $this->uuid->v4();
        $uid = $this->uuid->v4();
        //Generate LoginName
        $fullname = $data['FirstName'] . '.' . $data['LastName'];
        $loginname = str_replace(' ', '', $fullname);
        $loginname = strtolower($loginname);
        //Hash the Student Code
		$password = $data['Code'];
        $key = $this->config->item('encryption_key');
        $salt1 = hash('sha512', $key . $password);
        $salt2 = hash('sha512', $password . $key);
        $hashed_password = hash('sha512', $salt1 . $password . $salt2);



		$this->db->trans_start();
		//Create Student Profile
        $this->db->set('Id', "'".$id."'", FALSE);
        $this->db->set('CreatedById', "'".$this->session->userdata('userid')."'", FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid')."'", FALSE);
		$this->db->insert('tbl_students',$data);
		$this->db->flush_cache();
		//Create Student Account

        $this->db->set('Id', "'".$uid."'", FALSE);
        $this->db->set('UserCode', "'".$data['Code']."'", FALSE);
        $this->db->set('FirstName', "'".$data['FirstName']."'", FALSE);
        $this->db->set('LastName', "'".$data['LastName']."'", FALSE);
        $this->db->set('LoginName', "'".$loginname."'", FALSE);
        $this->db->set('PasswordHash', "'".$hashed_password."'", FALSE);
        $this->db->set('AccountId', "'".$id."'", FALSE);
        $this->db->set('UserType', "'STUDENT'", FALSE);
        $this->db->set('Email', "'".$data['PersonalEmail']."'", FALSE);
        $this->db->set('CreatedById', "'".$this->session->userdata('userid')."'", FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid')."'", FALSE);
		$this->db->insert('tbl_users');
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE)
		{
			return FALSE;
		}
		else {
			return $this->LoadSingle($id);
			
		}
	}

	function UpdateStudent($id,$data) {
        //Generate LoginName
        $fullname = $data['FirstName'] . '.' . $data['LastName'];
        $loginname = str_replace(' ', '', $fullname);
        $loginname = strtolower($loginname);

		$this->db->trans_start();
		//Update Student Profile
        $this->db->set('ModifiedAt', "'CURRENT_TIMESTAMP'", FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid')."'", FALSE);
        $this->db->where('Id',$id);
		$this->db->update('tbl_students',$data);
		$this->db->flush_cache();
		//Update Student Account
        $this->db->set('FirstName', "'".$data['FirstName']."'", FALSE);
        $this->db->set('LastName', "'".$data['LastName']."'", FALSE);
        $this->db->set('LoginName', "'".$loginname."'", FALSE);
        $this->db->set('Email', "'".$data['PersonalEmail']."'", FALSE);
        $this->db->where('AccountId',$id);
        $this->db->update('tbl_users');
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE)
		{
		   	return FALSE;
		}
		else {
			return $this->LoadSingle($id);
			
		}
	}


}
