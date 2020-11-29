<?php

class Crud_model extends CI_Model {
    
    
    function __consturct() {
        parent::__construct();
        
    }
    /*All the names are suggestive enough and hence less code commenting*/
     
     public function applyjobCheck($user_id,$id){
        
        $this->db->where('user_id', $user_id);
        $this->db->where('job_id', $id);
        $query=$this->db->get('job_applied');
        return ($query->row() >= 1) ? true : false;
    }
    
    public function applyjob($data) {
        $this->db->insert('job_applied', $data);
       return $this->db->insert_id();
    }  
    public function insertcategory($data) {
        $this->db->insert('category', $data);
    }
    public function insertSizeValue($data) {
        $this->db->insert('size', $data);
    }
    public function insertColorValue($data) {
        $this->db->insert('color', $data);
    }
    public function insertBrandValue($data) {
        $this->db->insert('brand', $data);
    }
    public function insertSubcategory($data) {
        $this->db->insert('sub_category', $data);
    }
    public function getCategory() {
        $category = $this->db->dbprefix('category');
        $sql      = "SELECT * FROM $category ";
        $query    = $this->db->query($sql);
        $result   = $query->result();
        return $result;
    }
    public function getColor() {
        $color  = $this->db->dbprefix('color');
        $sql    = "SELECT * FROM $color ";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    public function getSize() {
        $size   = $this->db->dbprefix('size');
        $sql    = "SELECT * FROM $size";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    public function getBrand() {
        $brand  = $this->db->dbprefix('brand');
        $sql    = "SELECT * FROM $brand";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    public function getsubcategoryByID($catid) {
        $subcategory = $this->db->dbprefix('sub_category');
        $sql         = "SELECT * FROM $subcategory
    WHERE `cat_id`='$catid'";
        $query       = $this->db->query($sql);
        $result      = $query->result();
        return $result;
    }
    public function productInsert($data) {
        $this->db->insert('product', $data);
    }
    public function productColor($data) {
        $this->db->insert('product_color', $data);
    }
    public function productSize($data) {
        $this->db->insert('product_size', $data);
    }
    public function getProfileValue($userid) {
        $user   = $this->db->dbprefix('users');
        $sql    = "SELECT * FROM $user
    WHERE `user_id`='$userid'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }
    public function getUserValue($id) {
        $user   = $this->db->dbprefix('users');
        $sql    = "SELECT * FROM $user WHERE `user_id`='$id'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }
    /*delet single product image*/
    public function getSingleProImageById($id) {
        $image  = $this->db->dbprefix('product_image');
        $sql    = "SELECT * FROM $image
    WHERE `id`='$id'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }
    /*delet all product image*/
    public function getProImageById($id) {
        $image  = $this->db->dbprefix('product_image');
        $sql    = "SELECT * FROM $image
    WHERE `pro_id`='$id'";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    public function UserUpdate($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('candidate_tbl', $data);
        return $this->db->affected_rows();
    }
    public function UserUpdateEmp($id, $data) {
        $this->db->where('id', $id);
//        $this->db->where('status','active');
        $this->db->update('employee_tbl', $data);
        return $this->db->affected_rows();
    }
    public function UpdateTododata($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('to_do_list', $data);
    }
    public function updatePassword($id, $data) {
        $this->db->where('user_id', $id);
        $this->db->update('users', $data);
    }
    public function settingsUpdate($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('settings', $data);
    }
    public function getProductData() {
        $sql    = "SELECT `product`.*,
      `category`.*,
      `sub_category`.*
      from `product`
      LEFT JOIN `category` ON `product`.`cat_id`=`category`.`cat_id`  
      LEFT JOIN `sub_category` ON `product`.`subcat_id`=`sub_category`.`subcat_id`  
      LEFT JOIN `brand` ON `product`.`brand_id`=`brand`.`brand_id`";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    public function getSubCatById($id) {
        $sql    = "SELECT `sub_category`.*,
      `category`.*
      from `sub_category`
      LEFT JOIN `category` ON `sub_category`.`cat_id`=`category`.`cat_id`
      WHERE `sub_category`.`subcat_id`='$id'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }
    public function updateSubcategory($id, $data) {
        $this->db->where('subcat_id', $id);
        $this->db->update('sub_category', $data);
    }
    public function getproductdetails($proid) {
        $sql    = "SELECT `product`.*,
      `category`.*,
      `sub_category`.*,
      `brand`.*
      from `product`
      LEFT JOIN `category` ON `product`.`cat_id`=`category`.`cat_id`  
      LEFT JOIN `sub_category` ON `product`.`subcat_id`=`sub_category`.`subcat_id`  
      LEFT JOIN `brand` ON `product`.`brand_id`=`brand`.`brand_id`
      WHERE `product`.`pro_id`='$proid'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }
    public function getProductById($id) {
        $sql    = "SELECT `product`.*,
      `category`.*,
      `sub_category`.*,
      `brand`.*
      from `product`
      LEFT JOIN `category` ON `product`.`cat_id`=`category`.`cat_id`  
      LEFT JOIN `sub_category` ON `product`.`subcat_id`=`sub_category`.`subcat_id`  
      LEFT JOIN `brand` ON `product`.`brand_id`=`brand`.`brand_id`
      WHERE `product`.`pro_id`='$id'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }
    public function GetRelatedproduct($catid,$proid) {
        $sql    = "SELECT * FROM `product` WHERE `product`.`cat_id`='$catid' AND `product`.`pro_id` != '$proid' LIMIT 4";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    
    public function getproductsize($proid) {
        $sql    = "SELECT `product_size`.*,
      `size`.*
      from `product_size`
      LEFT JOIN `size` ON `product_size`.`size_id`=`size`.`size_id`  
      WHERE `product_size`.`pro_id`='$proid'";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    public function getproductcolor($proid) {
        $sql    = "SELECT `product_color`.*,
      `color`.*
      from `product_color`
      LEFT JOIN `color` ON `product_color`.`color_id`=`color`.`color_id`  
      WHERE `product_color`.`pro_id`='$proid'";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    public function getSettingsValue() {
        $settings = $this->db->dbprefix('settings');
        $sql      = "SELECT * FROM $settings";
        $query    = $this->db->query($sql);
        $result   = $query->row();
        return $result;
    }
    public function getAllUsers() {
        $user   = $this->db->dbprefix('candidate_tbl');
        $sql    = "SELECT * FROM $user order by id DESC ";
		
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
	//datatable
	
	
	var $table = 'candidate_tbl';
	var $column_order = array('username','email','status',null); //set column field database for datatable orderable
	var $column_search = array('username','email','status'); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('id' => 'desc'); // default order 

	
	private function _get_datatables_query()
	{
		
		$this->db->from($this->table);
		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		//$this->db->where('id',$_POST['cityid']);
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		//$this->db->where('id',$_POST['cityid']);
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		//$this->db->where('id',$_POST['cityid']);
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_id($id)
	{
		//$this->db->where('cid',$_POST['cityid']);
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}
	
	
	//datatable
    public function getAllUsersEmp() {
        $user   = $this->db->dbprefix('employee_tbl');
        $sql    = "SELECT * FROM $user order by id DESC";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    public function addUserInfo($data) {
        $this->db->insert('users', $data);
    }
    public function getAllGroupsUser() {
        $sql    = "SELECT * FROM `users` WHERE `user_type`='User'";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    public function getAllGroupsAdmin() {
        $sql    = "SELECT * FROM `users` WHERE `user_type`='Admin'";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    public function selectgroupdatabyId($id) {
        $sql    = "SELECT * FROM `users` WHERE `user_id`='$id'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }
    public function updateGroupInfo($id, $data) {
        $this->db->where('user_id', $id);
        $this->db->update('users', $data);
    }
    public function addUserNote($data) {
        $this->db->insert('notes', $data);
    }
    public function getUserNotes($userid) {
        $sql    = "SELECT `users`.*,
      `notes`.*
      from `notes`
      LEFT JOIN `users` ON `notes`.`comment_id`=`users`.`user_id`
      WHERE `notes`.`user_id`='$userid' ORDER BY `notes`.`datetime`DESC";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    public function getSubCategory() {
        $sql    = "SELECT `category`.*,
      `sub_category`.*
      from `sub_category`
      LEFT JOIN `category` ON `sub_category`.`cat_id`=`category`.`cat_id`";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    public function getTodoInfo($userid) {
        $sql    = "SELECT * FROM `to_do_list` WHERE `user_id`='$userid' ORDER BY `id` DESC";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    public function getProImage() {
        $sql    = "SELECT * FROM `product_image`";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    public function getproductImages($proid) {
        $sql    = "SELECT * FROM `product_image` WHERE `pro_id`='$proid'";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    public function getProductColors($proid) {
        $sql    = "SELECT `product_color`.*,
      `color`.*
      from `product_color`
      LEFT JOIN `color` ON `product_color`.`color_id`=`color`.`color_id`
      WHERE `product_color`.`pro_id`='$proid'";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    public function getProductSizes($proid) {
        $sql    = "SELECT `product_size`.*,
      `size`.*
      from `product_size`
      LEFT JOIN `size` ON `product_size`.`size_id`=`size`.`size_id`
      WHERE `product_size`.`pro_id`='$proid'";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    public function getCategoryValueById($id) {
        $sql    = "SELECT * FROM `category` WHERE `cat_id`='$id'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }
    public function getSizeBYId($id) {
        $sql    = "SELECT * FROM `size` WHERE `size_id`='$id'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }
    public function getColorById($id) {
        $sql    = "SELECT * FROM `color` WHERE `color_id`='$id'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }
    public function GetproductImage($proid) {
        $sql    = "SELECT * FROM `product_image` WHERE `pro_id`='$proid'";
        $query  = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    public function getBrandBYID($id) {
        $sql    = "SELECT * FROM `brand` WHERE `brand_id`='$id'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }
    public function updateCategory($catid, $data) {
        $this->db->where('cat_id', $catid);
        $this->db->update('category', $data);
    }
    public function updateSizeValue($id, $data) {
        $this->db->where('size_id', $id);
        $this->db->update('size', $data);
    }
    public function updateColorValue($id, $data) {
        $this->db->where('color_id', $id);
        $this->db->update('color', $data);
    }
    public function updateBrandValue($id, $data) {
        $this->db->where('brand_id', $id);
        $this->db->update('brand', $data);
    }
    public function productUpdateInfo($id, $data) {
        $this->db->where('pro_id', $id);
        $this->db->update('product', $data);
    }
    public function insert_tododata($data) {
        return $this->db->insert('to_do_list', $data);
    }
    public function productImgInsert($data1) {
        $this->db->insert('product_image', $data1);
    }
    public function userTableDelet($id) {
        $this->db->delete('users', array(
            'user_id' => $id
        ));
        $this->db->delete('notes', array(
            'user_id' => $id
        ));
        $this->db->delete('notes', array(
            'comment_id' => $id
        ));
    }
    public function delet_Color($id) {
        $this->db->where('pro_id', $id);
        $this->db->delete('product_color');
    }
    public function delet_Size($id) {
        $this->db->where('pro_id', $id);
        $this->db->delete('product_size');
    }
    public function delet_Product($id) {
        $this->db->where('pro_id', $id);
        $this->db->delete('product');
    }
    public function deelet_Img($id) {
        $this->db->where('id', $id);
        $this->db->delete('product_image');
    }
    public function deelet_Pro_Imgage($id) {
        $this->db->where('pro_id', $id);
        $this->db->delete('product_image');
    }
    /*Notifications Model*/
    public function notifications_user($id) {
        $sql = "SELECT `notes`.*,
        `users`.`full_name`, `image`
        FROM `notes` 
        LEFT JOIN `users` ON `notes`.`comment_id` = `users`.`user_id`
        WHERE `notes`.`user_id` = '$id' AND `notification_status` = 'unseen' AND `notes`.`comment_id` != '$id'";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    public function set_notifiication($id) {
        $sql = "UPDATE notes SET notification_status = 'seen' WHERE user_id = '$id' AND notification_status = 'unseen'";
        $this->db->query($sql);
        
    }
    public function getAdCategory(){
        $query = $this->db->get('ad_category');
        return $query->result_array();
    }
    public function insertAdcategory($data){
        $this->db->insert('ad_category',$data);
        return $this->db->insert_id();
    }
    public function getAdCategoryValueById($id){
        $query  = $this->db->get_where('ad_category', ['cat_id' => $id]);
        $result = $query->row();
        return $result;
    }
    public function updateAdCategory($catid, $data){
        $this->db->update('ad_category', $data, ['cat_id' => $catid]);
        return $this->db->affected_rows();
    }
     public function getCity(){
        $query = $this->db->get('city');
        return $query->result_array();
    }
    public function insertCity($data){
        $this->db->insert('city',$data);
        return $this->db->insert_id();
    }
    public function updateCity($catid, $data){
        $this->db->update('city', $data, ['id' => $catid]);
        return $this->db->affected_rows();
    }
    public function getCityValueById($id){
        $query  = $this->db->get_where('city', ['id' => $id]);
        $result = $query->row();
        return $result;
    }

  public function searchJobCat($category,$city){
        $this->db->select('jobpost.*,employee_tbl.companyName,employee_tbl.image');
        $this->db->from('jobpost');
        $this->db->join('employee_tbl', 'employee_tbl.empid = jobpost.empid');
        $this->db->like('job_location', $city,'both');
        $this->db->like('job_category', $category,'after');
        $query = $this->db->get();
         return $query->result();
  }

  public function searchJob($type,$city){
        $this->db->select('jobpost.*,employee_tbl.companyName,employee_tbl.image,employee_tbl.email,employee_tbl.email_show_hide');
        $this->db->from('jobpost');
        $this->db->join('employee_tbl', 'employee_tbl.empid = jobpost.empid');
        $this->db->like('job_location', $city,'both');
        $this->db->like('job_title', $type,'both');
        $query = $this->db->get();
        return $query->result();
  }
  
  
    public function searchJob2($type){
        $this->db->select('jobpost.*,employee_tbl.companyName,employee_tbl.image,employee_tbl.email,employee_tbl.email_show_hide');
        $this->db->from('jobpost');
        $this->db->join('employee_tbl', 'employee_tbl.empid = jobpost.empid');
       // $this->db->like('job_location', $city,'both');
        $this->db->like('job_title', $type,'both');
        $query = $this->db->get();
        return $query->result();
  }
  
  
  
  public function Jobs($type){
        $this->db->select('jobpost.*,employee_tbl.companyName,employee_tbl.image,employee_tbl.email,employee_tbl.email_show_hide');
        $this->db->from('jobpost');
        $this->db->join('employee_tbl', 'employee_tbl.empid = jobpost.empid');
        $this->db->like('job_category', $type);
        $this->db->or_like('job_title', $type,'after');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result();
  }
  public function recentJob(){
      $this->db->select('jobpost.*,employee_tbl.companyName,employee_tbl.image,employee_tbl.email,employee_tbl.email_show_hide');
      $this->db->from('jobpost');
      $this->db->join('employee_tbl', 'employee_tbl.empid = jobpost.empid');
      $this->db->where('jobpost.status','active');
      $this->db->limit('5');
      $this->db->order_by('rand()');
      $query = $this->db->get();
      return $query->result();
  }
  public function searchAllJob(){
      $this->db->select('jobpost.*,employee_tbl.companyName,employee_tbl.image');
      $this->db->from('jobpost');
       $this->db->join('employee_tbl', 'employee_tbl.empid = jobpost.empid');
      $this->db->where('jobpost.status','active');
        $query = $this->db->get();
        return $query->result();
  }
      public function companyJobStatus($empid,$page){
        /*$this->db->distinct();
        $this->db->select('job_applied.*,candidate_tbl.username,candidate_tbl.email,candidate_tbl.mobileNo,candidate_tbl.candid,candidate_tbl.id,candidate_tbl.exp');
        $this->db->limit($limit, $offset);
        $this->db->from('job_applied');
        $this->db->where('emp_id',$empid);
		$this->db->join('candidate_tbl', 'candidate_tbl.candid = job_applied.user_id');
        $this->db->group_by('jobTitle');
        $query = $this->db->get();
        return $query->result();*/
		
		$offset = 10 * $page;
        $limit = 50;
        $sql = "select * from job_applied where emp_id='".$empid."' GROUP BY jobTitle limit $offset ,$limit";
        $result = $this->db->query($sql)->result();
        return $result;
        
	}
  
  
    public function candidjobappliedlist($jobid){
        $this->db->distinct();
        $this->db->select('job_applied.*,candidate_tbl.username,candidate_tbl.email,candidate_tbl.final_file,candidate_tbl.mobileNo,candidate_tbl.candid,candidate_tbl.id,candidate_tbl.exp');
		$this->db->from('job_applied');
        $this->db->where('jobTitle',$jobid);
		$this->db->join('candidate_tbl', 'candidate_tbl.candid = job_applied.user_id');
       
        $query = $this->db->get();
        return $query->result();
	}
  
  
  
  
  
      public function candidateJobStatus($candid){
        $this->db->select('*');
          $this->db->from('job_applied');
            $this->db->where('user_id',$candid);
        //   $this->db->where('status','active');
		$this->db->join('employee_tbl', 'employee_tbl.empid = job_applied.emp_id');
        //$this->db->or_like('job_category', $type);
        $query = $this->db->get();
        return $query->result();
  }
      public function getJobCategory(){      
         $this->db->group_by('job_category');
        $this->db->select('job_category,job_location');
        $query    = $this->db->get('jobpost');
        $result   = $query->result();
        return $result;
   
    }
    
       public function getJobCategoryByLoc(){      
       
          $this->db->group_by('job_location');
        $this->db->select('job_category,job_location');
        $query    = $this->db->get('jobpost');
        $result   = $query->result();
        return $result;
   
    }
    
     public function searchCandidate($name,$city){
      $this->db->select('`id`,`username`, `email`,`HighestQualification`, `UniversityName`, `passingYr`, `course`, `Specialization`, `city`, `dob`, `image`,`exp`, `skills`,`designation`');
         $this->db->from('candidate_tbl');
        $this->db->like('city', $city,'after');
        $this->db->like('username', $name,'after');
        $this->db->or_like('designation', $name,'after');
        $query = $this->db->get();
        return $query->result();
	}
      public function getAllCandidate($page){ 
	  
		$offset = 10*$page;
        $limit = 50;
	    $this->db->limit($limit, $offset);
		$this->db->select('`id`,`username`, `email`,`HighestQualification`, `UniversityName`, `passingYr`, `course`, `Specialization`, `city`, `dob`, `image`,`exp`, `skills`,`designation`');
      
	    $query  = $this->db->get('candidate_tbl');
        $result  = $query->result();
        return $result;
    }  
    
    public function getRandomCandidate(){      
        
          $this->db->select('`id`,`username`, `email`,`HighestQualification`, `UniversityName`, `passingYr`, `course`, `Specialization`, `city`, `dob`, `image`,`exp`, `skills`,`designation`');
        $this->db->order_by('rand()');
        $this->db->limit('6');
        $query = $this->db->get('candidate_tbl');
     
        $result   = $query->result();
        return $result;
   
    }
      public function getCandidateProfile($id){      
        
         $this->db->select(' `id`,`username`, `email`,`HighestQualification`, `UniversityName`, `passingYr`, `course`, `Specialization`, `city`, `dob`, `image`,`exp`, `skills`,`designation`');
         $this->db->where('id',$id);
        $query    = $this->db->get('candidate_tbl');
        $result   = $query->result();
        return $result;
   
    }
      public function getCandidateProfileForCompany($id){      
        
          $this->db->select(' `id`,`username`, `email`,`HighestQualification`, `UniversityName`, `passingYr`, `course`, `Specialization`, `city`, `dob`, `image`,`exp`, `skills`,`designation`');
          $this->db->where('candid',$id);
        $query    = $this->db->get('candidate_tbl');
        $result   = $query->result();
        return $result;
   
    }
      public function getCompanyDetail($id){      
        
          $this->db->select(' `id`, `username`,`on_off`,`email`, `TotalExperienceYr`, `TotalExperienceMonth`, `companyDetail`, `companyName`, `companyHeading`, `mobileNo`, `alternate_contact`, `city`, `UniversityName`, `website`, `Specialization`, `acceptTerms`, `final_file`, `type`, `posting_status`, `created_at`,  `empid`, `dob`, `image`, `pincode`, `address');
          $this->db->where('empid',$id);
        //   $this->db->where('status','active');
        $query    = $this->db->get('employee_tbl');
        $result   = $query->result();
        return $result;
   
    }
    
      public function getSingleJob($id){      
        
        $this->db->select('`id`, `empid`, `job_title`,`industry_type`, `job_category`, `job_location`, `job_type`, `job_salary_min`, `job_salary_max`, `job_skill`, `min_job_exp`, `max_job_exp`, `job_description`,`created_at`');
        $this->db->where('id',$id);
        $query    = $this->db->get('jobpost');
        $result   = $query->result();
        return $result;
   
    }
    
      public function getRandomJob($porfile){      
        $this->db->select('`id`, `empid`, `job_title`,`industry_type`, `job_category`, `job_location`, `job_type`, `job_salary_min`, `job_salary_max`, `job_skill`, `min_job_exp`, `max_job_exp`, `job_description`,`created_at`');
         $this->db->where('job_title',$porfile);
		$this->db->order_by('rand()');
        $this->db->limit(4);
        $query = $this->db->get('jobpost');
        $result   = $query->result();
        return $result;
   
    }
    
      public function UpdateKeyTable($data, $email,$table){
        $this->db->where('email', $email);
        $this->db->update($table, $data);
    }
      public function GetUserInfoBoth($key,$table){
        $user   = $this->db->dbprefix($table);
        $sql    = "SELECT `password` FROM $user
        WHERE `forgot_code`='$key'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    } 

	public function cand_GetUserInfoBoth($key,$table){
        $user   = $this->db->dbprefix($table);
        $sql    = "SELECT `log_password` FROM $user
        WHERE `forgot_code`='$key'";
        $query  = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }
    
      public function getAllCandidateName(){
        $user   = $this->db->dbprefix('candidate_tbl');
        $sql    = "SELECT `username` FROM $user limit 200";
        $query  = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }
      public function UpdatePasswordBoth($key, $data,$table){
        $this->db->where('forgot_code', $key);
        $this->db->update($table, $data);
    }
    //**exists employee email check**//
    public function Does_Key_existsBoth($reset_key,$table){
        $user   = $this->db->dbprefix($table);
        $sql    = "SELECT `forgot_code` FROM $user
        WHERE `forgot_code`='$reset_key'";
        $result = $this->db->query($sql);
        if ($result->row()) {
            return $result->row();
        } else {
            return false;
        }
    }
	
	  public function searchCandidate1($designation,$city){
      $this->db->select('`id`,`username`, `mobileNo`,`created_at`,`final_file`,`email`,`HighestQualification`, `UniversityName`, `passingYr`, `course`, `Specialization`, `city`, `dob`, `image`,`exp`, `skills`,`designation`');
         $this->db->from('candidate_tbl');
		//$this->db->join('employee_tbl', 'employee_tbl.empid = jobpost.empid');
        $this->db->like('city', $city,'after');
        //$this->db->like('username', $designation,'after');
        $this->db->like('designation', $designation,'after');
        $query = $this->db->get();
        // echo $this->db->last_query();
        // echo "<pre>";
        return $query->result();
	}
	
	public function get_job_pagig($limit, $offset, $search, $count)
	{
		$this->db->select('jobpost.*,employee_tbl.companyName,employee_tbl.image,employee_tbl.email,employee_tbl.email_show_hide');
        $this->db->from('jobpost');
        $this->db->join('employee_tbl', 'employee_tbl.empid = jobpost.empid');
       
		//$this->db->like('job_category', $search);
       //$this->db->or_like('job_title', $search,'after');
		$this->db->order_by('id', 'desc');
		
		if($search){
			$keyword = $search['keyword'];
			if($keyword){
				$this->db->where("job_title LIKE '%$keyword%' or job_category LIKE '%$keyword%'  or job_location LIKE '%$keyword%' or job_skill LIKE '%keyword%'  ");
			}
		}
		if($count){
			return $this->db->count_all_results();
		}
		else {
			$this->db->limit($limit, $offset);
			$query = $this->db->get();
			
			if($query->num_rows() > 0) {
				return $query->result();
			}
		}
		
		return array();
	}

	
	public function updatechatstatus($udata1,$empid)
	{
		$this->db->where('empid',$empid);
		$this->db->where('candid',$this->session->userdata('candid'));
		return $this->db->update('tbl_candidate_chat',$udata1);
	}
	
	public function chatseenstatusUpd($udata1,$candid)
	{
		$this->db->where('candid',$candid);
		$this->db->where('empid',$this->session->userdata('empid'));
		return $this->db->update('tbl_candidate_chat',$udata1);
	}
	
	
	
	
	
}
?>