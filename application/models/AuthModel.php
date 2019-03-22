<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AuthModel extends CI_Model {


	public function ExecuteLogin($data) {
		$this->db->select('user.*, stud.LastName as LastName2, stud.FirstName as FirstName2,stud.IsActive as AccountStatus, stud.Photopath, stud.BannerPath, stud.PersonalEmail');
		$this->db->from('tbl_users user');
		$this->db->join('tbl_students stud','stud.Id = user.AccountId','left outer');
		$this->db->where('user.LoginName',$data['Username']);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row();
		}
		else {
			return FALSE;
		}

	}	


}