<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RecordModel extends CI_Model {


	public function AddRecord($data) {
        $this->load->library('Uuid');
        $id = $this->uuid->v4();


		$this->db->trans_start();
		//Create Student Profile
        $this->db->set('Id', "'".$id."'", FALSE);
        $this->db->set('CreatedById', "'".$this->session->userdata('userid')."'", FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('userid')."'", FALSE);
		$this->db->insert('tbl_ojt_records',$data);
		//Create Student Account
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE)
		{
			return FALSE;
		}
		else {
			return 'Update Successul';
			
		}

	}

	public function UpdateRecord($id,$data) {
		$this->db->update('tbl_ojt_records',$data);
		$this->db->where('Id',$id);
		if ($this->db->affected_rows() > 0) {
			return $id;
		}
		else {
			return FALSE;
		}
	}


	function LoadSingle($id,$userid = null,$ajax = FALSE) {
		$this->db->select('r.*, a.CompanyId');
		$this->db->from('tbl_ojt_records r');
		$this->db->join('tbl_ojt_applications a','a.Id = r.ApplicationId','left outer');
		$this->db->join('tbl_companies c','c.Id = a.CompanyId','left outer');
		if (!empty($id)) {
			$this->db->where('r.Id',$id);
		}
		if (!empty($userid)) {
			$this->db->where('r.StudentId',$userid);
		}
		$get = $this->db->get();
		if ($get->num_rows() > 0) {
			return $get;
		}
		else {
			return FALSE;
		}		
	}

}