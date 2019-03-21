<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApplicationModel extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }


	function LoadMasterlist()
	{
		$this->db->select('a.*, c.CompanyName as CompanyName, c.Address1 as Address1, c.Address2 as Address2,s.FirstName, s.LastName,sec.Name as SectionName, rec.Id as RecordId');
		$this->db->from('tbl_ojt_applications a');
		$this->db->join('tbl_students s','s.Id = a.StudentId','left outer');
		$this->db->join('tbl_companies c','c.Id = a.CompanyId','left outer');
		$this->db->join('tbl_sections sec','sec.Id = s.SectionId','left outer');
		$this->db->join('tbl_ojt_records rec','rec.ApplicationId = a.Id','left outer');
		$get = $this->db->get();
		return $get;
	}

	function LoadSingle($id,$userid = null,$ajax = FALSE) {
		$this->db->select('a.*, c.CompanyName as CompanyName, c.Address1 as Address1, c.Address2 as Address2,s.FirstName, s.LastName,sec.Name as SectionName, rec.Id as RecordId');
		$this->db->from('tbl_ojt_applications a');
		$this->db->join('tbl_students s','s.Id = a.StudentId','left outer');
		$this->db->join('tbl_companies c','c.Id = a.CompanyId','left outer');
		$this->db->join('tbl_sections sec','sec.Id = s.SectionId','left outer');
		$this->db->join('tbl_ojt_records rec','rec.ApplicationId = a.Id','left outer');
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
		$this->db->set('Id', "'".$id."'", FALSE);
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


	function GenerateReportPreview($data) {

		$this->db->select('a.*, c.CompanyName as CompanyName, c.Address1 as Address1, c.Address2 as Address2,s.FirstName, s.LastName,sec.Name as SectionName, s.Gender as Gender');
		$this->db->from('tbl_ojt_applications a');
		$this->db->join('tbl_students s','s.Id = a.StudentId','left outer');
		$this->db->join('tbl_companies c','c.Id = a.CompanyId','left outer');
		$this->db->join('tbl_sections sec','sec.Id = s.SectionId','left outer');
		$this->db->where('s.Id',$data['StudentId']);
		$this->db->where('a.Id',$data['ApplicationId']);
		$get = $this->db->get();
		return $get;

	}




	function DeleteApp($data) {
		$n = 0;
		foreach ($data as $id) {
			$n = $n + 1;
			if ($n == 1) {
				$this->db->where('Id', $id);
			}
			else {
				$this->db->or_where('Id', $id);
			}
		}
		$this->db->delete('tbl_ojt_applications');
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}
		else {
			return FALSE;
		}

	}


}