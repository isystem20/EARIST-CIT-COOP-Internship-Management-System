<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DashboardModel extends CI_Model {

	private $students = 'tbl_students';

	function Get_Student_Count($active = 1) {
		$this->db->where('IsActive', $active);
		$this->db->from($this->students);
		$query = $this->db->count_all_results(); 
		return $query;
	}



	


}