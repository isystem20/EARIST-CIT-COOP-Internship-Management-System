<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SectionModel extends CI_Model {


	function LoadMasterlist($fields = null) {
		if (empty($fields)) {
			$this->db->select('a.*, c.FirstName cFirstName, c.LastName cLastName, m.FirstName mFirstName, m.LastName mLastName');
		}else{
			$this->db->select($fields);
		}
		$this->db->from('tbl_sections a');
		$this->db->join('tbl_users c','c.Id = a.CreatedById','left outer');
		$this->db->join('tbl_users m','m.Id = a.CreatedById','left outer');
		$this->db->order_by('a.Name','ASC');
		$query = $this->db->get();
		return $query;
	}	


}