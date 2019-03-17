<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InternshipModel extends CI_Model {


	function LoadInterns($filter = null)
	{
		$this->db->select('s.*, c.Name as CourseName, sec.Name as SectionName, sem.Name as SemesterName, l.Name as YearLevelName, rec.Id as RecordId, rec.StartDate, rec.EndDate, app.CompanyId, com.CompanyName, app.ContactPerson, (select doc.DocumentName from tbl_requests req left outer join tbl_documents doc on doc.Id = req.DocumentId where req.CreatedById = s.Id order by req.CreatedAt DESC limit 1) as LastDocument, (SELECT COUNT(DISTINCT DocumentId) from tbl_requests where CreatedById = s.Id and Status = 2) as DocCount');
		$this->db->from('tbl_students s');
		$this->db->join('tbl_courses c','c.Id = s.CourseId','left outer');
		$this->db->join('tbl_sections sec','sec.Id = s.SectionId','left outer');
		$this->db->join('tbl_semesters sem','sem.Id = s.SemesterId','left outer');
		$this->db->join('tbl_school_levels l','l.Id = s.YearLevelId','left outer');
		$this->db->join('tbl_ojt_records rec','rec.StudentId = s.Id','left outer');
		$this->db->join('tbl_ojt_applications app','app.StudentId = s.Id','left outer');
		$this->db->join('tbl_companies com','com.Id = app.CompanyId','left outer');
			
		if (!empty($filter)) {
			if (!empty($filter['Course'])) {
				$this->db->where('s.CourseId',$filter['Course']);
			}
			if (!empty($filter['Company'])) {
				$this->db->where('app.CompanyId',$filter['Company']);
			}
			if (!empty($filter['StartDate']) && !empty($filter['EndDate'])) {
				$this->db->where('rec.StartDate >=', $filter['StartDate']);
				$this->db->where('rec.StartDate <=', $filter['EndDate']);
			}
			if (!empty($filter['NoCompany'])) {
				$this->db->where('rec.Id is NULL', NULL, FALSE);
			}
			if (!empty($filter['OnGoing'])) {
				$this->db->where('s.IsActive', '1');
			}
			if (!empty($filter['Inactive'])) {
				$this->db->where('s.IsActive', '0');
			}
		}
		// die('No Filter');
		$get = $this->db->get();
		// die($this->db->last_query());
		return $get;
	}


}