<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DocumentModel extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }


	function LoadMasterlist()
	{
		$this->db->select('d.*, p.DocumentName as PrerequisiteDocument');
		$this->db->from('tbl_documents d');
		$this->db->join('tbl_documents p','p.Id = d.Prerequisite','left outer');
		$get = $this->db->get();
		return $get;
	}

	function LoadSingle($id) {
		$this->db->select('*');
		$this->db->from('tbl_documents');
		$this->db->where('Id',$id);
		$get = $this->db->get();
		if ($get->num_rows() > 0) {
			return $get;
		}
		else {
			return FALSE;
		}
				
	}



	function AddDocument($data) {
        $this->load->library('Uuid');
        $id = $this->uuid->v4();
        $this->db->set('Id', "'".$id."'", FALSE);
        $this->db->set('CreatedById', "'".$this->session->userdata('userid')."'", FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid')."'", FALSE);
		$this->db->insert('tbl_documents',$data);
		// die($this->db->last_query());
		if ($this->db->affected_rows() > 0) {
			return FALSE;
			// return TRUE;
		}
		else {
			return $this->LoadSingle($id);			

		}
	}


	function UpdateStudent($id,$data) {
        $this->db->set('ModifiedAt', "'CURRENT_TIMESTAMP'", FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid')."'", FALSE);
        $this->db->where('Id',$id);
		$this->db->update('tbl_documents',$data);
		// die($this->db->last_query());
		if ($this->db->affected_rows() > 0) {
			return FALSE;
		}
		else {
			return $this->LoadSingle($id);			

		}
	}



}
