<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApplicationModel extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }


	function LoadMasterlist()
	{
		$this->db->select('a.*, c.CompanyName as CompanyName, c.Address1 as Address1, c.Address2 as Address2,s.FirstName, s.LastName,sec.Name as SectionName');
		$this->db->from('tbl_ojt_applications a');
		$this->db->join('tbl_students s','s.Id = a.StudentId','left outer');
		$this->db->join('tbl_companies c','c.Id = a.CompanyId','left outer');
		$this->db->join('tbl_sections sec','sec.Id = s.SectionId','left outer');
		$get = $this->db->get();
		return $get;
	}

	function LoadSingle($id,$userid) {
		$this->db->select('a.*, c.CompanyName as CompanyName, c.Address1 as Address1, c.Address2 as Address2,s.FirstName, s.LastName,sec.Name as SectionName');
		$this->db->from('tbl_ojt_applications a');
		$this->db->join('tbl_students s','s.Id = a.StudentId','left outer');
		$this->db->join('tbl_companies c','c.Id = a.CompanyId','left outer');
		$this->db->join('tbl_sections sec','sec.Id = s.SectionId','left outer');
		if (!empty($id)) {
			$this->db->where('a.Id',$id);
		}
		if (!empty($userid)) {
			$this->db->where('a.StudentId',$userid);
		}
		$get = $this->db->get();
		if ($get->num_rows() > 0) {
			return $get;
		}
		else {
			return FALSE;
		}		
	}

	function AddApplication($data) {
        $this->load->library('Uuid');
        $id = $this->uuid->v4();
        if (empty($data['StudentId'])) {
        	$data['StudentId'] = $this->session->userdata('account_id');
        }
		$this->db->trans_start();
        $this->db->set('CreatedById', "'".$this->session->userdata('userid')."'", FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid')."'", FALSE);
		$this->db->insert('tbl_ojt_applications',$data);
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{
			return FALSE;
		}
		else {
			return $id;
			
		}
	}

}