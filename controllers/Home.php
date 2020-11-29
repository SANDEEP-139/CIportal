<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Kolkata");
class Home extends CI_Controller {
    
    function __construct() {
        parent::__construct();
       
       $this->load->model('crud_model');
       $this->load->model('common_model');
    }
    public function index() {
       
        $data['getRandomCandidate']=$this->crud_model->getRandomCandidate();
        $data['searchJob']=$this->crud_model->recentJob();
        $this->load->view('front/index',$data);  
	
    }  
    
     public function emailexist() {
          $email=$this->input->post('email');
         
         $this->db->where('email',$email);
        $qry= $this->db->get('candidate_tbl');
         // echo $this->db->last_query();
         $res=$qry->num_rows();
        if($res==0){
            echo "not_exist";
        }
     else{
         echo "exist";
     }
	}

	public function dashboard() {
       $this->load->view('front/dashboard');
     }
	 
	 
      public function employee_dashboard() {
		$id = $this->session->userdata('id');
		$query = $this->db->query("select * from employee_tbl where id='".$id."' and status='active' ");
		$data['empdata'] = $query->result();
        $this->load->view('front/employee_dashboard',$data);
     }

     public function regispopup() {
		 
        $resumetitle=$this->input->post('resume_title');
        $full_name=$this->input->post('full_name');
        $email=$this->input->post('email');
        $mobile=$this->input->post('mobile');
        $password= $this->input->post('password');
        $location=$this->input->post('location');
        $select_exp=$this->input->post('select_exp');
        $userid    = 'C' . rand(99999, 1000000);
      
      
		$query = $this->db->query("select * from candidate_tbl where email='".trim($email)."'  and status='active' ");
		if($query->num_rows() > 0)
		{
			echo "<script>alert('Email Already Exist');</script>";
			redirect('Home/jobs','refresh');
		}else{
		    
		      $data=[
                'designation'=>$resumetitle,
                'username'=>$full_name,
                'email'=>$email,
                'mobileNo'=>$mobile,
                'log_password'=>md5($password),
                'password_backup'=>md5($password),
                'reg_from' =>'popup model',
                'address'=>$location,
                'status' => 'active',
                'type' => 'candidate',
                'candid' => $userid,
            ];
        
        
			$res = $this->db->insert('candidate_tbl',$data);
			$inserted = $this->db->insert_id();
			$session_data= array(
				'email' =>$email,
				'candid'=>$userid,
				'id'=>$inserted,
				'type'=>'candidate'
			);
			$this->session->set_userdata($session_data);
			$lsup = array('login_status'=>'1');
        		//foreach($result as $row){$candid = $userid;}
        	$this->common_model->loginstatusup($lsup,$userid);
        	$this->db->query("UPDATE candidate_tbl SET login_remain='1' WHERE email ='".$_POST['email']."' ");
			
			$this->session->set_userdata($session_data);
			$this->session->set_flashdata('action_message','<div class="alert alert-success">Congrats... You have Successfuly login. </div>');
			echo "<script>alert('Congrats... You have Successfuly login');</script>";
		
			$this->registerMail($email,$password,"Job Seeker");
			redirect('home/candidateProfile','refresh');
		}
     }
    
    public function checkloginC() {
        if($this->session->has_userdata("email")=='' && $this->session->has_userdata("type")!='candidate') {
            $this->session->set_flashdata('action_message', '<div class="alert alert-danger">Please Login First</div>');
            redirect("home/loginView");
        } 
    }
	
    public function checkloginE(){
        if($this->session->has_userdata("email")=='' && $this->session->has_userdata("type")!='employee'){
            $this->session->set_flashdata('action_message', '<div class="alert alert-danger">Please Login First</div>');
            redirect("home/loginView");
        }
    } 
	 
    public function checklogin() {
        if ($this->session->has_userdata("email")=='' && $this->session->has_userdata("type")!='candidate') {
            $this->session->set_flashdata('action_message', '<div class="alert alert-danger">Please Login First</div>');
            redirect("home/loginView");
        } 
         if($this->session->has_userdata("email")=='' && $this->session->has_userdata("type")!='employee'){
             $this->session->set_flashdata('action_message', '<div class="alert alert-danger">Please Login First</div>');
               redirect("home/loginView");
          }
     }
    
    public function jobPostView(){
       if($this->session->userdata('type')=='employee'){
            $this->load->view('front/job_post');
        }else{
			$this->session->set_flashdata('action_message', '<script>alert("Please Login first")</script>');
            redirect("home/loginView");
        }
		//$data['candidateDetail']=$this->common_model->getCandidateDetail($id);
    }
    
    
     public function interviewTips() {
         
       $this->load->view('front/interview_tips');
     }
    
     public function courses() {
         
       $this->load->view('front/courses');
     }
    
     public function choose_reg() {
         
       $this->load->view('front/choose_reg');
     }
         
     public function candidateProfile() {
        $this->checklogin();
        $id=$this->session->userdata('id');
        $data['candidateDetail']=$this->common_model->getCandidateDetail($id);
       $this->load->view('front/candidate_profile',$data);
    }
  
    public function registerView() {  
        $data['lcations']  = $this->common_model->getLocations();
       $this->load->view('front/register', $data);
    }  
    public function candidateEdit() {
		$this->checklogin();
        $id=$this->uri->segment(3);
        $data['candidateDetail']=$this->common_model->getCandidateDetail($id);
//          print_r($data); die;
       $this->load->view('front/candidate_edit',$data);
    }  
    public function employeeEdit() {
        $this->checklogin();
        $id=$this->uri->segment(3);
        $data['employeeDetail']=$this->common_model->getEmployeeDetail($id);
        
       $this->load->view('front/employee_edit',$data);
    }
    
      /*Validating user signup form request*/
    public function candidate_register() {
         $table_name="candidate_tbl";
//      print_r($this->input->post()); die;
        $userid    = 'C' . rand(99999, 1000000);
        /* Generate Random user id*/
        $name      = $this->input->post('name');
        $email     = $this->input->post('email');
        $password  = $this->input->post('password');
        $confirm   = $this->input->post('cpassword');
        $city  = $this->input->post('city');
        $gender = $this->input->post('gender');
        $designation  = $this->input->post('designation');
        $HighestQualification  = $this->input->post('HighestQualification');
        if($this->input->post('exp')==''){
          $exp=0; 
        }else{
        $exp  = $this->input->post('exp');
        }
        $exp_type  = $this->input->post('exp_type');
        $skills  = $this->input->post('skill');
        $phone   = $this->input->post('phone');
        $agree   = $this->input->post('agree');
        $ipaddress = $this->input->ip_address();
        $date      = date("m/d/Y");
        $randcode  = rand();
       if(empty($exp_type)){
        $exp_type =0;
       } if(empty($skills)){
        $skills =0;
       }
        if ($password == $confirm) {
            
            /*validating name field*/
            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
            $this->form_validation->set_rules('designation', 'Designation', 'trim|required');
            $this->form_validation->set_rules('HighestQualification', 'Highest Qualification', 'trim|required');
            $this->form_validation->set_rules('skill', 'Key skill', 'trim|required');
          //  $this->form_validation->set_rules('agree', 'agree', 'trim|required|xss_clean');
            /*Validating email field*/
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
            /*validating pasword field*/
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('city', 'City', 'trim|required');
            $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
            $this->form_validation->set_rules('agree', '', 'required');
            if ($this->form_validation->run() == FALSE) {
				validation_errors();
                $this->load->view('front/register');
            }else{
                if ($this->common_model->Cand_Does_email_exists($email,$table_name)) {
					$this->session->set_flashdata('action_message', '<div class="alert alert-warning">Email already exits</div>');
					validation_errors();
					$this->load->view('front/register');
                   //redirect('home/registerView');
                }else{
                    $data     = array();
                    $data     = array(
                        'candid' => $userid,
                        'username' => $name,
                        'email' => $email,
                        'log_password' => md5($password),
                         'password_backup'=>md5($password),
                        'ip_address' => $ipaddress,
                        'type' => 'candidate',
                        'city' => $city,
                        'gender' => $gender,
                        'exp_type' => $exp_type,
                        'exp' => $exp,
                        'skills' => $skills,
                        'designation' => $designation,
                        'HighestQualification' => $HighestQualification,
                        'mobileNo' => $phone,
                        'acceptTerms' => $agree,
						'created_at' => date('Y/m/d,h-m-s'),
						'reg_from' =>'registration form view',
                        'verify' => $randcode,
                        'status' => 'active'
                    );
                    
                    $success  = $this->common_model->insertUser($data,$table_name);
                    $inserted = $this->db->insert_id();
						$session_data= array(
						'email' =>$email,
						'id'=>$inserted,
						'candid'=>$userid,
						'type'=>'candidate'	);
                        $this->session->set_userdata($session_data);
                    
                    	$lsup = array('login_status'=>'1');
        				//foreach($result as $row){$candid = $userid;}
        				$this->common_model->loginstatusup($lsup,$userid);
        				$this->db->query("UPDATE candidate_tbl SET login_remain='1' WHERE email ='".$_POST['email']."' ");
                    
                    
                    
                    if ($inserted) {
                       $this->registerMail($email,$password,"Job Seeker");
                       // $this->session->set_flashdata('action_message', '<div class="alert alert-success">Your Acccount is Successfully Created !! Please Login Your Account Now!!</div>');
						redirect('home/candidateProfile');
                        echo "<script>alert('Account is Created');window.location.href='home/candidateProfile';</script>";
                       //  redirect('home/registerView');
                    } else {
                        $this->session->set_flashdata('action_message', '<div class="alert alert-warning">Something went wrong. Please try again</div>');
                      echo "<script>alert('Something went wrong. Please try again');window.location.href='registerView';</script>";
                        // redirect('home/registerView');
                    }
                }
            }
        } else {
			$this->session->set_flashdata('action_message', '<div class="alert alert-warning">Passwords did not match!!</div>');
				validation_errors();
                $this->load->view('front/register');
        }
    }
    
    //candiadte edit//
    
    public function candidateUpdate(){
        if ($this->session->userdata('email') != False) {
		//	print_r($this->input->post()); die;
            
				$id  = $this->session->userdata('id');
				$username = $this->input->post('name');
				$email    = $this->input->post('email');
				$phone  = $this->input->post('phone');
				$dob      = $this->input->post('dob');
				$address      = $this->input->post('address');
				$city  = $this->input->post('city');
				$HighestQualification    = $this->input->post('HighestQualification');
				$UniversityName     = $this->input->post('UniversityName');
				$passingYr     = $this->input->post('passingYr');
				$course    = $this->input->post('course');
				$Specialization     = $this->input->post('Specialization');
            

				if(!empty($_FILES['upload_resume']['name']))
				{
					$uniq_name1 = time()+1;
					$config['upload_path'] = 'assets/resume/';
					$config['allowed_types'] = 'pdf';
					$config['max_size'] = 2448;
					$config['file_name'] = $uniq_name1.strtolower(trim($_FILES['upload_resume']['name']));
									
					//Load upload library and initialize configuration
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
									
					if(!$this->upload->do_upload('upload_resume'))
					{
					   $this->session->set_flashdata('action_message', '<div class="alert alert-danger">Resume only upload pdf extenstion</div>');
                       echo "<script>alert('Something went wrong  first. Please try again');window.location.href='candidateProfile';</script>";
                       redirect('home/candidateEdit/'.$id);
						
					}else{
						$uploadData = $this->upload->data();
						$upload_resume = $uploadData['file_name'];
					}
				}else{
					$upload_resume =$_POST['resumeprev'];
				}
				
				
				if(!empty($_FILES['user_image']['name']))
				{
					$uniq_name1 = time()+1;
					$config['upload_path'] = 'assets/upload/';
					$config['allowed_types'] = 'jpg|png|png|jpeg';
					//$config['max_size'] = 1000;
					//$config['max_width'] = 150;
					//$config['max_height'] = 150;
					$config['file_name'] = $uniq_name1.strtolower(trim($_FILES['user_image']['name']));
									
					//Load upload library and initialize configuration
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
									
					if($this->upload->do_upload('user_image'))
					{
						$uploadData = $this->upload->data();
						$user_image = $uploadData['file_name'];
					}else{}
				}else{
					$user_image =$_POST['user_imageprev'];
				}
				
                $data  = array();
                $data = array(
                   'username' => $username,
                   'email' => $email,
                   'mobileNo' => $phone,
                   'dob' => $dob,
                    'image' => $user_image,
                    'mobileNo' => $phone,
//                  'pincode' => $pincode,
                    'address' => $address,
                    'HighestQualification' => $HighestQualification,
                    'UniversityName' => $UniversityName,
                    'passingYr' => $passingYr,
                    'course' => $course,
                    'Specialization' => $Specialization,
                    'gender' => $this->input->post('gender'),
                    'preferred_location' => $this->input->post('preferred_location'),
					'resume_title_designation' => $this->input->post('resume_title'),
					'skill' => $this->input->post('skill'),
					'desired_employment_type' => $this->input->post('desiremptype'),
					'preferred_industry' => $this->input->post('preferred_industry'),
					'total_experiance' => $this->input->post('totalexp'),
					'city' => $city,
					'final_file' => $upload_resume
                );
                $success  = $this->common_model->candidateUpdate($data,$id);
                if ($success==true) {
                       $this->session->set_flashdata('action_message', '<div class="alert alert-success">Profile Updated</div>');
                       echo "<script>alert('Profile Updated');window.location.href='candidateEdit'.$id;</script>";
                       redirect('home/candidateEdit/'.$id);
                 }else {
                       $this->session->set_flashdata('action_message', '<div class="alert alert-warning">Something went wrong  first. Please try again</div>');
                       echo "<script>alert('Something went wrong  first. Please try again');window.location.href='candidateProfile';</script>";
                       redirect('home/candidateEdit'.$id);
                }
		}
		echo $id;
    }
    
    
   public function confirm_mail_send($email, $randcode) {
           $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'perfectdigitaldeveloper@gmail.com',
            'smtp_pass' => 'Amit#Singh'
        );
        $from_email = "";
        $to_email   = $email;
        
        //Load email library 
        $this->load->library('email', $config);
        
        $this->email->from($from_email, 'Urauthor');
        $this->email->to($to_email);
        $this->email->subject('Confirm Your Account');
        $message = "Confirm Your Account";
        $message .= "Click Here : " . base_url('users/') . "verification_confirm?C=" . $randcode . '</br>';
        $this->email->message($message);
        
        //Send mail 
        if ($this->email->send()) {
            $this->session->set_flashdata('action_message', 'Kindly check your email To Active Your Account');
        } else {
            $this->session->set_flashdata("action_message", "Error in sending Email.");
        }
    }
    public function verification_confirm() {
        $verifycode = $this->input->get('C');
        $userinfo   = $this->crud_model->GetuserInfoBycode($verifycode);
        if ($userinfo) {
            $data = array();
            $data = array(
                'status' => 'ACTIVE',
                'confirm_code' => 0
            );
			
            $this->crud_model->UpdateStatus($verifycode, $data);
            if ($this->db->affected_rows()) {
                $this->session->set_flashdata('action_message', ' <div class="alert alert-success">Your Account has been confirmed!! now signin</div>');
                $this->load->view('signin');
            }
        } else {
            $this->session->set_flashdata('action_message', ' <div class="alert alert-warning">Sorry your account has not been varified</div>');
            $this->load->view('signin');
        }
    }
  
	public function loginView() {
		$this->load->view('front/login');
	}
    
  	function loginMember(){
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('type','Select type','required');
    
        if($this->form_validation->run()==TRUE) {
            //true
           // $type = $this->input->post('type');  
            if($this->input->post('type')=='candidate'){
				$data=array(
					'email'=>$this->input->post('email'),
					'log_password'=>md5($this->input->post('password'))
				);
            $result = $this->common_model->loginCandidate($data); 
			if($result!=0){
                 $session_data= array(
                    'email' =>$this->input->post('email'),
                     'id'=>$result[0]->id,
                     'candid'=>$result[0]->candid,
                     'type'=>'candidate'
                );
				
				$lsup = array('login_status'=>'1');
				foreach($result as $row){$candid = $row->candid;}
				
				$this->common_model->loginstatusup($lsup,$candid);
				$this->db->query("UPDATE candidate_tbl SET login_remain='1' WHERE email ='".$_POST['email']."' ");
          }else{
              $session_data= array();
          }
            }else
             if($this->input->post('type')=='employee'){
				 
				$data=array(
					'email'=>$this->input->post('email'),
					//'password'=>$this->input->post('password')
					'password'=>md5($this->input->post('password'))
				);
                $result = $this->common_model->loginEmployee($data); 
                 
               if($result!=0){
                 $session_data= array(
                    'email' =>$this->input->post('email'),
                     'id'=>$result[0]->id,
                     'empid'=>$result[0]->empid,
                     'type'=>'employee'
                    );
					
				$lsup = array('login_status'=>'1');	
				foreach($result as $row){$empid = $row->empid;}
				$this->common_model->eloginstatusup($lsup,$empid);
               }else{
              $session_data= array();
          }
            }else{
                $this->session->set_flashdata('action_message','<div class="alert alert-danger">Please Select Type</div>');
                 echo "<script>alert('Please Select Type');window.location.href='loginView';</script>";
              // redirect('home/loginView','refresh');
             } 
       
            if ($result>0) {  
                
				if($this->input->post('type')=='employee')
				{
					$this->session->set_userdata($session_data);
					$this->session->set_flashdata('action_message','<div class="alert alert-success">Congrats... You have Successfuly login. </div>');
					echo "<script>alert('Congrats... You have Successfuly login');</script>";
					
					 redirect('home/employee_dashboard','refresh');
					
				}else{
					$this->session->set_userdata($session_data);
					$this->session->set_flashdata('action_message','<div class="alert alert-success">Congrats... You have Successfuly login. </div>');
					echo "<script>alert('Congrats... You have Successfuly login');</script>";
					
					redirect('home/candidateProfile','refresh');
				}
			
                
            }else {
              
			    if($this->input->post('type')=='candidate'){
					$qq = $this->db->query("select * from candidate_tbl where email='".$_POST['email']."' ");
					foreach($qq->result() as $r):endforeach;
					
					if(@$r->log_password=='')
					{
						@$c =  1 - 1;
						$this->db->query("UPDATE candidate_tbl SET login_remain='".@$c."' WHERE candid ='".@$r->candid."' ");
						redirect('home/forgetPasswordView','refresh');
					}
					
					if(@$r->login_remain=='')
					{
						$this->db->query("UPDATE candidate_tbl SET login_remain='1' WHERE candid ='".@$r->candid."' ");
					}
					if(@$r->login_remain!='')
					{
						if($r->login_remain!='0')
						{
							@$c = @$r->login_remain - 1;
							$this->db->query("UPDATE candidate_tbl SET login_remain='".@$c."' WHERE candid ='".@$r->candid."' ");
						}else{
							redirect('home/forgetPasswordView','refresh');
						}
					}
				}
					
                $this->session->set_flashdata('action_message','<div class="alert alert-danger">Please Check Your Email/Password</div>');
                echo "<script>alert('Please Check Your Email/Password');window.location.href='loginView';</script>";
              // redirect('home/loginView','refresh');
            }

        }else{
            $this->session->set_flashdata('action_message','<div class="alert alert-danger">'.validation_errors().'</div>');
            redirect('home/loginView','refresh');
        }
    }

    function logout(){
    //removing session
	
		$lsup = array('login_status'=>'0');	
		$candid = $this->session->userdata('candid');
		$this->common_model->loginstatusup($lsup,$candid);
		
		$lsup = array('login_status'=>'0');	
		$empid = $this->session->userdata('empid');
		$this->common_model->eloginstatusup($lsup,$empid);
		
        $this->session->unset_userdata('username','email','password','mobileNo','type','candid');
        $this->session->unset_userdata('username','email','password','mobileNo','type','empid');
        $this->session->sess_destroy();
		
		
        redirect('home','refresh');
    }  
    
    
    
   
    //*********************************************************
    //*********************************************************
    //*******************job section***************************
    //*********************************************************
    //*********************************************************
    

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
             echo "<script>alert('Form Submitted Successfully');window.location.href='webController/Jobs/iJobs';</script>";
		}
		// redirect('webController/Jobs/iJobs','refresh');
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
			// $this->session->set_flashdata('fresher','Form Submitted Successfully');
            echo "<script>alert('Form Submitted Successfully');window.location.href='webController/Jobs/iJobs';</script>";
			// redirect('webController/Jobs/iJobs','refresh');
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
            echo "<script>alert('Form Submitted Successfully');window.location.href='webController/Jobs/iJobs';</script>";
			// redirect('webController/Jobs/iJobs','refresh');
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
             echo "<script>alert('Form Submitted Successfully');</script>";
		}
		$this->load->view("webView/experience");	
	}
	
/********************Employe********************/
/********************Employe********************/
/********************Employe********************/


 public function employeeProfile() {
        $this->checklogin();
      $id=$this->session->userdata('id');
        $data['employeeDetail']=$this->common_model->getEmployeeDetail($id);
       $this->load->view('front/employee_profile',$data);
    }

     /*Validating employe_register_register form request*/  
    public function employe_register() {
         $table_name="employee_tbl";
//        print_r($this->input->post()); die;
        $id    = $this->session->userdata('id');
        $userid    = 'E' . rand(99999, 1000000);
        /* Generate Random user id*/
        $name      = $this->input->post('ename');
        $email     = $this->input->post('eemail');
        $password  = $this->input->post('epassword');
        $confirm   = $this->input->post('ecpassword');
        $company   = $this->input->post('ecompany');
        $email_show_hide   = $this->input->post('email_show_hide');
        $phone     = (isset($_POST['ephone'])? $_POST['ephone'] : 'No call');
        $city   = $this->input->post('ecity');
        $alternate_contact   = $this->input->post('alternate_phone');
        $website   = $this->input->post('website');
        $agree   = $this->input->post('agree');
        $ipaddress = $this->input->ip_address();
        $date      = date("m/d/Y");
        $randcode  = rand();
       
        if ($password == $confirm) {
            /*validating name field*/
            $this->form_validation->set_rules('ename', 'Name', 'trim|required|xss_clean');
            /*Validating email field*/
            $this->form_validation->set_rules('eemail', 'Email', 'trim|required|valid_email|xss_clean');
            $this->form_validation->set_rules('ecpassword', 'Confirm Password', 'trim|required|xss_clean');
            /*validating pasword field*/
            $this->form_validation->set_rules('epassword', 'Password', 'trim|required|xss_clean');
            $this->form_validation->set_rules('ecompany', 'Company', 'trim|required|xss_clean');
            $this->form_validation->set_rules('ecity', 'City', 'trim|required|xss_clean');
            $this->form_validation->set_rules('ephone', 'Phone', 'trim|required|xss_clean');
            $this->form_validation->set_rules('agree', '', 'required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
				
				
                //$data['message'] = validation_errors();
				validation_errors();
                $this->load->view('front/register');
            } else {
                if ($this->common_model->Does_email_exists($email,$table_name)) {
                    $this->session->set_flashdata('action_message', '<div class="alert alert-warning">Email already exits</div>');
					
					validation_errors();
					$this->load->view('front/register');
                   /// redirect('home/registerView');
                } else {
                    
                    $data     = array();
                    $data     = array(
                        'empid' => $userid,
                        'username' => $name,
                        'email' => $email,
                        'password' => md5($password),
                        'ip_address' => $ipaddress,
                        'email_show_hide' => $email_show_hide,
                        'type' => 'employee',
                        'city' => $city,
                        'companyName' => $company,
                        'website' => $website,
                        'mobileNo' => $phone,
                        'alternate_contact' => $alternate_contact,
                        'acceptTerms' => $agree,
                        'created_at' => date('Y/m/d,h-m-s'),
                        'verify' => $randcode,
                        'on_off'=> $_POST['hrcall'],
                        'status' => 'active'
                    );
                    $success  = $this->common_model->insertUser($data,$table_name);
                    $inserted = $this->db->insert_id();
                    if ($inserted) {
                         $session_data= array(
						 'email' =>$email,
						 'id'=>$inserted,
						 'empid'=>$userid,
						 'type'=>'employee'
                    );
                    $this->session->set_userdata($session_data);
                    $this->registerMail($email,$password,"Recruiter");
                        redirect('home/employee_dashboard');
                       // $this->session->set_flashdata('action_message', '<div class="alert alert-success">Your Acccount is Successfully Created !! Please Login Your Account Now!!</div>');
                       // echo "<script>alert('Account is Created');window.location.href='registerView';</script>";
                         // redirect('home/registerView');
                    } else {
                        $this->session->set_flashdata('action_message', '<div class="alert alert-warning">Something went wrong. Please try again</div>');
                        echo "<script>alert('Something went wrong. Please try again');window.location.href='registerView';</script>";
                        // redirect('home/registerView');
                    }
                }
            }
        } else {
			$this->session->set_flashdata('action_message', '<div class="alert alert-warning">Passwords did not match!!</div>');
            validation_errors();
			$this->load->view('front/register');
			
			
			//redirect('home/registerView');
        }
    }
    
   //emplyee upadte//
        
    public function employeeUpdate(){
        if ($this->session->userdata('email') != False) {
//          print_r($this->input->post()); die;
            $id    = $this->session->userdata('id');
            $username = $this->input->post('name');
            $email    = $this->input->post('email');
            $city    = $this->input->post('city');
            
            $phone  = $this->input->post('phone');
			 $alternate_contact   = $this->input->post('alternate_phone');
            $dob      = $this->input->post('dob');
//          $pincode      = $this->input->post('pincode');
            $address      = $this->input->post('address');
            $companyHeading      = $this->input->post('companyHeading');
            $website      = $this->input->post('website');
            $TotalExperienceYr    = $this->input->post('TotalExperienceYr');
            $UniversityName     = $this->input->post('UniversityName');
            $companyDetail     = $this->input->post('companyDetail');
            $companyName    = $this->input->post('companyName');
            $Specialization     = $this->input->post('Specialization');
            $email_show_hide     = $this->input->post('email_show_hide');
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters();
            // Validating Name Field
            $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[2]|max_length[60]|xss_clean');
            /*validating email field*/
            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[7]|max_length[100]|xss_clean');
            /*Validating address field*/
            $this->form_validation->set_rules('phone', 'phone', 'trim|required|min_length[10]|max_length[12]|xss_clean');
            /*validating contact field*/
            $this->form_validation->set_rules('dob', 'Date Of birth', 'trim|xss_clean');
            /*validating Date Of Birth field*/
            $this->form_validation->set_rules('city', 'city', 'trim|xss_clean');
            //$this->form_validation->set_rules('pincode', 'Pincode', 'trim|xss_clean|min_length[6]|max_length[7]');
            /*validating country field*/
            $this->form_validation->set_rules('address', 'Adress', 'trim|xss_clean');
            /*validating role field*/
            $this->form_validation->set_rules('companyHeading', 'companyHeading', 'trim|xss_clean');
            $this->form_validation->set_rules('website', 'website', 'trim|xss_clean');
            /*validating gender field*/
            $this->form_validation->set_rules('UniversityName', 'UniversityName', 'trim|xss_clean');
            $this->form_validation->set_rules('TotalExperienceYr', 'TotalExperienceYr', 'trim|xss_clean');
           // $this->form_validation->set_rules('companyName', 'companyName', 'trim|xss_clean');
            $this->form_validation->set_rules('Specialization', 'Specialization', 'trim|xss_clean');
            
            if ($this->form_validation->run() == FALSE) {
                $response['status']  = 'error';
                $response['message'] = validation_errors();
                $this->load->view('front/employee_profile');
            } else {
                if ($_FILES['user_image']['name']) {
                    $profile       = $this->common_model->getEmployeeValue($id);
                    $file_name     = $_FILES['user_image']['name'];
                    $fileSize      = $_FILES["user_image"]["size"] / 4024;
                    $fileType      = $_FILES["user_image"]["type"];
                    $new_file_name = '';
                    $new_file_name .= $id;
                    $checkimage = "./assets/upload/$profile->image";
                    
                    $config = array(
                        // 'file_name' => $new_file_name,
                        'upload_path' => "./assets/upload/",
                        'allowed_types' => "gif|jpg|png|jpeg|PNG",
                        'overwrite' => False,
                        'max_size' => "40240000",
                        // Can be set to particular file size , here it is 2 MB(2048 Kb)
                        'max_height' => "4000",
                        'max_width' => "4000"
                    );
                    
                    $this->load->library('Upload', $config);
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('user_image')) {
                        
                        $response['status']  = 'error';
                        $response['message'] = $this->upload->display_errors();
                        redirect('home/employeeProfile');
                    } else {
//                        if (file_exists($checkimage)) {
//                            unlink($checkimage);
//                        }
                        $path                = $this->upload->data();
                        $img_url             = $path['file_name'];
						
						
						if($this->input->post('onoff')=='1')
						{
							$onof = $this->input->post('onoff');
						}else{
							$onof = '0';
						}
                        $data                = array();
                        $data                = array(
                            'username' => $username,
                            'email' => $email,
                            'mobileNo' => $phone,
							'alternate_contact' => $alternate_contact,
                            'dob' => $dob,
                            'city'=>$city,
                            'on_off'=>$onof, 
                            'image' => $_FILES['user_image']['name'],
//                           'pincode' => $pincode,
                            'address' => $address,
                            'website' => $website,
                            'companyHeading' => $companyHeading,
                            'TotalExperienceYr' => $TotalExperienceYr,
                            'companyDetail' => $companyDetail,
                            'companyName' =>$username,
                            'Specialization' => $Specialization,
                            'email_show_hide' => $email_show_hide
                            
                        );
                        $success   = $this->common_model->employeeUpdate($data,$email);
                         if ($success==true) {
                        $this->session->set_flashdata('action_message', '<div class="alert alert-success">Profile Updated</div>');
                        echo "<script>alert('Profile Updated');</script>";
                         redirect('home/employeeProfile');
                    } else {
                        $this->session->set_flashdata('action_message', '<div class="alert alert-warning">Something went wrong  first. Please try again</div>');
                        echo "<script>alert('Something went wrong  first. Please try again');</script>";
                     redirect('home/employeeProfile');
                    }
//                        $this->output->set_output(json_encode($response));
                        #$this->session->set_flashdata('feedback','Successfully Updated');    
                    }
                } else {
					
					if($this->input->post('onoff')=='1')
						{
							$onof = $this->input->post('onoff');
						}else{
							$onof = '0';
						}
						
						
                    $data                = array();
                    $data                = array(
                        'username' => $username,
                        'email' => $email,
                        'mobileNo' => $phone,
						'alternate_contact' => $alternate_contact,
                        'dob' => $dob,
                       'city'=>$city,
					    'on_off'=> $onof,
//                      'pincode' => $pincode,
                         'address' => $address,
                            'website' => $website,
                            'companyHeading' => $companyHeading,
                            'TotalExperienceYr' => $TotalExperienceYr,
                            'companyDetail' => $companyDetail,
                            'companyName' => $username,
                            'Specialization' => $Specialization,
                            'email_show_hide' => $email_show_hide
                    );
                    $success             = $this->common_model->employeeUpdate($data,$email);
                        if ($success==1) {
                        $this->session->set_flashdata('action_message', '<div class="alert alert-success">Profile Updated</div>');
                         echo "<script>alert('Profile Updated');</script>";
                          redirect('home/employeeProfile');
                    } else {
                        $this->session->set_flashdata('action_message', '<div class="alert alert-warning">Something went wrong second. Please try again</div>');
                         echo "<script>alert('>Something went wrong second. Please try again');</script>";
                         redirect('home/employeeProfile');
                    }
                }
                
            }
        } else {    
            redirect(base_url('home/loginView'), 'refresh');
        }
    }
    
    
     public function jobActive($id){
         $id=$this->uri->segment(3);
         $status=$this->uri->segment(4);
//         echo $status; die;
         $empid    = $this->session->userdata('empid');
         $data=array("status"=>$status);
          $success             = $this->common_model->jobActive($empid,$id,$data);
//         print_r($success);
            if ($success=='true') {
                        $this->session->set_flashdata('action_message', '<div class="alert alert-success">Status Updated</div>');
                         redirect('home/getJobListById');
                    } else {
                        $this->session->set_flashdata('action_message', '<div class="alert alert-warning">Something went wrong second. Please try again</div>');
                        redirect('home/getJobListById');
                    }
     }
     public function jobAppliedStatus($id){
         $id=$this->uri->segment(3);
         $status=$this->uri->segment(4);
//         echo $status; die;
         $empid    = $this->session->userdata('empid');
         $data=array("applied_status"=>$status);
          $success = $this->common_model->jobAppliedStatus($empid,$id,$data);
//         print_r($success); die;
            if ($success=='true') {
                        $this->session->set_flashdata('action_message', '<div class="alert alert-success">Status Updated</div>');
                         redirect('home/companyJobStatus');
                    } else {
                        $this->session->set_flashdata('action_message', '<div class="alert alert-warning">Something went wrong second. Please try again</div>');
                        redirect('home/companyJobStatus');
                    }
     }
     public function jobPost(){
        if ($this->session->userdata('email') != False) {
//          print_r($this->input->post()); die;
            $empid    = $this->session->userdata('empid');
            $job_title = $this->input->post('job_title');
            $job_category    = $this->input->post('job_category');
            $job_type    = $this->input->post('job_type');
            $job_location  = $this->input->post('job_location');
//            $job_type     = $this->input->post('job_type');
            $job_salary_min      = $this->input->post('job_salary_min');
            $job_salary_max      = $this->input->post('job_salary_max');
            $job_skill     = $this->input->post('job_skill');
            $min_job_exp     = $this->input->post('min_job_exp');
            $max_job_exp     = $this->input->post('max_job_exp');
            $salary_type     = $this->input->post('salary_type');
            $job_description  = $this->input->post('job_description');
            $industry_type  = $this->input->post('industry_type');
          
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters();
            // Validating Name Field
            $this->form_validation->set_rules('job_title', 'job_title', 'trim|required|min_length[2]|max_length[60]');
            /*Validating address field*/
            $this->form_validation->set_rules('job_location', 'job_location', 'trim|required|min_length[3]|max_length[32]|xss_clean');
            /*validating contact field*/
            $this->form_validation->set_rules('job_type', 'job_type', 'trim');
            /*validating Date Of Birth field*/
            $this->form_validation->set_rules('job_salary_min', 'job_salary_min', 'trim');
            $this->form_validation->set_rules('job_salary_max', 'job_salary_max', 'trim');
            /*validating country field*/
            $this->form_validation->set_rules('job_skill', 'job_skill', 'trim');
            /*validating role field*/
            $this->form_validation->set_rules('min_job_exp', 'Job Min Exp', 'trim');
            $this->form_validation->set_rules('max_job_exp', 'Job Max Exp', 'trim');
            $this->form_validation->set_rules('salary_type', 'Job Max Exp', 'trim');
            $this->form_validation->set_rules('job_description', 'job_description', 'trim');
           
            
            if ($this->form_validation->run() == FALSE) {
               // $data['status']  = 'error';
                $data['message'] = validation_errors();
                redirect('home/jobPostView',$data);
            } else{
           
                    $data                = array();
                    $data                = array(
                            'empid' => $empid,
                            'job_title' => $job_title,
                            'job_location' => $job_location,
                            'job_category' => $job_category,
                            'job_type' => $job_type,
                            'salary_type' => $salary_type,
                            'job_salary_min' => $job_salary_min,
                            'job_salary_max' => $job_salary_max,
                            'job_skill' => $job_skill,
                            'min_job_exp' => $min_job_exp,
                            'max_job_exp' => $max_job_exp,
                            'job_description' => $job_description,
                            'industry_type' => $industry_type,
                            'created_at' => date('Y/m/d,h-m-s'),
                            'status' =>'active'
                          
                    );
                    $success = $this->common_model->jobPost($data);
//                echo $success; die;
                        if ($success=='true') {
                        $this->session->set_flashdata('action_message', '<div class="alert alert-success">Job Posted Successfully</div>');
					echo "<script>alert('Job Posted Successfully');window.location.href='getJobListById';</script>";
                         // redirect('home/getJobListById');
                    } else {
                        $this->session->set_flashdata('action_message', '<div class="alert alert-warning">Something went wrong second. Please try again</div>');
                        echo "<script>alert('Something went wrong second. Please try again');window.location.href='getJobListById';</script>";
                        // redirect('home/getJobListById');
                    }
                }
                
            
        } else {
            redirect(base_url(home/loginView), 'refresh');
        }
    }
    
    function getJobListById(){
        $empid=$this->session->userdata('empid');
        $id=$this->session->userdata('id');
      
        $data['getJobList']=$this->common_model->getJobListById($empid);
        $this->load->view('front/joblist',$data);
    }
    
     function deleteJobById(){
        $empid=$this->session->userdata('empid');
        $id=$this->session->userdata('id');
        $data=array();
        $data['getJobListById']=$this->common_model->deleteJobById($empid,$id);
        $this->load->view('front/joblist',$data);
    }
    
     function search(){
//        $empid=$this->session->userdata('empid');
//        $id=$this->session->userdata('id');
        $data['searchJob']=$this->crud_model->searchAllJob();
        $data['getJobCategory']=$this->crud_model->getJobCategory();
          $data['searchtype']='';
         $this->load->view('front/listing',$data);
    }
    
    function singleJob(){
        
        $porfile = @$_GET['profile'];
		$id=$this->uri->segment(3);
        $data['getSingleJob']=$this->crud_model->getSingleJob($id);
         $data['getCompanyDetail']=$this->crud_model->getCompanyDetail($data['getSingleJob'][0]->empid);
//        print_r($data); die;
         $data['searchJob']=$this->crud_model->getRandomJob($porfile);
         $data['searchtype']='';
        $this->load->view('front/listing_single',$data);
		
		
    }
    
       function searchCandidate(){
		  $name=$this->input->post('username');
          $city=$this->input->post('city');
          $data['getAllCandidate']=$this->crud_model->searchCandidate($name,$city);
          $data['searchtype']='';
         $this->load->view('front/candidate_listing',$data);
    }
    
       function searchAllCandidate(){
	
         $data['searchJob']=$this->crud_model->searchAllJob();
         $data['getAllCandidateName']= $this->crud_model->getAllCandidateName();
         $data['searchtype']='';
		 
           
         $this->load->view('front/candidate_listing',$data);
		}
	
		public function gtAllcandidateProfiie(){
			$page =  $_GET['page'];
			$result = $this->crud_model->getAllCandidate($page);
			
			$base = base_url('home/getCandidateProfile');
			$imagepath = base_url('assets/upload');
			$noimage = base_url('assets/profile.jpg');
			foreach($result as $row){
				
				if(!empty($row->image)){
                    $showImage =  '<img src="'.$imagepath.'/'.$row->image.'" alt="post_img" style="width:80px; height:80px;padding:15px;" />';
                   }else{
					 $showImage =  '<img src="'.$noimage.'" alt="post_img" style="height:80px; width:80px; padding:15px;" />';
				} 
				echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="jp_recent_resume_box_wrapper" >
								<div class="jp_recent_resume_img_wrapper">
                                  '.$showImage.'
								</div>
								<div class="jp_recent_resume_cont_wrapper">
									<h3>'.$row->username.'</h3>
									<p><i class="fa fa-folder-open-o"></i> <a href="#">'.$row->designation.'</a></p>
								</div>
								<div class="jp_recent_resume_btn_wrapper">
									<ul>
										<li><a href="'.$base.'/'.$row->id.'">View Profile</a></li>
									</ul>
								</div>
							</div>   
					</div>';
			}
		 
		}
	
	
	
	
    
      function searchJobFun(){
        //   print_r($this->input->post()); die;
         
          $category=$this->input->post('type');
          $city=$this->input->post('city');
            $data['searchJob']=$this->crud_model->searchJobCat($category,$city);
            $data['getJobCategory']=$this->crud_model->getJobCategory();
               $data['searchtype']='';
            //   echo "<pre>";
                    // print_r( $data['searchJob']); die;
            $this->load->view('front/listing',$data);

       
    }
      function searchJob(){
        $this->load->view('front/listing');
    }
    
	
	
	function searchJob2(){
		  
        //  print_r($this->input->post()); die;
          if(@$_GET['find_type']=='Job'){
			  $type=$_GET['type'];
			  $city=$_GET['city'];
			  $data['searchJob']=$this->crud_model->searchJob($type,$city);
			  $data['getJobCategory']=$this->crud_model->getJobCategory();
			  $data['searchtype']='';
				  
            $this->load->view('front/job_search_view',$data);
          }
		  
        if(@$_GET['find_type']=='People'){
            $type=$_GET['type'];
			  $city=$_GET['city'];
            $data['getAllCandidate']=$this->crud_model->searchCandidate($type,$city);
			//              print_r($data); die;
            $this->load->view('front/candidate_listing',$data);
        }
		if(isset($_GET['profile']))
		{
			$type = $_GET['profile'];
			$data['searchJob']=$this->crud_model->searchJob2($type); 
			$this->load->view('front/job_search_view',$data);
		}
		if(!empty(@$this->uri->segment(3)))
		{  
			$typess = $this->uri->segment(3);
			$data['searchJob']=$this->crud_model->Jobs($typess);
			$this->load->view('front/job_search_view',$data);
		} 
	}
	
	
    function findPeople(){
              
         $type=$this->input->post('type');
            $city=$this->input->post('city');
            $data['getAllCandidate']=$this->crud_model->searchCandidate($type,$city);
//              print_r($data); die;
            $this->load->view('front/candidate_listing',$data);  
        
    }
    
    function getCandidateProfile(){
//        $this->checklogin();
        $id=$this->uri->segment(3);
           $data['candidateDetail']=$this->crud_model->getCandidateProfile($id);

            $this->load->view('front/front_candidate_profile',$data);
    }  

      function getCandidateProfileForCompany(){
          $this->checklogin();
        $id=$this->uri->segment(3);
           $data['candidateDetail']=$this->crud_model->getCandidateProfileForCompany($id);

            $this->load->view('front/front_candidate_profile',$data);
    } 
    
    public function applyJob(){
         $this->checkloginC();
//        print_r($this->session->userdata());
        $data=array(
            'jobTitle'=>$this->input->post('jobTitle'),
            'jobDescrip'=>$this->input->post('jobDescrip'),
            'loc'=>$this->input->post('loc'),
            'type'=>$this->input->post('type'),
            'job_id'=>$this->input->post('job_id'),
            'company_name'=>$this->input->post('company_name'),
            'user_id'=>$this->session->userdata('candid'),
            'emp_id'=>$this->input->post('emp_id'), );
			
			$ml = $_POST['ml'];
			$on = $_POST['on'];
        
           $applyjobCheck  = $this->crud_model->applyjobCheck($this->session->userdata('candid'),$this->input->post('job_id'));
        if($applyjobCheck!=true){
          
           $success  = $this->crud_model->applyjob($data);
               
                   if($success){
                        //$this->confirm_mail_send($email, $randcode);
                        $this->session->set_flashdata('action_message', '<script>alert("Thank You For applying");</script>');
                        echo "<script>alert('Thank You For applying');</script>";
                         redirect('home/singleJob/'.$this->input->post('job_id').'?ml='.$ml.'&on='.$on);
                    } else {
                        $this->session->set_flashdata('action_message', '<script>alert("some error in applying");</script>');
                        echo "<script>alert('some error applying');</script>";
                         redirect('home/singleJob/'.$this->input->post('job_id').'?ml='.$ml.'&on='.$on);
                    }
        }else{
             $this->session->set_flashdata('action_message', '<script>alert("You Have Already Applied to this job");</script>');
                        echo "<script>alert('some error applying');</script>";
                         redirect('home/singleJob/'.$this->input->post('job_id').'?ml='.$ml.'&on='.$on);
        }
    }
    
    
    function check(){
        $this->load->view('front/refer_earn');
    }  
	
    function jobs(){
        $typess = $this->uri->segment(3);
        $data['searchJob']=$this->crud_model->Jobs($typess);
        $data['getJobCategory']=$this->crud_model->getJobCategory();
        $data['getJobCategoryByLoc']=$this->crud_model->getJobCategoryByLoc();
        $data['searchtype']=$typess;
        $this->load->view('front/listing',$data);
       
    }  
	
    function companyJobStatus(){
        $this->checklogin();
        //$typess=$this->uri->segment(3);
        //$data['companyJobStatus']=$this->crud_model->companyJobStatus($this->session->userdata('empid'));
        // print_r($data); die;
        $this->load->view('front/company_job_status');
    }
    
	
	public function canJobAppliedPagig(){
        $page =  $_GET['page'];
		$result = $this->crud_model->companyJobStatus($this->session->userdata('empid'),$page);
		$base =base_url("Home/joblistview");
	//	$k = 1;
		echo '<table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Job Title</th>
                        <th>Who Applied for your post</th>
                    </tr>
                </thead>';
		foreach($result as $row){
			
			echo '<tbody>
                    <tr>
                        <td><a href="'.$base.'?job_list='.$row->jobTitle.'" >'.$row->jobTitle.'</a></td>
                        <td><a href="'.$base.'?job_list='.$row->jobTitle.'" style="color:green;"><i class="fa fa-eye"></i> View Candidate Details</a></td>
                      </tr>
                </tbody>';
          // $k++;
				
        }
      //  exit;
    }
	
	
     function candidateJobStatus(){
         $this->checklogin();
        $typess=$this->uri->segment(3);
        $data['companyJobStatus']=$this->crud_model->candidateJobStatus($this->session->userdata('candid'));
        // print_r($data); die;
        $this->load->view('front/candidate_job_status',$data);
       
    }
    //  function getAllCandidateName(){
    //     // $data['getAllCandidate']=$this->crud_model->getAllCandidate();
    //     // print_r($data); die;
    //   $data['getAllCandidateName']= $this->crud_model->getAllCandidateName();
    //     $this->load->view('common/footer',$data);
    // }
    
    public function uploadResume(){
        $this->checklogin();
        if ($this->session->userdata('candidate_email') != False) {
            $this->load->library('form_validation');
    
                if ($_FILES['user_image']['name']) {
                   
                    $file_name     = $_FILES['user_image']['name'];
                    $fileSize      = $_FILES["user_image"]["size"] / 6072;
                    $fileType      = $_FILES["user_image"]["type"];
//                    $new_file_name = '';
                    
                    $config = array(
//                        'file_name' => $new_file_name,
                        'upload_path' => "./assets/resume/",
                        'allowed_types' => "pdf|PDF|docx|doc|DOC|DOCX",
                        'overwrite' => False,
                        'max_size' => "40240000",
                        // Can be set to particular file size , here it is 2 MB(2048 Kb)
                        'max_height' => "4000",
                        'max_width' => "4000"
                    );
                    
                    $this->load->library('Upload', $config);
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('user_image')) {
                        
                        $response['status']  = 'error';
                        $response['message'] = $this->upload->display_errors();
                         $id=$this->session->userdata('id');
                            $response['candidateDetail']=$this->common_model->getCandidateDetail($id);
//                        print_r($response); die;
                        $this->load->view('front/candidate_profile',$response);
                    } else {
                        $path                = $this->upload->data();
                        $img_url             = $path['file_name'];
                        $data                = array();
                        $data = array(
                        'final_file' => $_FILES['user_image']['name'],
                        );
                        $success             = $this->common_model->resumeUpdate($data,$this->session->userdata('candidate_email'));
//                        echo $success; die;
                         if ($success==true) {
                        $this->session->set_flashdata('action_message', '<div class="alert alert-success">Resume Uploded Successfully</div>');
                        echo "<script>alert('Resume Uploded Successfully');</script>";
                         redirect('home/candidateProfile');
                    } else {
                        $this->session->set_flashdata('action_message', '<div class="alert alert-warning">Something went wrong  first. Please try again</div>');
                        echo "<script>alert('Something went wrong  first. Please try again');</script>";
                     redirect('home/candidateProfile');
                    }   
                    }
                }
        } else {    
            redirect(base_url('home/loginView'), 'refresh');
        }
    }
    
    
        public function forgetPasswordView() {
			$data                  = array();
			$data['settingsvalue'] = $this->crud_model->GetSettingsValue();
			$this->load->view('front/forgot_password_view', $data);
        }
      
        public function forgetPasswordOTP() {
			$this->load->view('front/forget_password_otp');
        } 
		
		public function passnullforgetpassword() {
			
			$query  = $this->db->query("select * from candidate_tbl where email='".$_GET['email']."' and log_password='' ");
			if($query->num_rows() >0 )
			{
				$data['recNullpass'] = $query->result();
				$this->load->view('front/user_password_null_change_password_view',$data);
			}
        } 

		
    public function forgot_password() {

		$query  = $this->db->query("select * from candidate_tbl where email='".$_POST['email']."' and log_password='' ");
		if($query->num_rows() >0 )
		{
			foreach($query->result() as $rr):endforeach;
			if($rr->log_password=='');
			{
				 redirect('home/passnullforgetpassword?email='.$rr->email.'&type='.$rr->type);
			}
		}
		
        $email = $this->input->post('email');
        if($this->input->post('type')=='employee_tbl'){
            $table="employee_tbl";
			$checkemail = $this->common_model->Does_email_exists($email,$table);
			
        }if($this->input->post('type')=='candidate_tbl'){
            $table="candidate_tbl";
			$checkemail = $this->common_model->Cand_Does_email_exists($email,$table);
        }
        
		if ($checkemail) {
				$randcode     = rand(99999, 1000000);;
				$data         = array();
				$data         = array(
					'forgot_code' => $randcode
				);
				$updatedata   = $this->crud_model->UpdateKeyTable($data, $email,$table);
				$updateaffect = $this->db->affected_rows();
				$email        = $this->input->post('email');
				$data['type']=$table;
				$this->send_mail($email, $randcode);
				$this->session->set_flashdata('action_message', '<div class="alert alert-danger">Kindly check your email ' . ' ' .$email. ' An OTP is sent on Your registered email</div>');
                $this->load->view('front/forget_password_otp',$data);
			}else{
				$this->session->set_flashdata('action_message', '<div class="alert alert-danger">Please enter a valid email address!</div>');
				redirect('home/forgetPasswordView');
			}
		}
	
	
		public function send_mail($email, $randcode) {
			$config     = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'perfectdigitaldeveloper@gmail.com',
				'smtp_pass' => 'Amit#Singh'
			);
			$from_email = "talentsjob.in";
			$to_email   = $email;
			
			//Load email library 
			$this->load->library('email',$config);
			
			$this->email->from($from_email, 'Talent Jobs');
			$this->email->to($to_email);
			$this->email->subject('Reset your password!');
			$message =" $randcode is your Talents Jobs verification code. Code valid for 10 minutes only, one time use. Please DO NOT share this OTP with anyone to ensure account's security.";
		   
			$this->email->message($message);
			
			//Send mail 
			if ($this->email->send()) {
				$this->session->set_flashdata('action_message', 'Kindly check your email To reset your password');
			} else {
				$this->session->set_flashdata("action_message", "Error in sending Email.");
			}
		}
       public function checkOtpPassword() {
        $this->load->helper('form');
        $reset_key = $this->input->post('otp');
        if($this->input->post('type')=='employee_tbl'){
            $table="employee_tbl";
	   }else{
            $table="candidate_tbl";
        }
           
          $data['type']=$table;
        if ($this->crud_model->Does_Key_existsBoth($reset_key,$table)) {
            $data['reset_key'] = $reset_key;
            $this->load->view('front/change_password',$data);
        } else {
            $this->session->set_flashdata('action_message', '<div class="alert alert-danger">Please enter a valid OTP!</div>');
            $this->load->view('front/forget_password_otp',$data);
        }
    }
   
   public function nullpasswordChange(){
       
		$query  = $this->db->query("select * from candidate_tbl where email='".$_POST['email']."' and log_password='' ");
		if($query->num_rows() >0 )
		{
			 $password = $this->input->post('password');
			 $confirm  = $this->input->post('confirm');
			if ($password == $confirm) {
			
				$this->db->query("UPDATE candidate_tbl SET log_password='".md5($password)."' WHERE email ='".$_POST['email']."'  ");
				$this->db->query("UPDATE candidate_tbl SET password_backup='".md5($password)."' WHERE email ='".$_POST['email']."'  ");
				  
				$this->session->set_flashdata('action_message', '<div class="alert alert-success">Successfully Updated your password!!</div>');
                $this->load->view('front/login');
					
			}else {
				$this->session->set_flashdata('action_message', '<div class="alert alert-danger">Password does not match</div>');
				redirect('home/passnullforgetpassword?email='.$_POST['email'].'&type='.$_POST['type']);
			}
		}
	}
	
	
    public function passwordChange(){ 
        
		$password = $this->input->post('password');
        $confirm  = $this->input->post('confirm');
        $key      = $this->input->post('reset_key');
			
        if($this->input->post('type')=='employee_tbl'){
              $table="employee_tbl";
			 
			$userinfo = $this->crud_model->GetUserInfoBoth($key,$table);
			$data['reset_key']=$key;
			$data['type']=$table;
			if ($password == $confirm) {
				//if ($userinfo->password != sha1($password)) {
				if($userinfo->password != md5($password)){
					$data   = array();
					$data   = array(
	//                  'forgot_code' => $key,
						'password' => md5(($password))
					);
					$update = $this->crud_model->UpdatePasswordBoth($key,$data,$table);
					if ($this->db->affected_rows()) {
	//                  $data['message'] = 'Successfully Updated your password!!';
						$this->session->set_flashdata('action_message', '<div class="alert alert-success">Successfully Updated your password!!</div>');
						$this->load->view('front/login', $data);
					}
				} else {
					$this->session->set_flashdata('action_message', '<div class="alert alert-danger">You enter your old password.Please enter new password</div>');
					redirect('home/loginView');
				}
			} else {
				$this->session->set_flashdata('action_message', '<div class="alert alert-danger">Password does not match</div>');
				 $this->load->view('front/change_password',$data);
			}
		}else if($this->input->post('type')=='candidate_tbl'){
             $table="candidate_tbl";
			
			$userinfo = $this->crud_model->cand_GetUserInfoBoth($key,$table);
			$data['reset_key']=$key;
			$data['type']=$table;
			
			if ($password == $confirm) {
				//if ($userinfo->password != sha1($password)) {
				if($userinfo->log_password !=md5($password)) {
					$data   = array();
					$data   = array(
	//                  'forgot_code' => $key,
						'log_password' => md5($password),
						'password_backup'=>md5($password),
					 
					);
					$update = $this->crud_model->UpdatePasswordBoth($key,$data,$table);
					if ($this->db->affected_rows()) {
	//                  $data['message'] = 'Successfully Updated your password!!';
						$this->session->set_flashdata('action_message', '<div class="alert alert-success">Successfully Updated your password!!</div>');
						$this->load->view('front/login', $data);
					}
				} else {
					$this->session->set_flashdata('action_message', '<div class="alert alert-danger">You enter your old password.Please enter new password</div>');
					redirect('home/loginView');
				}
			} else {
				$this->session->set_flashdata('action_message', '<div class="alert alert-danger">Password does not match</div>');
				 $this->load->view('front/change_password',$data);
			}
			
        }
        
//      print_r($userinfo); die;
        
    }
    
     public function registerMail($emails,$password,$str) {
         $email=$emails;
         $string=$str;
         $psd=$password;
        $config     = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
			'smtp_user' => 'perfectdigitaldeveloper@gmail.com',
            'smtp_pass' => 'Amit#Singh'
        );
        $from_email = "talentjobshub@gmail.com";
        //Load email library 
        $this->load->library('email', $config);
        
        $this->email->from($from_email, 'Talent Jobs');
        $this->email->to($email);
        $this->email->subject('Talents Jobs Account Created');
       
	   $message = 'Hello '.$string.' 
		Your Login Id is: '.$email . ' and Your Password is: ' . $psd. ', Welcome to Talents Jobs, a platform bringing colleges, students and companies together. Your account has been created. Now it will be easier than ever to apply to relevant jobs. Please login & verify your account at below link:- '.base_url('home/loginView').' YOUR IMMEDIATE ACTION REQUIRED.	This is to remind you that you have not yet verified the email address associated with your Talents Jobs profile. A verified email address:	Establishes that you own your account on Talents Jobs Enhances the integrity of your profile Ensures more communications & jobs as companies prefer connecting with a verified email address Please click here and verify now to avoid the restrictions that are applied on accounts without a verified email address. We wish you great success in your Life. If you have any queries, please email us at talentjobshub@gmail.com Best of luck, Talentsjobs.in';
       
        $this->email->message($message);
        
        //Send mail 
        if ($this->email->send()) {
			
			if($this->session->userdata('email')!='' && $this->session->userdata('type')=='candidate'){
				//$this->session->set_flashdata('action_message', '<div class="alert alert-success">Your Acccount is Successfully Created </div>');
				redirect('home/candidateProfile');
			}
			
			 if($this->session->userdata('email')!='' && $this->session->userdata('type')=='employee'){
				redirect('home/employee_dashboard'); 
			 }
			
        } else {
            $this->session->set_flashdata("action_message", '<div class="alert alert-danger">Error in sending Email</div>');
             redirect('home/registerView');
        }
    }   
    
    
    public function refferMail() {
         $email=$this->input->post('email');
        $config     = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
			'smtp_user' => 'perfectdigitaldeveloper@gmail.com',
            'smtp_pass' => 'Amit#Singh'
        );
        $from_email = "talentsjob.in";
        //Load email library 
        $this->load->library('email', $config);
        
        $this->email->from($from_email, 'Talent Jobs');
        $this->email->to($email);
        $this->email->subject('Reffer And Earn Program by Talents Jobs');
        $message ="Thank you for reffer your friends please Registration your friend Details at below link we will contact you soon.

			Link:- ".base_url('home/registerView')."


			Talents Jobs has built its commencement on our solid reputation in the industry with over 6 years of established relationships with both clients and candidates across India. We run on referrals. The best referral marketing program we have is YOU!

			If you know someone that would be perfect for one of our positions, then get in touch!

			If the person you refer is successfully placed, and they pass a 90 days probationary period, you’ll receive minimum ₹ 11000/*- and more depends on profile referred.

			Get rewarded with cash and make your friends love you 

			Any referral provided will be treated with complete confidentiality
			There is no limit to a number of referrals you can make either>> Get paid for each one
			.
			RULES:-
			The rules are pretty simple, you refer us a friend and if we successfully place her/him, you’ll GET REWARDED.

			All referral schemes exclude candidates who are currently registered.


			The referee (you) must notify the referred person and seek consent for their details.


			The reward will only be paid if the referred individual is placed by Talents Jobs after candidate selection and must complete at least 3 months in a permanent position.";
				   
        $this->email->message($message);
        
        //Send mail 
        if ($this->email->send()) {
            $this->session->set_flashdata('action_message', '<div class="alert alert-success">Thank You!! Register Your Friend Details</div>');
            redirect('home/registerView');
        } else {
            $this->session->set_flashdata("action_message", '<div class="alert alert-danger">Error in sending Email</div>');
             redirect('home/check');
        }
    }
    public function dataAccess(){
        $this->checklogin();
        $data                  = array();
		if(empty($_GET['city']) && empty($_GET['designation']))
		{
			//$data['userlist']      = $this->crud_model->getAllUsers();
			//$data['settingsvalue'] = $this->crud_model->getSettingsValue();
			
			$this->load->view('front/userlist');
		}else{
			if(isset($_GET['city']) || isset($_GET['designation']))
			{
				$designation = $_GET['designation'];
				$city = $_GET['city'];
				$data['userlist']=$this->crud_model->searchCandidate1($designation,$city);
				
				$this->load->view('front/userlist',$data);
			}
		}
	}
	
	
	//datatable
	public function studlIst555()
	{
		$this->load->model('crud_model');
		$studelist = $this->crud_model->get_datatables();
		$data = array();
		$no = $_POST['start'];
		
		$base = base_url('home/getCandidateProfile');
		$resm = base_url('assets/resume');
		$upd = base_url('crud/updateValue');
		foreach ($studelist as $res) {
			$no++;
			$row = array();
			
			$row[] = '<a style="color:green;" href="'.$base.'/'.$res->id.'">'.$res->username.'</a>';
			$row[] = $res->email;
			$row[] = $res->designation;
			$row[] = $res->exp;
			$row[] = $res->mobileNo;
			$row[] = $res->city;
			
			if($res->final_file!='')
			{
		    	$row[] ='<a href="'.$resm.'/'.$res->final_file.'" style="color:blue">resume</a>';
			}else{
			    	$row[] ='<i class="fa fa-close" title="Resume not uploaded" style="color:red;"></i>';
			}
			
			$data[] = $row;
		}
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->crud_model->count_all(),
						"recordsFiltered" => $this->crud_model->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	
	
	public function joblistview(){
		
		$jobid = @$_GET['job_list'];
		$data['companyJobStatus'] = $this->crud_model->candidjobappliedlist($jobid);
		
		$this->load->view('front/candidate_applied_joblist_view',$data);
	}
	
	
	public function savechat1(){
	
		if(!empty($_POST['jobid']))
		{
			$jobid1 = $_POST['jobid'];
		}else{
			$jobid1 ='';
		}
		$sdata = array(
			'candid'=> $this->session->userdata('candid'),
			'empid'=> $this->input->post('empid'),
			'id'=> $jobid1,
			'candidate_send_message'=> $this->input->post('message'),
			'emp_seen_status'=> '1',
			'chat_date'=> date('d-m-Y'),
			'chat_time'=>date('d-m-Y H:i:s')
		);
		$insert = $this->db->insert('tbl_candidate_chat',$sdata);
		
		echo json_encode($insert);
	}
	
	
	public function savechat(){
	
		if(!empty($_POST['jobid']))
		{
			$jobid1 = $_POST['jobid'];
		}else{
			$jobid1 ='';
		}
		$sdata = array(
			'candid'=>$this->session->userdata('candid'),
			'empid'=> $this->input->post('empid'),
			'id'=> $jobid1,
			'candidate_send_message'=> $this->input->post('message'),
			'emp_seen_status'=> '1',
			'chat_date'=> date('d-m-Y'),
			'chat_time'=>date('d-m-Y H:i:s')
		);
		$insert = $this->db->insert('tbl_candidate_chat',$sdata);
		
		$query = $this->db->query("SELECT * FROM employee_tbl 
		JOIN tbl_candidate_chat ON tbl_candidate_chat.empid = employee_tbl.empid
		where tbl_candidate_chat.candid ='".$this->session->userdata('candid')."'
		and tbl_candidate_chat.empid='".$_POST['empid']."'
		 ");
		
		foreach($query->result() as $row)
		{
			$base = base_url('assets/img/user_img.png');
			$cusrimg = '<img src="'.$base.'" class="rounded-circle user_img img-responsive" style="height:40px;width:40px;">';
			
			$base = base_url('assets/img/admin.png');
			$eusrimg = '<img src="'.$base.'" class="rounded-circle user_img img-responsive" style="height:40px;width:40px;">';
			
			
			$currentDateTime = $row->chat_time;
			$newDateTime = date('h:i A', strtotime($currentDateTime));
			$ouput[] = array(
				'empid' => $row->empid,
				'candid' => $row->candid,
				'employee' => ucfirst($row->username),
				'eimage' => $eusrimg,
				'cimage' => $cusrimg,
				//'job_title' => $row->job_title,
				'candidate_send_message' => $row->candidate_send_message,
				'employee_response_message' => $row->employee_response_message,
				'chat_time' => $newDateTime
			);
		}
		echo json_encode($ouput);
	}
	
	public function livechat(){
		
		$query = $this->db->query("SELECT * FROM employee_tbl 
		JOIN tbl_candidate_chat ON tbl_candidate_chat.empid = employee_tbl.empid
		where tbl_candidate_chat.candid ='".$this->session->userdata('candid')."'
		and tbl_candidate_chat.empid='".$_POST['empid']."'
		 ");
		 
		foreach($query->result() as $row)
		{
			$currentDateTime = $row->chat_time;
			$newDateTime = date('h:i A', strtotime($currentDateTime));
			
			
			$base = base_url('assets/img/user_img.png');
			$cusrimg = '<img src="'.$base.'" class="rounded-circle user_img img-responsive" style="height:40px;width:40px;">';
			
			$base = base_url('assets/img/admin.png');
			$eusrimg = '<img src="'.$base.'" class="rounded-circle user_img img-responsive" style="height:40px;width:40px;">';
			
			$ouput[] = array(
				'empid' => $row->empid,
				'candid' => $row->candid,
				'employee' => ucfirst($row->username),
				'eimage' => $eusrimg,
				'cimage' => $cusrimg,
				//'job_title' => $row->job_title,
				'candidate_send_message' => $row->candidate_send_message,
				'employee_response_message' => $row->employee_response_message,
				//'login_status' => $row->login_status,
				'chat_time' => $newDateTime
			);
		}
		echo json_encode($ouput);
		
	}
	
	public function chat(){
		
		$this->load->view('front/candidate_chat_view');
	}
	
	public function employeechat(){
		
	$query = $this->db->query("SELECT * FROM employee_tbl 
	JOIN tbl_candidate_chat ON tbl_candidate_chat.empid = employee_tbl.empid	
	where tbl_candidate_chat.candid ='".$this->session->userdata('candid')."'
	GROUP BY tbl_candidate_chat.empid ");
	
		foreach($query->result() as $row)
		{
			$chqquery = $this->db->query("SELECT * FROM tbl_candidate_chat 
						where candid ='".$this->session->userdata('candid')."' and empid='".$row->empid."'
						and status='1' ");
						
			if($chqquery->num_rows() > 0)
			{
				$count = $chqquery->num_rows();
			}else{
				$count ='';
			}	
			
			
			//if($row->image=='')
			//{
				$base = base_url('assets/img/admin.png');
				$usrimg = '<img src="'.$base.'" class="rounded-circle user_img img-responsive" style="height:40px;width:40px;">';
			//}else{
				//$base = base_url('assets/upload');
				//$usrimg = '<img src="'.$base.'/'.$row->image.'" class="rounded-circle user_img img-responsive" style="height:40px;width:40px;">';
			//}
			
			$ouput[] = array(
				'empid' => $row->empid,
				'candid' => $row->candid,
				'login_status' => $row->login_status,
				'employee' => ucfirst(substr($row->username,0,20)),
				'chtcount' =>$count,
				'image' => $usrimg
			);
		}
		echo json_encode($ouput);
	}
	
	
	public function chtrecordsingemp(){
		
		$query = $this->db->query("SELECT * FROM employee_tbl 
		JOIN tbl_candidate_chat ON tbl_candidate_chat.empid = employee_tbl.empid	
		
		where tbl_candidate_chat.candid ='".$_POST['candid']."'
		and tbl_candidate_chat.empid='".$_POST['empid']."' ");
		
		foreach($query->result() as $row)
		{
			$currentDateTime = $row->chat_time;
			$newDateTime = date('h:i A', strtotime($currentDateTime));
			
			$base = base_url('assets/img/user_img.png');
			$cusrimg = '<img src="'.$base.'" class="rounded-circle user_img img-responsive" style="height:40px;width:40px;">';
			
				
			$base = base_url('assets/img/admin.png');
			$eusrimg = '<img src="'.$base.'" class="rounded-circle user_img img-responsive" style="height:40px;width:40px;">';
			
			$ouput[] = array(
				'empid' => $row->empid,
				'candid' => $row->candid,
				'employee' => ucfirst($row->username),
				'eimage' => $eusrimg,
				'cimage' => $cusrimg,
				'login_status' => $row->login_status,
				//'job_title' => $row->job_title,
				'candidate_send_message' => $row->candidate_send_message,
				'employee_response_message' => $row->employee_response_message,
				'chat_time' => $newDateTime
			);
		}
		echo json_encode($ouput);
	}
	
	public function empchat(){
		$this->load->view('front/emp_chat_view');
	}
	
	public  function MessageCount(){
		
		$query = $this->db->query("SELECT * FROM candidate_tbl 
		JOIN tbl_candidate_chat ON tbl_candidate_chat.candid = candidate_tbl.candid	
		where tbl_candidate_chat.empid ='".$this->session->userdata('empid')."'
		and tbl_candidate_chat.emp_seen_status='1' ");
		
		if($query->num_rows() > 0)
		{
		$ouput = array(
			'chtcount' =>$query->num_rows()
		);
		}else{
			$ouput = array(
				'chtcount' =>''
			);
		}
		echo json_encode($ouput);
	}
	public function getcandidate(){
		
		$query = $this->db->query("SELECT * FROM candidate_tbl 
		JOIN tbl_candidate_chat ON tbl_candidate_chat.candid = candidate_tbl.candid	
		where tbl_candidate_chat.empid ='".$this->session->userdata('empid')."'
		GROUP BY tbl_candidate_chat.candid 
		ORDER BY tbl_candidate_chat.candid DESC
		");
		foreach($query->result() as $row)
		{
			$chqquery = $this->db->query("SELECT * FROM tbl_candidate_chat 	where empid ='".$this->session->userdata('empid')."' and candid='".$row->candid."' and emp_seen_status='1'");
						
			if($chqquery->num_rows() > 0)
			{
				$count = $chqquery->num_rows();
			}else{
				$count ='';
			}			
			
			$base = base_url('assets/img/user_img.png');
			$usrimg = '<img src="'.$base.'" class="rounded-circle user_img img-responsive" style="height:40px;width:40px;">';
						
			$ouput[] = array(
				'empid' => $row->empid,
				'candid' => $row->candid,
				'candiadte' => ucfirst(substr($row->username,0,18)),
				'chtcount' =>$count,
				'login_status' =>$row->login_status,
				'image' => $usrimg
			);
		}
		echo json_encode($ouput);
	}
	
	
	public function candchatrec(){
		
		$query = $this->db->query("SELECT * FROM candidate_tbl 
		JOIN tbl_candidate_chat ON tbl_candidate_chat.candid = candidate_tbl.candid	
		where tbl_candidate_chat.candid ='".$_POST['candid']."'
		and tbl_candidate_chat.empid='".$_POST['empid']."'  ");
		
		foreach($query->result() as $row)
		{
			$currentDateTime = $row->chat_time;
			$newDateTime = date('h:i A', strtotime($currentDateTime));


			$base = base_url('assets/img/user_img.png');
			$cusrimg = '<img src="'.$base.'" class="rounded-circle user_img img-responsive" style="height:40px;width:40px;">';
			
			
			$base = base_url('assets/img/admin.png');
			$eusrimg = '<img src="'.$base.'" class="rounded-circle user_img img-responsive" style="height:40px;width:40px;">';
			
			$ouput[] = array(
				'empid' => $row->empid,
				'candid' => $row->candid,
				'candiadte' => ucfirst($row->username),
				'image' =>$cusrimg,
				'eimage' =>$eusrimg,
				'login_status' =>$row->login_status,
				//'job_title' => $row->job_title,
				'candidate_send_message' => $row->candidate_send_message,
				'employee_response_message' => $row->employee_response_message,
				'chat_time' => $newDateTime
			);
		}
		echo json_encode($ouput);
	}
	
			
	public function empsavechat(){
	
		$edata = array(
			'candid'=>$this->input->post('candid'),
			'empid'=> $this->input->post('empid'),
			//'id'=> $this->input->post('jobid'),
			'employee_response_message'=> $this->input->post('message'),
			'status'=> '1',
			'chat_date'=> date('d-m-Y'),
			'chat_time'=>date('d-m-Y H:i:s')
		);
		$insert = $this->db->insert('tbl_candidate_chat',$edata);
		
		$query = $this->db->query("SELECT * FROM employee_tbl 
		JOIN tbl_candidate_chat ON tbl_candidate_chat.empid = employee_tbl.empid
		where tbl_candidate_chat.empid ='".$this->session->userdata('empid')."'
		and tbl_candidate_chat.candid='".$_POST['candid']."' ");
		
		foreach($query->result() as $row)
		{
			$currentDateTime = $row->chat_time;
			$newDateTime = date('h:i A', strtotime($currentDateTime));
			
			
			$base = base_url('assets/img/user_img.png');
			$cusrimg = '<img src="'.$base.'" class="rounded-circle user_img img-responsive" style="height:40px;width:40px;">';
			
			$base = base_url('assets/img/admin.png');
			$eusrimg = '<img src="'.$base.'" class="rounded-circle user_img img-responsive" style="height:40px;width:40px;">';
			
			
			
			$ouput[] = array(
				'empid' => $row->empid,
				'candid' => $row->candid,
				'employee' => ucfirst($row->username),
				'cimage' => $cusrimg,
				'eimage' => $eusrimg,
			    //'job_title' => $row->job_title,
				'candidate_send_message' => $row->candidate_send_message,
				'employee_response_message' => $row->employee_response_message,
				'chat_time' => $newDateTime
			);
		}
		echo json_encode($ouput);
	}
	
	public function canlivechat(){
		
		$query = $this->db->query("SELECT * FROM employee_tbl 
		JOIN tbl_candidate_chat ON tbl_candidate_chat.empid = employee_tbl.empid
		where tbl_candidate_chat.empid ='".$this->session->userdata('empid')."'
		and tbl_candidate_chat.candid='".$_POST['candid']."'
		 ");
		
		foreach($query->result() as $row)
		{
			$currentDateTime = $row->chat_time;
			$newDateTime = date('h:i A', strtotime($currentDateTime));
			
			
			$base = base_url('assets/img/user_img.png');
			$cusrimg = '<img src="'.$base.'" class="rounded-circle user_img img-responsive" style="height:40px;width:40px;">';
			
			
			$base = base_url('assets/img/admin.png');
			$eusrimg = '<img src="'.$base.'" class="rounded-circle user_img img-responsive" style="height:40px;width:40px;">';
			
			
			$ouput[] = array(
				'empid' => $row->empid,
				'candid' => $row->candid,
				'employee' => ucfirst($row->username),
				'eimage' => $eusrimg,
				'cimage' => $cusrimg,
				//'job_title' => $row->job_title,
				'candidate_send_message' => $row->candidate_send_message,
				'employee_response_message' => $row->employee_response_message,
				'chat_time' => $newDateTime
			);
		}
		echo json_encode($ouput);
	}
	
	public function chatupdatestatus()
	{
		$this->load->model('Crud_model');
		$udata1 = array(
				'status'=> '0'
			);
		$upd = $this->Crud_model->updatechatstatus($udata1,$_POST['empid']);
		echo json_encode();
	}
	
	
    public function chatseenstatus()
	{
		$this->load->model('Crud_model');
		$udata1 = array(
				'emp_seen_status'=> '0'
			);
		$upd = $this->Crud_model->chatseenstatusUpd($udata1,$_POST['candid']);
		echo json_encode();
	}
	
	public  function CanMessageCount(){
		
		$query = $this->db->query("SELECT * FROM candidate_tbl 
		JOIN tbl_candidate_chat ON tbl_candidate_chat.candid = candidate_tbl.candid	
		where tbl_candidate_chat.candid ='".$this->session->userdata('candid')."'
		and tbl_candidate_chat.status='1' ");
		
		if($query->num_rows() > 0)
		{
		$ouput = array(
			'chtcount' =>$query->num_rows()
		);
		}else{
			$ouput = array(
				'chtcount' =>''
			);
		}
		echo json_encode($ouput);
	}
	
	
	
	 
	
	
    
}