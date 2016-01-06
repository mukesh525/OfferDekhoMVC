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
}
?>

