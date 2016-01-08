<!DOCTYPE html>
<link href="<?=base_url()?>css/style.css" rel="stylesheet" type="text/css" media="all" />	



<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
    
  <div class="top">
   <div>
<a href="<?php echo site_url('admin/logout');?>" style="float: right;">logout</a>
</div>
<div>
<?php echo "Welcome ".$this->session->userdata('username');?>
</div>

</div>
<div class="left">
    LEFT
</div>
<div class="main">
    MAIN
</div>  

</body>
</html>