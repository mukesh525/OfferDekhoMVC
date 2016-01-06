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
        
        print_r($category);
       
    }
}