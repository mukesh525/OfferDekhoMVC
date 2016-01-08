<?php

class Admin extends CI_Controller {
public function __construct(){ 
   parent::__construct();
$this->load->library('form_validation');
$this->load->model('user_model');
$this->load->library('session');
$this->load->helper('url');
}
public function index()
{
  //  $this->logout();
   if(($this->session->userdata('user_id')!="")){
     $this->load->view("admin/home");
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
  $this->load->view("admin/home");

}else
{
   //$this->index();
   $this->load->view("admin/login");
   $this->load->view("admin/errorview");
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
}