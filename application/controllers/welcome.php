<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

     public function Welcome() {
         parent::__construct();
         $this->load->helper('url');
         $this->load->model('products');
         $this->loadheader();
        
         }
         public function index(){ 
                $result=$this->products->get_ImageSLiderData();
                $result2=$this->products->get_random_product();
                $result3=$this->products->getHotOffers();
                $result['result1']=$result;
                $result2['result3']=$result2;
                $result3['result4']=$result3;
                
                $this->load->view('templates/imageslider',$result);
                $this->load->view('templates/containers',$result2);
                $this->load->view('templates/offers',$result3);
                $this->load->view('templates/footer');
        }
         function getType($type) {
                $result1=$this->products->getProductsByType($type); 
                if(sizeof($result1) <1) {
                  $this->load->view('templates/emptyproduct');
                 }else{
                  $selection['selections']= $result1;
                  $this->load->view('templates/product',$selection);
                 }$this->load->view('templates/offers');
                  $this->load->view('templates/footer');
             
              }
               function getBrands($brand) {
                $result1=$this->products->getProductsByBrand($brand); 
                 if(sizeof($result1) <1) {
                   $this->load->view('templates/emptyproduct');
                 }else{
                  $selection['selections']= $result1;
                  $this->load->view('templates/product',$selection);
                 }$this->load->view('templates/offers');
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
        
        
        function Admin(){
              $this->load->view('admin/login');
         }
}
    
            
              
     
            
            
        


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */