<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DashboardModel extends CI_Model {

	private $students = 'tbl_students';
	private $logs = 'system_logs';
	private $users = 'tbl_users';


	function Get_Student_Count($active = 1) {
		$this->db->where('IsActive', $active);
		$this->db->from($this->students);
		$query = $this->db->count_all_results(); 
		return $query;
	}


	function Get_Recent_Activities($count) {
		$this->db->select('l.*,u.FirstName,u.LastName');
		$this->db->from($this->logs.' l');
		$this->db->join($this->users.' u','u.Id = l.UserId','left outer');
		$this->db->limit($count);
		$this->db->order_by('Timestamp','DESC');
		$query = $this->db->get(); 
		return $query;
	}
	


}