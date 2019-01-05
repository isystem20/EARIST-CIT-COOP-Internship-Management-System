<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentModel extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }


	function LoadMasterlist()
	{
		$this->db->select('*');
		$this->db->from('tbl_students');
		$get = $this->db->get();
		return $get;
	}




}
