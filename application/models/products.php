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
    public function getProductName() {
            $this->db->select('id'); 
            $this->db->select('name'); 
            $this->db->from('products');
            $query = $this->db->get();
            $result = $query->result();
            
             $product_id = array('-SELECT-');
             $product_name = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($product_id , $result[$i]->id);
            array_push($product_name, $result[$i]->name);
        }
        return $category_result = array_combine($product_id,$product_name);
       
    }
  
     public function getImageSlidertName() {
            $this->db->select('id'); 
            $this->db->select('name'); 
            $this->db->from('imageslider');
            $query = $this->db->get();
            $result = $query->result();
            
             $imageslider_id = array('-SELECT-');
             $imageslider_name = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($imageslider_id , $result[$i]->id);
            array_push($imageslider_name, $result[$i]->name);
        }
        return $imageslider_result = array_combine($imageslider_id,$imageslider_name);
       
    }
    
     public function deleteExpireProduct(){
           $SQL='DELETE FROM  `products` WHERE  `valid` < NOW( ) ';
           $query = $this->db->query($SQL);

         if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        } 
       
     }
    
    
    public function getHotOffersName() {
            $this->db->select('id'); 
            $this->db->select('name'); 
            $this->db->from('hotoffers');
            $query = $this->db->get();
            $result = $query->result();
            
             $hotoffers_id = array('-SELECT-');
             $hotoffers_name = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($hotoffers_id , $result[$i]->id);
            array_push($hotoffers_name, $result[$i]->name);
        }
        return $hotoffers_result = array_combine($hotoffers_id,$hotoffers_name);
       
    }
    
    
    function delete_product($id){ 
          $image=$this->getProductImage($id);
          $path="images/".$image;
         if(@unlink($path)) {//echo "Deleted file ";exit();
             }
         else{//echo $path."File can't be deleted";exit();
         }
          $this->db->where('id', $id);
          $this->db->delete('products'); 
        if($this->db->affected_rows()>0){
            return true;
        }
        else{
            return false;
        } 
    }
    
     function delete_imageslider($id){ 
        //  $id = (is_numeric($id) ? (int)$id: 0);
          $image=$this->getSliderImage($id);
        // $path=base_url()."images/".$image;
         $path="images/".$image;
         if(@unlink($path)) {echo "Deleted file ";exit();
             }
         else{echo $path."File can't be deleted";exit();
         }
          $this->db->where('id', $id);
          $this->db->delete('imageslider'); 
        if($this->db->affected_rows()>0){
            return true;
        }
        else{
            return false;
        } 
    }
    
      function delete_hotoffer($id){ 
           $image=$this->gethotoffers($id);
          $path="images/".$image;
         if(@unlink($path)) {//echo "Deleted file ";exit();
             }
         else{//echo $path."File can't be deleted";exit();
         }
          $this->db->where('id', $id);
          $this->db->delete('hotoffers'); 
        if($this->db->affected_rows()>0){
            return true;
        }
        else{
            return false;
        } 
    }
    
   function getProductImage($Id){ 
      
         $int = (is_numeric($Id) ? (int)$Id : 0);
         $this->db->select('image');
         $this->db->where('id', $Id);
         $this->db->from('products');
         return $this->db->get()->row()->image;
    
    }
    function getSliderImage($Id){ 
         $int = (is_numeric($Id) ? (int)$Id : 0);
         $this->db->select('image');
         $this->db->where('id', $Id);
         $this->db->from('imageslider');
         return $this->db->get()->row()->image;
        
    }
    function gethotoffers($Id){ 
         $int = (is_numeric($Id) ? (int)$Id : 0);
         $this->db->select('image');
         $this->db->where('id', $Id);
         $this->db->from('hotoffers');
         return $this->db->get()->row()->image;
        
    }
    function getHotOffersImage($Id){ 
         $int = (is_numeric($Id) ? (int)$Id : 0);
         $this->db->select('image');
         $this->db->where('id', $Id);
         $this->db->from('hotoffers');
         return $this->db->get()->row()->image;
        
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
    
    
     public function getHotOffers1() {
          $query= $this->db->get('hotoffers');   
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
    function addImageSLiderData($data) {
          $query=$this->db->insert('imageslider',$data);
          if($query){
          return true;
          } else{
         return false;
        }
        
    }
    
     function addHotOffersData($data) {
          $query=$this->db->insert('hotoffers',$data);
          if($query){
          return true;
          } else{
         return false;
        }
        
    }
    
    
      function get_ImageSLiderData(){ 
        $this->db->select('id');
        $this->db->select('name');
        $this->db->select('image');
        $this->db->select('description');
        $this->db->from('imageslider');
        $query = $this->db->get();
        //$result = $query->result();

        return  $query->result_array();;
    }
    
    function get_random_product(){
    $this->db->order_by('Id', 'RANDOM');
    $this->db->limit(8);
    $query = $this->db->get('products');
    return $query->result_array();

}
    
}
?>

