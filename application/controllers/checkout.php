<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkout extends CI_Controller {

     public function Checkout()
    {
         parent::__construct();
         $this->load->helper('url');
         $this->load->model('products');

    }
   function getdetail($category)
    {
                 $this->load->helper('url');       
                $result=$this->products->getCategory();
                $data=array();  $i = 0;
                 foreach($result as $row)
                 {
                   $data[$i]=  $row['Name'];
                   $i++;
                 }
                $data1['data']= $data;
                $selection['selections']= $category;
                $this->load->view('templates/header',$data1);
                $this->load->view('templates/imageslider');
                $this->load->view('templates/checkout',$selection);
                $this->load->view('templates/offers');
                $this->load->view('templates/footer');
               
       
    } 
    
}