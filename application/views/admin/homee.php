<!DOCTYPE html>
<link href="<?=base_url()?>css/style.css" rel="stylesheet" type="text/css" media="all" />	



<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
    
  <div class="top">
      <center> <div class="logo2">
              <h1><a  href="<?=base_url()?>">Offer Dekho</a></h1></div></center>
 
<div>

</div>

</div>
<div class="left">
    LEFT
    <div>
<a href="<?php echo site_url('admin/logout');?>" style="float: right;">logout</a>
</div>
</div>
<div class="main">
    MAIN
     <?php echo "Welcome ".$this->session->userdata('username');?>
</div>  

</body>
</html>