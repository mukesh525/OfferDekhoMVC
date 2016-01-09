<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OfferDekho Admin</title>
    <meta name="description" content="A admin dashboard theme that will get you started with Bootstrap 4." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body >
    <nav class="navbar navbar-fixed-top navbar-dark bg-primary">
    <button class="navbar-toggler hidden-sm-up pull-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        ☰
    </button>
    <a class="navbar-brand" href="#">OfferDekho Admin</a>
    <div class="collapse navbar-toggleable-xs" id="collapsingNavbar">
        <ul class="nav navbar-nav pull-right">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> <?php echo "Welcome ".$this->session->userdata('username');?> !</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#myAlert" data-toggle="collapse"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="" data-target="#myModal" data-toggle="modal"></a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid" id="main">
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-md-3 col-lg-2 sidebar-offcanvas" style="margin-top: 23px" id="sidebar" role="navigation">
            <ul class="nav nav-pills nav-stacked" >
                <li class="nav-item"><a class="nav-link" href="#">Add Category</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Add Brand</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Add Product</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Add Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="">Delete Category</a></li>
                <li class="nav-item"><a class="nav-link" href="">Delete Brand</a></li>
                <li class="nav-item"><a class="nav-link" href="">Delete Product</a></li>
                <li class="nav-item"><a class="nav-link" href="">Delete Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/logout');?>">Logout</a></li>
               
            </ul>
        </div>
        <!--/col-->
        <div class="container">
    <div class="row">
        <div class="col-sm-offset-3 col-lg-6 col-sm-6 well" style="margin-top: 75px;margin-left: 12%;margin-top: 8%;width: 37%;    margin-left: 2%;">
        <legend>Add Brand</legend>
        <?php 
        $attributes = array("class" => "form-horizontal", "id" => "employeeform", "name" => "employeeform");
        echo form_open("admin/AddBrand", $attributes);?>
        <fieldset>
            
            <div class="row colbox">
            
            <div class="col-lg-4 col-sm-4">
                <label for="brand" class="control-label">Brand Name</label>
            </div>
                <div class="col-lg-8 col-sm-8"style="margin-top: -2%;">
                <input id="brand_name" name="brand_name" placeholder="Brand Name" type="text" class="form-control"  value="<?php echo set_value('employeeno'); ?>" />
                <span class="text-danger"><?php echo form_error('category_name'); ?></span>
            </div>
                   <?php if(isset($berror)){?>
                <div class="alert alert-danger" role="alert" style="margin-left: 32%;; margin-top: 6%;background-color: #fff; border-color: #fff;color: #a94442;">
              <strong>Oh snap!</strong> Brand Already Exists..!!
			   </div>
               <?php }?>
                <?php if(isset($bsucess)){?>
                <div class="alert alert-danger" role="alert" style="margin-left: 18%;; margin-top: 6%;background-color: #fff; border-color: #fff;color: #5FA942;">
              <strong>Oh Good!</strong> Brand added sucessfully!!
			   </div>
               <?php }?>
                <?php if(isset($bempty)){?>
                <div class="alert alert-danger" role="alert" style="margin-left: 18%;; margin-top: 6%;background-color: #fff; border-color: #fff;color: #a94442;">
              <strong>Oops!!</strong> Brand Name is Empty!!
			   </div>
               <?php }?>
            </div>
            </div>
            
            </div>
        </div>
            
            
            <div class="form-group">
                <div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left" >
                    <input style="margin-top: -47%;
                           color: #fff;
                           background-color: #0275d8;
                           border-color: #0275d8;
                            margin-left: -3%;"
                      id="btn_add" name="btn_add" type="submit" class="btn btn-primary" value="Insert" />
            </div>
            </div>
        </fieldset>
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
        </div>
          <div class="col-sm-offset-3 col-lg-6 col-sm-6 well" style="width: 34%; margin-left: 62%;margin-top: -28%;">
        <legend>Delete Brand</legend>
      <?php 
        $attributes = array("class" => "form-horizontal", "id" => "employeeform", "name" => "employeeform");
        echo form_open("admin/DeleteBrand", $attributes);?>
        <fieldset>
            
            
            
            <div class="col-lg-4 col-sm-4">
                <label for="Brand Name" class="control-label">Brand Name</label>
            </div>
           <div class="col-lg-8 col-sm-8"><?php
                $attributes = 'class = "form-control" id = "brand"';
                echo form_dropdown('brand',$brand,set_value('brand'),$attributes);?>
                <span class="text-danger"><?php echo form_error('brand'); ?></span>
                
            </div>
                 <?php if(isset($bderror)){?>
                <div class="alert alert-danger" role="alert" style="margin-left: 32%;; margin-top: 6%;background-color: #fff; border-color: #fff;color: #a94442;">
              <strong>Oh snap!</strong> An Error Occurred ..!!
			   </div>
               <?php }?>
                <?php if(isset($bdsucess)){?>
                <div class="alert alert-danger" role="alert" style="margin-left: 18%;; margin-top: 6%;background-color: #fff; border-color: #fff;color: #5FA942;">
              <strong>Oh Good!</strong> Brand Deleted sucessfully!!
			   </div>
               <?php }?>
                <?php if(isset($bdempty)){?>
                <div class="alert alert-danger" role="alert" style="margin-left: 18%;; margin-top: 6%;background-color: #fff; border-color: #fff;color: #a94442;">
              <strong>Oops!!</strong> Select Brand to Delete!!
			   </div>
               <?php }?>
            </div>
            </div>
            </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left" style="margin-top: -17%;
    margin-left: 75%;">
                <input id="btn_add" name="btn_add" type="submit" class="btn btn-primary" value="Delete" />
            </div>
            </div>
        </fieldset>
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
        </div>
<div class="col-sm-offset-3 col-lg-6 col-sm-6 well" style="    float: right;
    margin-top: -12%;
    width: 37%;">
        <legend>Delete Category</legend>
       <?php 
        $attributes = array("class" => "form-horizontal", "id" => "employeeform", "name" => "employeeform");
        echo form_open("admin/DeleteCategory", $attributes);?>
        <fieldset>
            
            <div class="col-lg-4 col-sm-4">
                <label for="Category Name" class="control-label">Category Name</label>
            </div>
                <div class="col-lg-8 col-sm-8" style="width:55.666667%"><?php
                $attributes = 'class = "form-control" id = "category"';
                echo form_dropdown('category',$category,set_value('category'),$attributes);?>
                <span class="text-danger"><?php echo form_error('category'); ?></span>
            </div>
                  <?php if(isset($bderror)){?>
                <div class="alert alert-danger" role="alert" style="margin-left: 32%;; margin-top: 6%;background-color: #fff; border-color: #fff;color: #a94442;">
              <strong>Oh snap!</strong> An Error Occurred ..!!
			   </div>
               <?php }?>
                <?php if(isset($bdsucess)){?>
                <div class="alert alert-danger" role="alert" style="margin-left: 18%; margin-top: 6%;background-color: #fff; border-color: #fff;color: #5FA942;">
              <strong>Oh Good!</strong> Brand Deleted sucessfully!!
			   </div>
               <?php }?>
                <?php if(isset($bdempty)){?>
                <div class="alert alert-danger" role="alert" style="margin-left: 18%; margin-top: 6%;background-color: #fff; border-color: #fff;color: #a94442;">
              <strong>Oops!!</strong> Select Brand to Delete!!
			   </div>
               <?php }?>
            </div>
        <input style="float: right;    margin-top: -1%;
   margin-right: 17%;" id="btn_add" name="btn_add" type="submit" class="btn btn-primary" value="Delete" />
           
        </fieldset>
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
        </div>
          <div class="col-sm-offset-3 col-lg-6 col-sm-6 well" style="
    width: 37%;
    margin-left: 18%;
    margin-top: -13%;
    float: left;;">
        <legend>Add Category</legend>
      <?php 
        $attributes = array("class" => "form-horizontal", "id" => "employeeform", "name" => "employeeform");
        echo form_open("admin/AddCategory", $attributes);?>
        <fieldset>
            
            <div class="col-lg-4 col-sm-4">
                <label for="Category Name" class="control-label">Category Name</label>
            </div>
                  <div class="col-lg-8 col-sm-8">
                <input id="brand_name" name="category_name" placeholder="Category Name" type="text" class="form-control"  value="<?php echo set_value('employeeno'); ?>" />
                <span class="text-danger"><?php echo form_error('category_name'); ?></span>
            </div>
                <?php if(isset($error)){?>
                <div class="alert alert-danger" role="alert" style="margin-left: 84px; margin-top: 43px;background-color: #fff; border-color: #fff;color: #a94442;">
              <strong>Oh snap!</strong> Category Already Exists..!!
			   </div>
               <?php }?>
                <?php if(isset($sucess)){?>
                <div class="alert alert-danger" role="alert" style="margin-left: 61px;; margin-top: 43px; background-color: #fff; border-color: #fff;color: #5FA942;">
              <strong>Oh Good!</strong> Category added sucessfully!!
			   </div>
               <?php }?>
                 <?php if(isset($cempty)){?>
                <div class="alert alert-danger" role="alert" style="margin-left: 18%;; margin-top: 6%;background-color: #fff; border-color: #fff;color: #a94442;">
              <strong>Oops!!</strong> Category Name is Empty!!
			   </div>
               <?php }?>
            </div>
        <input style="margin-left: 33%;margin-top: -2%;
    color: #fff;
    float: left;
    background-color: #0275d8;
    border-color: #0275d8;" id="btn_add" name="btn_add" type="submit" class="btn btn-primary" value="Insert" />
            
      
        </fieldset>
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
        </div>
    </div>
            
</div>


<!--        <div class="col-md-9 col-lg-10 main" style="margin-top: 50px;">

            toggle sidebar button
            <p class="hidden-md-up">
                <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
            </p>

            <h1 class="display-1 hidden-xs-down">
           
            </h1>
            <p class="lead"> <?php echo "Welcome ".$this->session->userdata('username');?></p>

    
</div>-->
        </div>
        <!--/main col-->
    </div>

</div>


<!-- Modal ->
    <!--scripts loaded here-->
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    
    <script src="js/scripts.js"></script>
  </body>
</html>