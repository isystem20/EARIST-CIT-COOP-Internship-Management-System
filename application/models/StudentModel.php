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
        $this->db->set('Id', "'".$id."'", FALSE);
        $this->db->set('CreatedById', "'".$this->session->userdata('userid')."'", FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid')."'", FALSE);
		$this->db->insert('tbl_students',$data);
		// die($this->db->last_query());
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	function UpdateStudent($id,$data) {
        $this->db->set('ModifiedAt', "'CURRENT_TIMESTAMP'", FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid')."'", FALSE);
        $this->db->where('Id',$id);
		$this->db->update('tbl_students',$data);
		// die($this->db->last_query());
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}


}
