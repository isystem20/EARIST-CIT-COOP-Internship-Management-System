<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CompanyModel extends CI_Model {


	function LoadMasterlist($fields = null) {
		if (empty($fields)) {
			$this->db->select('a.*, c.FirstName cFirstName, c.LastName cLastName, m.FirstName mFirstName, m.LastName mLastName');
		}else{
			$this->db->select($fields);
		}
		$this->db->from('tbl_companies a');
		$this->db->join('tbl_users c','c.Id = a.CreatedById','left outer');
		$this->db->join('tbl_users m','m.Id = a.CreatedById','left outer');
		$this->db->order_by('a.CompanyName','ASC');
		$query = $this->db->get();
		return $query;
	}	


	function AddCompany($data) {

		$this->db->trans_start();
        $this->db->set('CreatedById', "'".$this->session->userdata('userid')."'", FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid')."'", FALSE);
		$this->db->insert('tbl_companies',$data);
		$id = $this->db->insert_id();
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