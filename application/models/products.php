<?php

Class Products extends CI_Model {
    
    public function __construct() {
          $this->load->database();
    }
    
    public function getCategory() {
           $query= $this->db->get('category');   
          // echo $query->num_rows();
           return $query->result_array();
    }
    public function getBrands() {
           $query= $this->db->get('brand');   
          // echo $query->num_rows();
           return $query->result_array();
    }
     public function getProductsByType($type) {
           $query1=$this->db->get_where('category',array('Name'=>$type));
           $result=$query1->result_array();
           $query = $this->db->get_where('products',array('category'=>$result[0]['Id']));
           return $query->result_array();
    }
     public function getProductsByBrand($brand) {

           $query1=$this->db->get_where('brand',array('Name'=>$brand));
           $result=$query1->result_array();
           $query = $this->db->get_where('products',array('brand'=>$result[0]['Id']));
           return $query->result_array();
    }
     function addProduct($data) {
          $query=$this->db->insert('products',$data);
          if($query){
          return true;
          } else{
         return false;
        }
        
    }
    
}
?>

