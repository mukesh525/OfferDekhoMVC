<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
  
    
    public function __construct(){
      $this->load->database();
     }



public function register_user(){
    echo 'register user module entered';
$data=array(
'username'=>$this->input->post('username'),
'email'=>$this->input->post('email'),
'password'=>md5($this->input->post('password')),
'gender'=>$this->input->post('gender'),
'registered'=>time()
);
   print_r($data);
   $insert =  $this->db->insert('users',$data);
   echo $this->db->_error_message();
   //return $insert;
   return true;
}

    function login($email,$password){
    $this->db->where("email",$email);
    $this->db->where("password",md5($password));
    $query=$this->db->get("users");
     if($query->num_rows()>0){
        $row=$query->row();
        $userdata = array(
        'user_id' => $row->id,
        'username'=> $row->username,
         'email' => $row->email,
      );
   $this->session->set_userdata($userdata);
   return true;
    }
     return false;
    }
    
    
    
    function get_brandname()     
    { 
        $this->db->select('Id');
        $this->db->select('Name');
        $this->db->from('brand');
        $query = $this->db->get();
        $result = $query->result();

        //array to store department id & department name
        $brand_id = array('-SELECT-');
        $brand_name = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($brand_id , $result[$i]->Id);
            array_push($brand_name, $result[$i]->Name);
        }
        return $brand_result = array_combine($brand_id, $brand_name);
    }
     //get Category table to populate the designation dropdown
    function get_category()     
    { 
        $this->db->select('Id');
        $this->db->select('Name');
        $this->db->from('category');
        $query = $this->db->get();
        $result = $query->result();

        $category_id = array('-SELECT-');
        $category_name = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($category_id, $result[$i]->Id);
            array_push($category_name, $result[$i]->Name);
        }
        return $category_result = array_combine($category_id, $category_name);
    }
}
    
