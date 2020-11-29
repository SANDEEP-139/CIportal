<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('welcome');
		$this->load->library('form_validation');
	}

	public function ClientInfo(){
		if (isset($_POST['fullname'])&&($_POST['email'])) {

			$Data = array(
				'clientName' 			=> (isset($_POST['fullname'])) ? $_POST['fullname'] : '',
				'clientemail' 			=> (isset($_POST['email'])) ? $_POST['email'] : '',
				'Mobile_No' 			=> (isset($_POST['Mobile_No'])) ? $_POST['Mobile_No'] : '',
				'password' 				=> (isset($_POST['password'])) ? $_POST['password'] : '',
				'confirm' 				=> (isset($_POST['confirm'])) ? $_POST['confirm'] : '',
				'Designation' 			=> (isset($_POST['Designation'])) ? $_POST['Designation'] : '',
				'WorkExperience' 		=> (isset($_POST['WorkExperience'])) ? $_POST['WorkExperience'] : '',
				'acceptTerms' 			=> (isset($_POST['acceptTerms'])) ? $_POST['acceptTerms'] : '',
				'posting_status' 		=> 0
			);
			$this->db->select()->from('client')->where($Data);
			$query = $this->db->get();
			if($query->num_rows() > 0){
				$this->session->set_flashdata('sameemailid','Sorry... This email Id alredy exist.');
				redirect(base_url().'webController/Jobs/iJobs');
			}else{
				$this->db->insert('client',$Data);
                $this->session->set_flashdata('fresher','Form Submitted Successfully');
                redirect(base_url().'webController/Jobs/iJobs');
            }
			


		}

		$this->load->view("webView/clients/client");		
	}
	public function JobPost(){
		if (isset($_POST['jobTitle'])&&($_POST['location'])) {
			$skillrequired = array();
			$skillrequired = $_POST['skillrequired'];
			$skillrequiredImplode = implode(",", $skillrequired);
			$clientemail = $this->session->userdata('username');
			$currentime = date('Y-m-d');
			$Data = array(
				'course' 			=> (isset($_POST['category'])) ? $_POST['category'] : '',
				'exp' 				=> (isset($_POST['exp'])) ? $_POST['exp'] : '',
				'loc' 				=> (isset($_POST['location'])) ? $_POST['location'] : '',
				'tags' 				=> (isset($skillrequiredImplode)) ? $skillrequiredImplode : '',
				'type' 				=> (isset($_POST['jobType'])) ? $_POST['jobType'] : '',
				'posted_date' 		=> (isset($currentime)) ? $currentime : '',
				'client_email' 		=> (isset($clientemail)) ? $clientemail : '',
				'jobdescription' 	=> (isset($_POST['jobDescrip'])) ? $_POST['jobDescrip'] : '',
				'compName' 			=> (isset($_POST['company_name'])) ? $_POST['company_name'] : '',
				'compDescri' 		=> (isset($_POST['company_description'])) ? $_POST['company_description'] : '',
				'acceptTerms' 	=> (isset($_POST['checkbox'])) ? $_POST['checkbox'] : '',
				'posting_status' 	=> 0
			);
			$this->db->insert('vacancies',$Data);
			$this->session->set_flashdata('fresher','Form Submitted Successfully');
			redirect('webController/Jobs/iJobs','refresh');

		}
		$this->load->view("webView/clients/jobpost");		
	}
	public function JobsPostedDetails(){
		$this->load->view("webView/clients/jobposteddetails");
	}

}

/* End of file Client.php */
/* Location: ./application/controllers/clientController/Client.php */