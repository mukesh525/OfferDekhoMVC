<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

     public function Welcome()
    {
         parent::__construct();
         $this->load->helper('url');
         $this->load->model('products');

    }
    
    
	
	public function index()
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
                $this->load->view('templates/header',$data1);
                $this->load->view('templates/imageslider');
                $this->load->view('templates/containers');
                $this->load->view('templates/offers');
                $this->load->view('templates/footer');
       }
            
            
            
            
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */