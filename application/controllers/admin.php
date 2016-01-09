<?php

class Admin extends CI_Controller {
 var $data;
public function __construct(){ 
   parent::__construct();
$this->load->library('form_validation');
$this->load->model('user_model');
$this->load->library('session');
$this->load->helper('url');
$this->load->helper('form');
$this->load->database();

}
public function index()
{
  //  $this->logout();
    
    
   $this->data['category'] = $this->user_model->get_category() ;
   $this->data['brand'] = $this->user_model->get_brandname();
 
   if(($this->session->userdata('user_id')!="")){
       
     //set validation rules
    $this->load->view('admin/dashboard', $this->data);   
    $this->form_validation->set_rules('employeeno', 'Employee No', 'trim|required|numeric');
    $this->form_validation->set_rules('employeename', 'Employee Name', 'trim|required|xss_clean|callback_alpha_only_space');
    $this->form_validation->set_rules('department', 'Department', 'callback_combo_check');
    $this->form_validation->set_rules('designation', 'Designation', 'callback_combo_check');
    
    if ($this->form_validation->run() == FALSE)
    {
       // $this->load->view('admin/dashboard', $data);
    }
    else
    {
        //pass validation
        $data = array(
            'employee_no' => $this->input->post('employeeno'),
            'employee_name' => $this->input->post('employeename'),
            'department_id' => $this->input->post('department'),
            'designation_id' => $this->input->post('designation'),
            'hired_date' => @date('Y-m-d', @strtotime($this->input->post('hireddate'))),
            'salary' => $this->input->post('salary'),
        );

        //insert the form data into database
        $this->db->insert('tbl_employee', $data);

        //display success message
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Employee details added to Database!!!</div>');
        redirect('employee/index');
    }
    
    
    
  
   }
  else{
  // $this->load->view("admin/register_view");
   $this->load->view("admin/login");
 }
}
public function login(){
 //print_r($_POST); 
$rules = array(array('field'=>'l_email','label'=>'Email','rules'=>'required|valid_email'),
array('field'=>'l_pass','label'=>'Password','rules'=>'required'));
$this->form_validation->set_rules($rules);
if($this->form_validation->run() == FALSE){
  $this->index();
}
else{
$auth=$this->user_model->login($this->input->post('l_email'),$this->input->post('l_pass'));
if($auth){
  
 // $data['category'] = $this->user_model->get_category() ;
 // $data['brand'] = $this->user_model->get_brandname();
  $this->load->view("admin/dashboard",$data);
  
  print_r($data);

}else
{
  $this->data['error']="false";
   $this->load->view("admin/login",$data);
  // $this->load->view("admin/errorview");
}
}
}public function register()
{
$this->load->view('admin/register_view');//loads the register_view.php file in views folder
}
public function do_register()
{
 //print_r($_POST);     
$rules = array(
array('field'=>'username','label'=>'User Name','rules'=>'trim|required|min_length[4]|max_length[12]'),
array('field'=>'email','label'=>'Email','rules'=>'trim|required|valid_email|is_unique[users.email]'),
array('field'=>'password','label'=>'Password','rules'=>'trim|required|min_length[6]'),
array('field'=>'gender','label'=>'Gender','rules'=>'required')
);
$this->form_validation->set_rules($rules);
if($this->form_validation->run() == FALSE)
{ 
  //$this->load->view('admin/register_view');
   $this->load->view("admin/login");
}
else{
  //print_r($_POST);
  $this->user_model->register_user();
 // $this->load->view('admin/register_view');
   $this->load->view("admin/login");
//$this->load->view('success');
}
}
public function logout()
{
 $this->session->sess_destroy();
  $this->load->view("admin/login");
   
 //$this->load->view("admin/register_view");
}

public function DeleteBrand()
{
    print_r($_POST);
   
 //$this->load->view("admin/register_view");
}
public function AddBrand()
{     //echo $_POST['brand_name'];
      if($_POST['brand_name']!=""){
      $boolean = $this->user_model->add_brand($_POST['brand_name']);
      if($boolean)
    {  $this->data['bsucess']='sucess';
     $this->index();
    }else{
        $this->data['berror']='error';
         $this->index();
      }}
      else{
      $this->data['bempty']="bempty";
      $this->index();}
   
 //$this->load->view("admin/register_view");
}
public function DeleteCategory()
{
    print_r($_POST);
   
 //$this->load->view("admin/register_view");
}
public function AddCategory()
{   
   // print_r($_POST);
    if($_POST['category_name']!=""){
    $boolean = $this->user_model->add_category($_POST['category_name']);
    if($boolean)
    {  $this->data['sucess']='sucess';
      // $this->load->view("admin/index");
     $this->index();
    }else{
        $this->data['error']='error';
    // $this->load->view("admin/");
         $this->index();
    }}
    else{
      $this->data['cempty']="cempty";
      $this->index();}
    }


//custom validation function for dropdown input
function combo_check($str)
{
    if ($str == '-SELECT-')
    {
        $this->form_validation->set_message('combo_check', 'Valid %s Name is required');
        return FALSE;
    }
    else
    {
        return TRUE;
    }
}

//custom validation function to accept only alpha and space input
function alpha_only_space($str)
{
    if (!preg_match("/^([-a-z ])+$/i", $str))
    {
        $this->form_validation->set_message('alpha_only_space', 'The %s field must contain only alphabets or spaces');
        return FALSE;
    }
    else
    {
        return TRUE;
    }
}
}