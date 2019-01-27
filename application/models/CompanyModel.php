<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CompanyModel extends CI_Model {


	function LoadMasterlist($fields = null) {
		if (empty($fields)) {
			$this->db->select('a.*, c.FirstName cFirstName, c.LastName cLastName, m.FirstName mFirstName, m.LastName mLastName, cit.Name as CityName, (select count(app.Id) from tbl_ojt_applications app left outer join tbl_ojt_records r on r.ApplicationId = app.Id where app.CompanyId = a.Id and r.IsActive = "1") as InternCount');
		}else{
			$this->db->select($fields);
		}
		$this->db->from('tbl_companies a');
		$this->db->join('tbl_users c','c.Id = a.CreatedById','left outer');
		$this->db->join('tbl_users m','m.Id = a.CreatedById','left outer');
		$this->db->join('tbl_cities cit','cit.Id = a.CityId','left outer');
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