<?php

class Common_model extends CI_Model {
    
    
    function __consturct() {
        parent::__construct();
    }
    #Match Candidate credentials
    public function loginCandidate($credential){
        $this->db->select('id,candid,log_password');
        $this->db->where('email',$credential['email']);
        $this->db->where('log_password',$credential['log_password']);
                $this->db->where('status','active');
        $result= $this->db->get('candidate_tbl');
  
        if ($result->num_rows()== 1) {
            return $result->result();
        } else {
            return 0;
        }
    } 
	
	public function loginstatusup($lsup,$candid)
	{
		$this->db->where('candid',$candid);
		return $this->db->update('candidate_tbl',$lsup);
	}
	
	public function eloginstatusup($lsup,$empid)
	{
		$this->db->where('empid',$empid);
		return $this->db->update('employee_tbl',$lsup);
	}
	
	#Match Employee credentials
    public function loginEmployee($credential){
         $this->db->select('id,empid');
        $this->db->where('status','active');
        $this->db->where('email',$credential['email']);
        $this->db->where('password',$credential['password']);
        $result= $this->db->get('employee_tbl');
       if ($result->num_rows()== 1) {
            return $result->result();
        } else {
            return 0;
        }
    }

    public  function getLocations()
    {
        $query = $this->db->get('location');
        return $query->result_array();
    }

    public function getCandidateDetail($id){
        $this->db->select(' `username`,`email`,`exp`,`mobileNo`,`dob`,`image`,`pincode`,`address`,`HighestQualification`,`UniversityName`,`passingYr`,`course`,`Specialization`,`city`,`acceptTerms`,`final_file`,`type`,`posting_status`,`designation`
			,`preferred_location`
			,`resume_title_designation`
			,`skill`
			,`desired_employment_type`
			,`preferred_industry`
			,`gender`
			,`total_experiance`
			,`id`
			
			
			');
          $this->db->where('id',$id);
                $this->db->where('status','active');
        $query  = $this->db->get('candidate_tbl');
        $result = $query->result();
        return $result;
    }
    public function getEmployeeDetail($id){
        $this->db->select('`username`,`email_show_hide`,`email`,`on_off`,`TotalExperienceYr`,`TotalExperienceMonth`,`companyDetail`,`mobileNo`,`alternate_contact`,`companyName`,`city`,`companyHeading`,`UniversityName`,`website`,`Specialization`,`acceptTerms`,`empid`,`dob`,`image`,`pincode`,`address`');
         $this->db->where('id',$id);
                $this->db->where('status','active');
        $query  = $this->db->get('employee_tbl');
        $result = $query->result();
        return $result;
    }
    
     public function getCandidateValue($id) {
        $user   = $this->db->dbprefix('candidate_tbl');
        $sql    = "SELECT * FROM $user WHERE `id`='$id'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }
    
      public function getEmployeeValue($id) {
        $user   = $this->db->dbprefix('employee_tbl');
        $sql    = "SELECT * FROM $user WHERE `id`='$id'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }
    
     public function resumeUpdate($data, $email){
        $this->db->where('email', $email);
        $query=$this->db->update('candidate_tbl', $data);
         return $query; 
    }
     public function candidateUpdate($data, $id){
        $this->db->where('id',$id);
        $this->db->where('status','active');
        $query=$this->db->update('candidate_tbl', $data);
         return $query; 
    }
    
     public function employeeUpdate($data, $email){
        $this->db->where('email', $email);
        $this->db->where('status','active');
        $query=$this->db->update('employee_tbl', $data);
        return $query; 
    }
    
    
    public function getdata(){
        $query  = $this->db->get('users');
        $result = $query->result();
        return $result;
    }
   
   //**exists employee email check**//
    public function Does_email_exists($email,$tbl_name){
        $user   = $this->db->dbprefix($tbl_name);
        $sql    = "SELECT `email`,`password` FROM $user
        WHERE `email`='$email'";
        $result = $this->db->query($sql);
        if ($result->row()) {
            return $result->row();
        } else {
            return false;
        }
    }
    
	public function Cand_Does_email_exists($email,$tbl_name){
        $user   = $this->db->dbprefix($tbl_name);
        $sql    = "SELECT `email`,`log_password` FROM $user
        WHERE `email`='$email'";
        $result = $this->db->query($sql);
        if ($result->row()) {
            return $result->row();
        } else {
            return false;
        }
    }
    
	
	
    public function deleteJobById($empid,$id){
    $this->db->where('empid',$empid);
    $this->db->where('id',$id);
    $query  = $this->db->delete('jobpost');
    $result = $query->result();
    return $result;
    }
    
     public function getJobListById($empid){
        //  $this->db->group_by('job_category');
         $this->db->where('empid',$empid);
        $query  = $this->db->get('jobpost');
        $result = $query->result();
        return $result;
    }
    public function jobPost($data){
        $this->db->insert("jobpost", $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    public function insertUser($data,$tbl_name){
        $this->db->insert($tbl_name, $data);
    }
    public function jobActive($empid,$id,$data){
        
        $this->db->where('empid', $empid);
        $this->db->where('id', $id);
        $this->db->update('jobpost', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    public function jobAppliedStatus($empid,$id,$data){
        
        $this->db->where('emp_id', $empid);
        $this->db->where('id', $id);
        $this->db->update('job_applied', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    public function UpdateKey($data, $email){
        $this->db->where('email', $email);
        $this->db->update('users', $data);
    }
    public function UpdatePassword($key, $data){
        $this->db->where('forgotten_code', $key);
        $this->db->update('users', $data);
    }
    public function UpdateStatus($verifycode, $data){
        $this->db->where('confirm_code', $verifycode);
        $this->db->update('users', $data);
    }
    //**exists employee email check**//
    public function Does_Key_exists($reset_key){
        $user   = $this->db->dbprefix('users');
        $sql    = "SELECT `forgotten_code` FROM $user
        WHERE `forgotten_code`='$reset_key'";
        $result = $this->db->query($sql);
        if ($result->row()) {
            return $result->row();
        } else {
            return false;
        }
    }
    public function GetUserInfo($key){
        $user   = $this->db->dbprefix('users');
        $sql    = "SELECT `password` FROM $user
        WHERE `forgotten_code`='$key'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }
    public function GetcandidateInfoBycode($verifycode){
        $user   = $this->db->dbprefix('candidate');
        $sql    = "SELECT * FROM $user
        WHERE `varify`='$verifycode'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    } 
    
    public function GetemployeInfoBycode($verifycode){
        $user   = $this->db->dbprefix('employee_tbl');
        $sql    = "SELECT * FROM $user
        WHERE `varify`='$verifycode'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }
    
      public function insertcategory($data) {
        $this->db->insert('category', $data);
    }
    
     public function getCategory() {
        $category = $this->db->dbprefix('category');
        $sql      = "SELECT * FROM $category ";
        $query    = $this->db->query($sql);
        $result   = $query->result();
        return $result;
    }
     public function UpdateTododata($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('to_do_list', $data);
    }

     public function getSettingsValue() {
        $settings = $this->db->dbprefix('settings');
        $sql      = "SELECT * FROM $settings";
        $query    = $this->db->query($sql);
        $result   = $query->row_array();
        return $result;
    }
    
    
    
    
    
    
    
    //Employe model
}
?>
