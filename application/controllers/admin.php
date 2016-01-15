<?php
class Admin extends CI_Controller
{
    var $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_model');
        $this->load->model('products');
        $this->load->library('session');
        $this->load->helper(array(
            'form',
            'url'
        ));
        $this->load->database();
        $this->data['category'] = $this->user_model->get_category();
        $this->data['brand']    = $this->user_model->get_brandname();
        $this->data['products'] = $this->products->getProductName();
        $this->data['imageslider'] = $this->products->getImageSlidertName();
        
    }
    
    public function index()
    {
        $this->data['category'] = $this->user_model->get_category();
        $this->data['brand']    = $this->user_model->get_brandname();
        if (($this->session->userdata('user_id') != "")) {
            $this->load->view('admin/dashboard', $this->data);
        } else {
            $this->load->view("admin/login");
        }
    }
    
    public function login()
    {
        $rules = array(
            array(
                'field' => 'l_email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ),
            array(
                'field' => 'l_pass',
                'label' => 'Password',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $auth = $this->user_model->login($this->input->post('l_email'), $this->input->post('l_pass'));
            if ($auth) {
                $this->load->view("admin/dashboard", $this->data);
            } else {
                $this->data['error'] = "false";
                $this->load->view("admin/login", $this->data);
            }
        }
    }
    
    public function register(){
        $this->load->view('admin/addadmin');
    }
     public function getProductImage($id){
      $image = $this->products-> getProductImage($id);
      echo $image;
    }
    
    
     public function getSliderImage($id){
       $image = $this->products->getSliderImage($id);
       echo $image;
      
    }
     public function delete_product(){
       if ($_POST['products'] != '-SELECT-') {
        $boolean = $this->products->delete_product($_POST['products']);
       if($boolean){
         $this->data['dpsucess'] = 'sucess';
         $this->data['products']  = $this->products->getProductName();
         $this->load->view('admin/addproduct', $this->data);
        } 
        else {
             $this->data['dperror'] = 'error';
            $this->load->view('admin/addproduct', $this->data);
            }
     }else{
         echo $this->db->_error_message();
     }
     
     }
        public function delete_SliderImage(){
       if ($_POST['imageslider'] != '-SELECT-') {
       $boolean = $this->products->delete_imageslider($_POST['imageslider']);
       if($boolean){
         $this->data['dipsucess'] = 'sucess';
         $this->data['products']  = $this->products-> getImageSlidertName();
         $this->load->view('admin/addImageSlider', $this->data);
        } 
        else {
             $this->data['diperror'] = 'error';
            $this->load->view('admin/addImageSlider', $this->data);
            }
     }else{
         echo $this->db->_error_message();
     }
     
     }
    
    public function do_register()
    {
        
        $this->form_validation->set_rules('uname', 'User Name', 'trim|required|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|callback_UniqueEmail');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required|callback_combo_check');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|matches[cpassword]|md5');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|min_length[5]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/addadmin');
        } else {
            $data = array(
                'username' => $this->input->post('uname'),
                'email' => $this->input->post('email'),
                'gender' => $this->input->post('gender'),
                'password' => $this->input->post('password')
            );
            if ($this->user_model->register_user($data)) {
                $this->data['sucess'] = "Admin added sucessfully";
                $this->session->set_flashdata('verify_msg', '<div class="alert alert-success text-center">Your Email Address is successfully verified! ' . 'Please login to access your account!</div>');
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
        if ($_POST['brand'] != '-SELECT-') {
            print_r($_POST);
            $boolean = $this->user_model->delete_brand($_POST['brand']);
            if ($boolean) {
                $this->data['bdsucess'] = 'sucess';
                $this->index();
            } else {
                $this->data['bderror'] = 'error';
                $this->index();
            }
        } else {
            $this->data['bdempty'] = "bdempty";
            $this->index();
        }
        
        echo $this->db->_error_message();
    }
    
    public function AddBrand()
    {
        if ($_POST['brand_name'] != "") {
            $boolean = $this->user_model->add_brand($_POST['brand_name']);
            if ($boolean) {
                $this->data['bsucess'] = 'sucess';
                $this->index();
            } else {
                $this->data['berror'] = 'error';
                $this->index();
            }
        } else {
            $this->data['bempty'] = "bempty";
            $this->index();
        }
    }
    
    public function DeleteCategory()
    {
       
        if ($_POST['category'] != '-SELECT-') {
            print_r($_POST);
            $boolean = $this->user_model->delete_category($_POST['category']);
            if ($boolean) {
                $this->data['casucess'] = 'casucess';
                $this->index();
            } else {
                $this->data['caerror'] = 'caerror';
                $this->index();
            }
        } else {
            $this->data['caempty'] = "caempty";
            $this->index();
        }
    }
    
    public function addProduct()
    {
       
        $this->load->view('admin/addproduct', $this->data);
    }
     public function  addImageSlider()
    {
        $this->load->view('admin/addImageSlider',$this->data);
    }
    
    public function add_product()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('discount', 'Discount', 'trim|required|numeric|xss_clean|max_length[2]');
        $this->form_validation->set_rules('image', 'Profile Image', 'callback_image_upload');
        $this->form_validation->set_rules('location', 'Location', 'trim|required');
        $this->form_validation->set_rules('brand', 'brand', 'trim|required|callback_combo_check');
         $this->form_validation->set_rules('products', 'products', 'trim|required|callback_combo_check');
        $this->form_validation->set_rules('category', 'category', 'trim|required|callback_combo_check');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/addproduct', $this->data);
        } else { //insert the user registration details into database
            $this->upload->do_upload('image');
            $upload_data = $this->upload->data();
            $file_name   = $upload_data['file_name'];
            
            $data = array(
                'name' => $this->input->post('name'),
                'discount' => $this->input->post('email'),
                'image' => $file_name,
                'location' => $this->input->post('location'),
                'category' => $this->input->post('category'),
                'brand' => $this->input->post('brand')
            );
             $boolean = $this->products->addProduct($data);
             if($boolean){
               $this->data['psucess'] = 'sucess';  
               $this->load->view('admin/addproduct', $this->data);
             }else{
               $this->data['perror'] = 'error';  
               $this->load->view('admin/addproduct', $this->data);
             }
        }
    }
     public function add_ImageSlider()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('image', 'Image', 'callback_image_upload1');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
      
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/addImageSlider', $this->data);
        } else {
            $this->upload->do_upload('image');
            $upload_data = $this->upload->data();
            $file_name   = $upload_data['file_name'];
            
            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'image' => $file_name,
                );
             $boolean = $this->products->addImageSLiderData($data);
             if($boolean){
               $this->data['pisucess'] = 'sucess';  
               $this->load->view('admin/addImageSlider', $this->data);
             }else{
               $this->data['pierror'] = 'error';  
               $this->load->view('admin/addImageSlider', $this->data);
             }
        }
    }
   
    public function image_upload()
    {
        
        if ($_FILES['image']['size'] != 0) {
            $upload_dir = './images/';
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir);
            }
            
            $config['upload_path']   = $upload_dir;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name']     = 'image_' . substr(md5(rand()), 0, 7);
            $config['overwrite']     = false;
            $config['max_size']      = '1000000';
            $config['max_width']     = 166;
            $config['max_height']     = 194;
            
        
            $this->load->library('upload', $config);
            //echo 'config';
           //  print_r($_FILES['image']);exit;
            if (!in_array($_FILES['image']['type'], array(
                'image/gif',
                'image/jpg',
                'image/png',
                'image/jpeg'
            ))) {
                $this->form_validation->set_message('image_upload', "This file type is not allowed");
                return FALSE;
                
            } else {
                    $imageSize = $_FILES["image"]['tmp_name'];
                    $imgSize1 = @getImageSize($imageSize);  
                    $imageWidth = $imgSize1[0];
                    $imageHeigth = $imgSize1[1];
//                    print_r($imageHeigth);
//                    print_r($imageWidth); exit();
             
                
                if ($_FILES['image']['size'] > 1000000) {
                    $this->form_validation->set_message('image_upload', "This file exeeds the size limit");
                    return FALSE;
                }
                 elseif ( $imageWidth!=166 || $imageHeigth!=194) {
                   $this->form_validation->set_message('image_upload', "Image Resoltion must be in 166*194 width and height repectively");
                    return FALSE; 
                
                 }
                
                else {
                    return TRUE;
                }
                
            }
            
            
        } else {
            $this->form_validation->set_message('image_upload', "No file selected");
            return false;
        }
    }
     public function image_upload1()
    {
        
        if ($_FILES['image']['size'] != 0) {
            $upload_dir = './images/';
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir);
            }
            
            $config['upload_path']   = $upload_dir;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name']     = 'slider_' . substr(md5(rand()), 0, 7);
            $config['overwrite']     = false;
            $config['max_size']      = '20000000';
            $config['max_width']     = 1200;
            $config['max_height']     = 450;
            
        
            $this->load->library('upload', $config);
            //echo 'config';
           // print_r($_FILES['image']);exit;
            if (!in_array($_FILES['image']['type'], array(
                'image/gif',
                'image/jpg',
                'image/png',
                'image/jpeg'
            ))) {
                $this->form_validation->set_message('image_upload1', "This file type is not allowed");
                return FALSE;
                
            } else {
                    $imageSize = $_FILES["image"]['tmp_name'];
                    $imgSize1 = @getImageSize($imageSize);  
                    $imageWidth = $imgSize1[0];
                    $imageHeigth = $imgSize1[1];
//                    print_r($imageHeigth);
//                    print_r($imageWidth); exit();
             
                
                if ($_FILES['image']['size'] > 20000000) {
                    $this->form_validation->set_message('image_upload1', "This file exeeds the size limit");
                    return FALSE;
                }
                 elseif ( $imageWidth!=1200 || $imageHeigth!=450) {
                   $this->form_validation->set_message('image_upload1', "Image Resoltion must be in 1200*450 width and height repectively");
                    return FALSE; 
                
                 }
                
                else {
                    return TRUE;
                }
                
            }
            
            
        } else {
            $this->form_validation->set_message('image_upload1', "No file selected");
            return false;
        }
    }
    public function AddCategory(){
        if ($_POST['category_name'] != "") {
            $boolean = $this->user_model->add_category($_POST['category_name']);
            if ($boolean) {
                $this->data['sucess'] = 'sucess';
                $this->index();
            } else {
                $this->data['error'] = 'error';
                $this->index();
            }
        } else {
            $this->data['cempty'] = "cempty";
            $this->index();
        }
    }
    
 
    
    function combo_check($str)
    {
        if ($str == '-SELECT-') {
            $this->form_validation->set_message('combo_check', 'Valid %s Name is required');
            return FALSE;
        } else {
            return TRUE;
        }
    }
    
    // custom validation function to accept only alpha and space input
    
    function alpha_only_space($str)
    {
        if (!preg_match("/^([-a-z ])+$/i", $str)) {
            $this->form_validation->set_message('alpha_only_space', 'The %s field must contain only alphabets or spaces');
            return FALSE;
        } else {
            return TRUE;
        }
    }
    
    function UniqueEmail($email)
    {
        $boolean = $this->user_model->isEmailExist($email);
        if ($boolean) {
            $this->form_validation->set_message('UniqueEmail', 'This %s email already exist.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
    
    
   
    
}
