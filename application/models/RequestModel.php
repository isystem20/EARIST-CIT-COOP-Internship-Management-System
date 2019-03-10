<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RequestModel extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }


	function AddRequest($data) {
        $this->load->library('Uuid');
        $id = $this->uuid->v4();
		$this->db->trans_start();
		$this->db->set('Id', "'".$id."'", FALSE);
        $this->db->set('CreatedById', "'".$this->session->userdata('userid')."'", FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid')."'", FALSE);
		$this->db->insert('tbl_requests',$data);
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{
			return FALSE;
		}
		else {
			return $id;
			
		}
	}

	function RequestDocuments($docid = null,$userid = null,$status = null,$id = null) {
		$this->db->select('r.*, d.Code as DocCode, d.DocumentName as DocumentName, c.CompanyName as CompanyName, s.FirstName, s.LastName,or.SFirstName, or.SLastName,a.ContactPerson, a.Designation');
		$this->db->from('tbl_requests r');
		$this->db->join('tbl_documents d','d.Id = r.DocumentId','left outer');
		$this->db->join('tbl_ojt_applications a','a.Id = r.ApplicationId','left outer');
		$this->db->join('tbl_ojt_records or','or.Id = r.RecordId','left outer');
		$this->db->join('tbl_companies c','c.Id = a.CompanyId','left outer');
		$this->db->join('tbl_students s','s.Id = a.StudentId','left outer');
		
		if (!empty($docid)) {
			$this->db->where('r.DocumentId',$docid);
		}
		if (!empty($userid)) {
			$this->db->where('s.Id',$userid);
		}
		if (!empty($id)) {
			$this->db->where('r.Id',$id);
		}
		if (!empty($status)) {
			if (is_array($status)) {
				$this->db->group_start();
				$n = 0;
				foreach ($status as $key) {
					if ($n == 0) {
						$this->db->where('r.Status',$key);
					}
					else {
						$this->db->or_where('r.Status',$key);
					}
					$n = $n + 1;
				}
				$this->db->group_end();
			}
			else {
				$this->db->where('r.Status',$status);
			}
			
		}		
		$get = $this->db->get();
		return $get;	
	}


	public function UpdateStatus($id, $data) {
		$this->db->update('tbl_requests',$data);
		$this->db->where('Id',$id);
		if ($this->db->affected_rows() > 0) {
			return $id;
		}
		else {
			return FALSE;
		}

	}

}