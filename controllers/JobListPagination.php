<?php defined('BASEPATH') OR exit('No direct script access allowed');

class JobListPagination extends CI_Controller {
	function __construct() {
        parent::__construct();
		///if(empty($this->session->userdata('userss'))){
				//redirect('AdminLogin'); 
			//}
		$this->load->model('Crud_model');
       $this->load->model('common_model');
     
	}
	
	public function index_ajax($offset=null)
	{
		$search = array(
			'keyword' => trim($this->input->post('search_key')),
		);
		$this->load->library('pagination');
		$limit = 15;
		$offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$config['base_url'] = site_url('JobListPagination/index_ajax/');
		$config['total_rows'] = $this->Crud_model->get_job_pagig($limit, $offset, $search, $count=true);
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$config['num_links'] = 3;
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li><a href="" class="current_page">';
		$config['cur_tag_close'] = '</a></li>';
		$config['next_link'] = 'N';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = 'P';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_link'] = 'F';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'L';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		$data['emp_rec'] = $this->Crud_model->get_job_pagig($limit, $offset, $search, $count=false);
		$data['pagelinks'] = $this->pagination->create_links();
		$this->load->view('front/job_index_ajax_view', $data);
	}
	 
}
