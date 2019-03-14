<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RequestModel extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }


	function AddRequest($data) {
        $this->load->library('Uuid');
        $id = $this->uuid->v4();
		$this->db->trans_start();
		$this->db->set('Id', "'".$id."'", FALSE);
        $this->db->set('CreatedById', "'".$this->session->userdata('account_id')."'", FALSE);
        $this->db->set('ModifiedById', "'".$this->session->userdata('account_id')."'", FALSE);
		$this->db->insert('tbl_requests',$data);
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{
			return FALSE;
		}
		else {
			return $id;
			
		}
	}

	function RequestDocuments($docid = null,$userid = null,$status = null,$id = null) {
		$this->db->select('r.Id, r.DocumentId, r.ApplicationId, r.RecordId, r.CreatedAt, s.FirstName, s.LastName, a.ContactPerson, or.SFirstName as SFirstName, or.SLastName as SLastName, d.Code as DocCode, d.DocumentName as DocumentName, d.Content, a.LabelDate as DocumentDate, a.ContactPerson, a.Designation as ContactPerson_Designation, a.Address1 as CompanyAddress1, concat(ci.Name," ",a.Zip) as CompanyAddress2, c.CompanyName as CompanyName, s.FirstName as StudentFName, s.LastName as StudentLName, concat(s.FirstName," ",s.LastName) as StudentFullName, co.Name as StudentCourse, or.Hours as StudentOJTHours,s.Gender as StudentGender, "" as StudentPronoun, "" as Student3rdPerson, concat(or.SFirstName," ",or.SLastName) as TrainingSupervisor, or.SupervisorPosition as TrainingSupervisor_Designation, concat(or.MFirstName," ",or.MLastName) as TrainingManager, or.StartDate as StudentStartDate, or.EndDate as StudentEndDate, or.ScheduleDays as StudentScheduleDays, or.ScheduleTime as StudentScheduleTime');
		$this->db->from('tbl_requests r');
		$this->db->join('tbl_documents d','d.Id = r.DocumentId','left outer');
		$this->db->join('tbl_ojt_applications a','a.Id = r.ApplicationId','left outer');
		$this->db->join('tbl_ojt_records or','or.Id = r.RecordId','left outer');
		$this->db->join('tbl_companies c','c.Id = a.CompanyId','left outer');
		$this->db->join('tbl_students s','s.Id = a.StudentId','left outer');
		$this->db->join('tbl_courses co','co.Id = s.CourseId','left outer');
		$this->db->join('tbl_cities ci','ci.Id = a.CityId','left outer');		
		if (!empty($docid)) {
			$this->db->where('r.DocumentId',$docid);
		}
		if (!empty($userid)) {
			$this->db->where('s.Id',$userid);
		}
		if (!empty($id)) {
			$this->db->where('r.Id',$id);
		}
		if (!empty($status)) {
			if (is_array($status)) {
				$this->db->group_start();
				$n = 0;
				foreach ($status as $key) {
					if ($n == 0) {
						$this->db->where('r.Status',$key);
					}
					else {
						$this->db->or_where('r.Status',$key);
					}
					$n = $n + 1;
				}
				$this->db->group_end();
			}
			else {
				$this->db->where('r.Status',$status);
			}
			
		}		
		$get = $this->db->get();
		return $get;	
	}


	public function UpdateStatus($id, $data) {
		$this->db->update('tbl_requests',$data);
		$this->db->where('Id',$id);
		if ($this->db->affected_rows() > 0) {
			return $id;
		}
		else {
			return FALSE;
		}

	}

}