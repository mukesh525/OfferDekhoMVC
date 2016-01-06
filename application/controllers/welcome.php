<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

     public function Welcome() {
         parent::__construct();
         $this->load->helper('url');
         $this->load->model('products');
         $this->loadheader();
         }
         public function index(){       
                $this->load->view('templates/imageslider');
                $this->load->view('templates/containers');
                $this->load->view('templates/offers');
                $this->load->view('templates/footer');
        }
         function getdetail($category) {
                $selection['selections']= $category;
                $this->load->view('templates/product',$selection);
                $this->load->view('templates/offers');
                $this->load->view('templates/footer');
              }
             
         function loadheader(){
               $result=$this->products->getCategory();
               $brands=$this->products->getBrands();
                $data=array();  $i = 0;
                foreach($result as $row){
                   $data[$i]=  $row['Name'];
                   $i++;}
                $data1['data']= $data;  
                $brand=array();  $j = 0;
                foreach($brands as $row){
                   $brand[$j]=  $row['Name'];
                   $j++;}
                $data1['brand']= $brand; 
                $this->load->view('templates/header',$data1);
        } 
}
    
            
              
     
            
            
        


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */