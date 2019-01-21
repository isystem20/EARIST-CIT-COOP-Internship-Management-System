<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdvisorModel extends CI_Model {


	function LoadMasterlist($fields = null) {
		if (empty($fields)) {
			$this->db->select('*');
		}else{
			$this->db->select($fields);
		}
		$this->db->from('tbl_advisors');
		$this->db->order_by('LastName','ASC');
		$query = $this->db->get();
		return $query;
	}	


}