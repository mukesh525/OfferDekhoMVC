<?php

class Admin extends CI_Controller {
 var $data;
public function __construct(){ 
   parent::__construct();
$this->load->library('form_validation');
$this->load->model('user_model');
$this->load->library('session');
$this->load->helper(array('form','url'));
$this->load->database();
$this->data['category'] = $this->user_model->get_category() ;
$this->data['brand'] = $this->user_model->get_brandname();
}
   public function index(){
   $this->data['category'] = $this->user_model->get_category() ;
   $this->data['brand'] = $this->user_model->get_brandname();
 
   if(($this->session->userdata('user_id')!="")){
    $this->load->view('admin/dashboard', $this->data);   
   }
  else{
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
//$data = array('l_email' => $this->input->post('l_email'),'l_pass' => $this->input->post('l_pass'));
$auth=$this->user_model->login($this->input->post('l_email'),$this->input->post('l_pass'));
if($auth){
  $this->load->view("admin/dashboard",$this->data);
  }else{
   $this->data['error']="false";
   $this->load->view("admin/login",$this->data);
  }
 }
}


public function register(){
$this->load->view('admin/addadmin');
}


public function do_register(){
  //set validation rules
   $this->form_validation->set_rules('uname','User Name','trim|required|min_length[3]|max_length[30]|xss_clean');
   $this->form_validation->set_rules('email','Email ID','trim|required|valid_email');
   $this->form_validation->set_rules('gender','Gender','trim|required');   
   $this->form_validation->set_rules('password','Password','trim|required|min_length[5]|matches[cpassword]|md5');
   $this->form_validation->set_rules('cpassword','Confirm Password', 'trim|required|min_length[5]');   
   if ($this->form_validation->run() == FALSE){
        $this->load->view('admin/addadmin');
       }
    else
        { //insert the user registration details into database
            $data = array(
                'username' => $this->input->post('uname'),
                'email' => $this->input->post('email'),
                'gender' => $this->input->post('gender'),
                'password' => $this->input->post('password')
            );
            
            // insert form data into database
            if ($this->user_model->register_user($data))
            {
                $this->data['sucess']="Admin added sucessfully";
                $this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">Your Email Address is successfully verified! Please login to access your account!</div>');
                $this->load->view('admin/addadmin', $this->data);
              }
        }
}

public function logout()
{
 $this->session->sess_destroy();
 $this->load->view("admin/login");

}

public function DeleteBrand()
{
  if($_POST['brand']!='-SELECT-'){
        print_r($_POST);
        $boolean = $this->user_model->delete_brand($_POST['brand']);
          if($boolean){
          $this->data['bdsucess']='sucess';
          $this->index();
         }else{
          $this->data['bderror']='error';
          $this->index();
          }
    }
   else{
      $this->data['bdempty']="bdempty";
      $this->index();
   }
   
   echo $this->db->_error_message();
}
public function AddBrand(){   
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
}
public function DeleteCategory()
{
  if($_POST['category']!='-SELECT-')
    {
        print_r($_POST);
        $boolean = $this->user_model->delete_category($_POST['category']);
          if($boolean){
          $this->data['casucess']='casucess';
          $this->index();
         }else{
          $this->data['caerror']='caerror';
          $this->index();
          }
    }
   else{
      $this->data['caempty']="caempty";
      $this->index();
      
   }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   
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