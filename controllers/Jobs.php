<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('pagination');
		$this->load->library('form_validation');

	}

	public function iJobs(){
		if (!empty($_POST['course'])) {
			$course = $this->input->post("course");
			$loc = $this->input->post("loc");

			$config['base_url'] = base_url('webController/Jobs/iJobs');
			$config['total_rows'] = $this->db->from("vacancies")->count_all_results();
			$config['per_page'] = 5;
			$config['uri_segment'] = 4;

			$this->pagination->initialize($config);
			$page = ($this->uri->segment(4)) ? $this->uri->segment(4):'0';
			$multipleWhere = ['course' => $course, 'loc' => $loc];
			$data = $this->db->limit($config['per_page'], $page)->order_by('id','DESC')->where($multipleWhere)->get('vacancies')->result();
			$links = $this->pagination->create_links();	
		}else{
			$config['base_url'] = base_url('webController/Jobs/iJobs');
			$config['total_rows'] = $this->db->from("vacancies")->count_all_results();
			$config['per_page'] = 5;
			$config['uri_segment'] = 4;

			$this->pagination->initialize($config);
			$page = ($this->uri->segment(4)) ? $this->uri->segment(4):'0';
			$data = $this->db->limit($config['per_page'], $page)->order_by('id','DESC')->get('vacancies')->result();
			$links = $this->pagination->create_links();
		}

		$this->load->view("webView/jobsviewfirst",compact('data','links'));
	}

	public function Editing($value=null){
		$sessionEmail = $this->session->userdata('username');

		$id = $this->uri->segment(4);
		if (!empty($id)&&(_select_data_byId("client","clientemail",$sessionEmail)==TRUE)) {
			$data['jobVacancyDetailsId'] = $id;
			$this->load->view('webView/clients/editing',$data);
		}else{
			echo "didn't receive the value";
		}
	}
	public function Edited(){
		if (isset($_POST['jobTitle'])&&($_POST['location'])) {
			$skillrequired = array();
			$skillrequired = $_POST['skillrequired'];
			$skillrequiredImplode = implode(",", $skillrequired);
			$currentime = date('Y-m-d');
			$id = $_POST['id'];
			$Data = array(
				'course' 			=> (isset($_POST['jobTitle'])) ? $_POST['jobTitle'] : '',
				'exp' 				=> (isset($_POST['exp'])) ? $_POST['exp'] : '',
				'loc' 				=> (isset($_POST['location'])) ? $_POST['location'] : '',
				'tags' 				=> (isset($skillrequiredImplode)) ? $skillrequiredImplode : '',
				'type' 				=> (isset($_POST['jobType'])) ? $_POST['jobType'] : '',
				'posted_date' 		=> (isset($currentime)) ? $currentime : '',
				'jobdescription' 	=> (isset($_POST['jobDescrip'])) ? $_POST['jobDescrip'] : '',
				'compName' 			=> (isset($_POST['company_name'])) ? $_POST['company_name'] : '',
				'compDescri' 		=> (isset($_POST['company_description'])) ? $_POST['company_description'] : '',
				'acceptTerms' 		=> (isset($_POST['checkbox'])) ? $_POST['checkbox'] : '',
				'posting_status' 	=> 0
			);
			
			$this->db->where('id', $id);
			$this->db->update('vacancies',$Data);
			$this->session->set_flashdata('updated','Form updated Successfully');
		}
		redirect('webController/Jobs/iJobs','refresh');
	}
	public function Applying($value=null){
		if (!empty($_GET['id'])) {
			$data['jobVacancyDetailsId'] = $_GET['id'];
		}
		$this->load->view("webView/applying",$data);
	}
	public function Applied(){
		if (isset($_POST['postId'])&&($_POST['jobTitle'])) {








			$userId = $this->session->userdata('username');
			$skillrequired = array();
			if (isset($_POST['tags'])) {
				$skillrequired = $_POST['tags'];
				//$skillrequiredImplode = implode(",", $skillrequired);	
			}
			$currentime = date('Y-m-d');
			$Data = array(
				'jobTitle' 			=> (isset($_POST['jobTitle'])) ? $_POST['jobTitle'] : '',
				'jobDescrip' 		=> (isset($_POST['jobDescrip'])) ? $_POST['jobDescrip'] : '',
				'loc' 				=> (isset($_POST['loc'])) ? $_POST['loc'] : '',
				'type' 				=> (isset($_POST['type'])) ? $_POST['type'] : '',
				'company_name' 		=> (isset($_POST['company_name'])) ? $_POST['company_name'] : '',
				'company_description' => (isset($_POST['company_description'])) ? $_POST['company_description'] : '',
				'currentime' 		=> (isset($currentime)) ? $currentime : '',
				'userId' 			=> (isset($userId)) ? $userId : '',
				'tags' 				=> (isset($skillrequired)) ? $skillrequired : '',
				'postId' 			=> (isset($_POST['postId'])) ? $_POST['postId'] : '',
				'submitting_status' => 0
			);
			$this->db->insert('post_applied',$Data);
			$this->session->set_flashdata('applied','Form Submitted Successfully');
		}
		redirect('webController/Jobs/iJobs','refresh');
	}
	public function JobsAlert(){
		if (isset($_POST['username'])&&($_POST['email'])) {
			$Data = array(
				'username' 			=> (isset($_POST['username'])) ? $_POST['username'] : '',
				'email' 			=> (isset($_POST['email'])) ? $_POST['email'] : '',
				'MobileNo' 			=> (isset($_POST['MobileNo'])) ? $_POST['MobileNo'] : '',
				'professional' 		=> (isset($_POST['professional'])) ? $_POST['professional'] : '',
				'profile' 			=> (isset($_POST['profile'])) ? $_POST['profile'] : '',
				'posting_status' 	=> 0
			);

			$this->db->insert('jobalerts_tb',$Data);
			$this->session->set_flashdata('fresher','Form Submitted Successfully');
			redirect('webController/Jobs/iJobs','refresh');
		}
		$this->load->view("webView/jobAlert");	
	}
	public function Identity(){
		$this->load->view("webView/identity");
	}
	public function Types(){
		$this->load->view("webView/types");
	}
	public function Fresher(){
		if (isset($_POST['userName'])&&($_POST['email'])) {
			$implodeSpecialization = implode(',', $_POST['Specialization']);
			$Data = array(
				'user_name' 		=> (isset($_POST['userName'])) ? $_POST['userName'] : '',
				'email' 			=> (isset($_POST['email'])) ? $_POST['email'] : '',
				'password' 		=> (isset($_POST['password'])) ?$_POST['password'] : '',
				
				'mobileNo' 				=> (isset($_POST['mobileNo'])) ? $_POST['mobileNo'] : '',
				'HighestQualification' 	=> (isset($_POST['HighestQualification'])) ? $_POST['HighestQualification'] : '',
				'UniversityName' 		=> (isset($_POST['UniversityName'])) ? $_POST['UniversityName'] : '',
				'passingYr' 			=> (isset($_POST['passingYr'])) ? $_POST['passingYr'] : '',
			
				'Specialization' 		=> (isset($implodeSpecialization)) ? $implodeSpecialization : '',
				'CurrentLoc' 			=> (isset($_POST['CurrentLoc'])) ? $_POST['CurrentLoc'] : '',
				'acceptTerms' 			=> (isset($_POST['acceptTerms'])) ? $_POST['acceptTerms'] : '',
					'type' 			=>  'fresher',
				'final_file' 			=> (isset($_POST['final_file'])) ? $_POST['final_file'] : '',
				'posting_status' 		=> 0
			);

			$this->db->insert('all_user_login',$Data);
			$this->session->set_flashdata('fresher','Form Submitted Successfully');
			redirect('webController/Jobs/iJobs','refresh');
		}
		$this->load->view("webView/fresher");
	}
	public function Experience(){
	   
		if (isset($_POST['userName'])&&($_POST['email'])) {
			$implodeSpecialization = implode(',', $_POST['Specialization']);
			$workingtilltheyr = "";
			if (!empty($_POST['selectyr'])) {
				$workingtilltheyr = $_POST['selectyr'];
			}else{
				$workingtilltheyr = 0;
			}
			if ($workingtilltheyr==0) {
				$currentyr = date("Y");
				$workingtilltheyr = $currentyr;
			}
//			print_r($workingtilltheyr);



			$Data = array(
				'user_name' 			=> (isset($_POST['userName'])) ? $_POST['userName'] : '',
				'email' 				=> (isset($_POST['email'])) ? $_POST['email'] : '',
				'password' 			=> (isset($_POST['password'])) ? $_POST['password'] : '',
				'TotalExperienceMonth' 	=> (isset($_POST['TotalExperienceMonth'])) ? $_POST['TotalExperienceMonth'] : '',
				'CurrentDesignation' 	=> (isset($_POST['CurrentDesignation'])) ? $_POST['CurrentDesignation'] : '',
				'CurrentCompany' 		=> (isset($_POST['CurrentCompany'])) ? $_POST['CurrentCompany'] : '',
				'AnnualSalary' 			=> (isset($_POST['AnnualSalary'])) ? $_POST['AnnualSalary'] : '',
				'yrofexperience' 		=> (isset($_POST['yrofexperience'])) ? $_POST['yrofexperience'] : '',
				'WorkingSince' 			=> (isset($_POST['WorkingSince'])) ? $_POST['WorkingSince'] : '',
				'workingtilltheyr' 		=> (isset($workingtilltheyr)) ? $workingtilltheyr : '',
				'CurrentLoc' 			=> (isset($_POST['CurrentLoc'])) ? $_POST['CurrentLoc'] : '',
				'type' 			=>  'experience',
				'Durationofnoticeperiod' => (isset($_POST['Durationofnoticeperiod'])) ? $_POST['Durationofnoticeperiod'] : '',
				'HighestQualification' 	=> (isset($_POST['HighestQualification'])) ? $_POST['HighestQualification'] : '',
				'UniversityName' 		=> (isset($_POST['UniversityName'])) ? $_POST['UniversityName'] : '',
				'passingYr' 			=> (isset($_POST['passingYr'])) ? $_POST['passingYr'] : '',
				'Specialization' 		=> (isset($implodeSpecialization)) ? $implodeSpecialization : '',
				'acceptTerms' 			=> (isset($_POST['acceptTerms'])) ? $_POST['acceptTerms'] : '',
				'final_file' 			=> (isset($_POST['final_file'])) ? $_POST['final_file'] : '',
				'posting_status' 		=> 0
			);
			
			// echo "<pre>";print_r($Data);die('exp');
			$this->db->insert('all_user_login',$Data);
			$this->session->set_flashdata('fresher','Form Submitted Successfully');
		}
		$this->load->view("webView/experience");	
	}
	

}

/* End of file Jobs.php */
/* Location: ./application/controllers/webController/Jobs.php */