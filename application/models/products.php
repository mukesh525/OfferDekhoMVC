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
     public function getProductsByCategory($category) {

           $query1=$this->db->get_where('category',array('Name'=>$category));
           $result=$query1->result_array();
           $query = $this->db->get_where('products',array('category'=>$result[0]['Id']));
           return $query->result_array();
    }
}
?>

