<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GenericModel extends CI_Model {


	function LoadMasterlist($fields = null,$table) {
		if (empty($fields)) {
			$this->db->select('a.*, c.FirstName cFirstName, c.LastName cLastName, m.FirstName mFirstName, m.LastName mLastName');
		}else{
			$this->db->select($fields);
		}
		$this->db->from($table.' a');
		$this->db->join('tbl_users c','c.Id = a.CreatedById','left outer');
		$this->db->join('tbl_users m','m.Id = a.CreatedById','left outer');
		$this->db->order_by('a.Name','ASC');
		$query = $this->db->get();
		return $query;
	}

	function LoadSingle($id,$table) {
		$this->db->select('a.*, c.FirstName cFirstName, c.LastName cLastName, m.FirstName mFirstName, m.LastName mLastName');
		$this->db->from($table.' a');
		$this->db->join('tbl_users c','c.Id = a.CreatedById','left outer');
		$this->db->join('tbl_users m','m.Id = a.CreatedById','left outer');
		$this->db->where('a.Id',$id);
		$query = $this->db->get();
		return $query;		
	}


	function Add($data,$table) {
        $this->db->set('CreatedById', "'".$this->session->userdata('userid')."'", FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid')."'", FALSE);
		$this->db->insert($table,$data);
		$id = $this->db->insert_id();
		if ($id > 0) {
			return $this->LoadSingle($id,$table);	
		}
		else {
			return FALSE;		
		}
	}

	function Edit($id,$data,$table) {
        $this->db->set('ModifiedAt', "'CURRENT_TIMESTAMP'", FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid')."'", FALSE);
        $this->db->where('Id',$id);
		$this->db->update($table,$data);
		$id = $this->db->affected_rows();
		if ($id > 0) {
			return $this->LoadSingle($id,$table);	
		}
		else {
			return FALSE;		
		}
	}

	function Delete($id,$table) {
		$this->db->where('Id', $id);
		$this->db->delete($table);
		$id = $this->db->affected_rows();
		if ($id > 0) {
			return $this->db->last_query();	
		}
		else {
			return FALSE;		
		}		
	}


}