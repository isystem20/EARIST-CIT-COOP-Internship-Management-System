<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountModel extends CI_Model {

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


	function UpdateActivationCode($id) {
		$code = rand(100000,999999);
		$this->db->set('ActivationCode', "'".$code."'", FALSE);
		$this->db->where('AccountId',$id);
		$this->db->update('tbl_users');
		if ($this->db->affected_rows() > 0) {
			return $code;
		}
		else {
			return FALSE;
		}

	}

	function LoadAccounts($filter = null,$value = null, $type = null)
	{
		$this->db->select('s.*, c.Name as CourseName, sec.Name as SectionName, sem.Name as SemesterName, l.Name as YearLevelName, a.LoginName, a.SecurityUserLevelId, a.PasswordNeverExpires, a.UserCantChangePassword, a.UserChangePasswordNextLogon, a.PasswordDate, a.UserType');
		$this->db->from('tbl_users a');
		$this->db->join('tbl_students s','s.Id = a.AccountId','left outer');
		$this->db->join('tbl_courses c','c.Id = s.CourseId','left outer');
		$this->db->join('tbl_sections sec','sec.Id = s.SectionId','left outer');
		$this->db->join('tbl_semesters sem','sem.Id = s.SemesterId','left outer');
		$this->db->join('tbl_school_levels l','l.Id = s.YearLevelId','left outer');
		if (!empty($filter) && (!empty($value) || $value == 0)) {
			if (strtolower($filter) == 'course') {
				$this->db->where('s.CourseId',$value);
			}
			if (strtolower($filter) == 'section') {
				$this->db->where('s.SectionId',$value);
			}
			if (strtolower($filter) == 'status') {
				$this->db->where('s.IsActive',$value);
			}
		}
		if (!empty($type)) {
			$this->db->where('a.UserType',$type);
		}
		$get = $this->db->get();
		// die($this->db->last_query());
		return $get;
	}







}