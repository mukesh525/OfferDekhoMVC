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
 <style type="text/css">
.tg  {margin-top: 2%;width: 100%;margin-left: -4%;border-collapse: collapse;border-spacing: 0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-baqh{text-align:center;vertical-align:top;width: 40%;padding-top: 5%}
.tg .tg-yw4l{vertical-align:top}
.form-control1 {width: 55%;margin-left: 3%;margin-bottom: 2%;padding: .375rem .75rem;font-size: 1rem; line-height: 1.5;color: #55595c;
background-color: #fff;background-image: none;border: .0625rem solid #ccc;border-radius: .25rem;}
.form-control2 {width:48%;margin-left: -4%;margin-bottom: 2%;padding: .375rem .75rem;font-size: 1rem; line-height: 1.5;color: #55595c;
background-color: #fff;background-image: none;border: .0625rem solid #ccc;border-radius: .25rem;}
</style>
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
  <!--/col-->
        <div class="container">
    
         
     <table class="tg">
      
     <tr>
        <th  rowspan="2">
            <div style="width: 54%;margin-top: 25%;" id="sidebar" role="navigation">
            <ul class="nav nav-pills nav-stacked" >
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/login');?>">Brand/Category</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/register');?>">Add Admin</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/addProduct');?>">Add Product</a></li>
                <li class="nav-item"><a class="nav-link" href="">Delete Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/logout');?>">Logout</a></li>
               
               </ul>
           </div>
          </th>
         
    <th class="tg-baqh">
        <div class="row">
            <div style="width: 50%;background: #9999ff;margin-left: 24%;">
                <legend><font size="5" color="white">Add Brand</font></legend>
            </div> 
        <?php 
        $attributes = array("class" => "form-horizontal", "id" => "employeeform", "name" => "employeeform");
        echo form_open("admin/AddBrand", $attributes);?>
        <fieldset>
            
            <div style="float: center">
             <div>
                    <input style="width: 50%;margin-left: 24%;" id="brand_name" name="brand_name" placeholder="Brand Name" type="text" class="form-control"  value="<?php echo set_value('brand_name'); ?>" />
             <br/>   <span class="text-danger"><?php echo form_error('brand_name'); ?></span>
            </div>
                   <?php if(isset($berror)){?>
                <div style=" margin-left: 24%; width: 50%;align: center;">
                <font size="3" color="red">  <p><strong>Oops!!</strong> Something Went wrong!!</p></font> 
                </div>
                    
               <?php }?>
                <?php if(isset($bsucess)){?>
                <div style=" margin-left: 21%; width: 56%;align: center;" >
                 <font size="3" color="green"><p><strong>Oh Good!</strong>Brand added sucessfully!!</p></font> 
                </div>
               <?php }?>
                <?php if(isset($bempty)){?>
                <div style=" margin-left: 24%; width: 50%;align: center;" >
                 <font size="3" color="red"><p><strong>Oops!!</strong> Brand Name is Empty!!</p></font> 
                </div>
               <?php }?>
            </div>
            </div>
        <div class="form-group">
                <div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left" >
           <input  id="btn_add" name="btn_add" type="submit" class="btn btn-primary" value="Insert" />
            </div>
            </div>
        </fieldset>
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
        
   </th>
    <th class="tg-baqh">    <div class="row">
            <div style="width: 55%;background: #9999ff;margin-left: 24%;">
                <legend><font size="5" color="white">Delete Brand</font></legend>
            </div> 
        <?php 
        $attributes = array("class" => "form-horizontal", "id" => "employeeform", "name" => "employeeform");
        echo form_open("admin/DeleteBrand", $attributes);?>
        <fieldset>
            
            <div style="float: center">
                <div>
                 <?php $attributes = 'class = "form-control1" id = "brand"';
                echo form_dropdown('brand',$brand,set_value('brand'),$attributes);?>
                <span class="text-danger"><?php echo form_error('brand'); ?></span>
                
            </div>
                  <?php if(isset($bderror)){?>
                <div style=" margin-left: 24%; width: 55%;align: center;">
                <font size="3" color="red">  <p><strong>Oops!!</strong> Something Went wrong!!</p></font> 
                </div>
                    
               <?php }?>
                <?php if(isset($bdsucess)){?>
                <div style=" margin-left: 21%; width: 58%;align: center;" >
                 <font size="3" color="green"><p><strong>Oh Good!</strong>Brand Deleted Sucessfully!!</p></font> 
                </div>
               <?php }?>
                 <?php if(isset($bdempty)){?>
                <div style=" margin-left: 24%; width: 55%;align: center;" >
                 <font size="3" color="red"><p><strong>Oops!!</strong> Brand Name is Empty!!</p></font> 
                </div>
               <?php }?>
            </div>
            </div>
        <div class="form-group">
                <div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left" >
           <input  id="btn_add" name="btn_delete" type="submit" class="btn btn-primary" value="Delete" />
            </div>
            </div>
        </fieldset>
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
        </th>
  </tr>
  <tr>
    <td class="tg-baqh">   <div class="row">
            <div style="width: 50%;background: #9999ff;margin-left: 24%;">
                <legend><font size="5" color="white">Add Category</font></legend>
            </div> 
        <?php 
        $attributes = array("class" => "form-horizontal", "id" => "employeeform", "name" => "employeeform");
        echo form_open("admin/AddCategory", $attributes);?>
        <fieldset>
            
            <div style="float: center">
             <div>
                 <input style="width: 50%;margin-left: 25%;" id="brand_name" name="category_name" placeholder="Category Name" type="text" class="form-control"  value="<?php echo set_value('employeeno'); ?>" 
             <br/>   <span class="text-danger"><?php echo form_error('category_name'); ?></span>
            </div>
                   <?php if(isset($error)){?>
                <div style=" margin-left: 24%; width: 55%;align: center;">
                <font size="3" color="red">  <p><strong>Oops!!</strong> Something Went wrong!!</p></font> 
                </div>
                    
               <?php }?>
                <?php if(isset($sucess)){?>
                <div style=" margin-left: 21%; width: 56%;align: center;" >
                 <font size="3" color="green"><p><strong>Oh Good!</strong>Category added sucessfully!!</p></font> 
                </div>
               <?php }?>
                <?php if(isset($cempty)){?>
                <div style=" margin-left: 24%; width: 55%;align: center;" >
                 <font size="3" color="red"><p><strong>Oops!!</strong> Category Name is Empty!!</p></font> 
                </div>
               <?php }?>
            </div>
            </div>
        <div class="form-group">
                <div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left" >
                    <input  style="margin-top: 0%;"id="btn_add" name="btn_add" type="submit" class="btn btn-primary" value="Insert" />
            </div>
            </div>
        </fieldset>
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
        </td>
    <td class="tg-baqh">   <div class="row">
            <div style="width: 50%;background: #9999ff;margin-left: 24%;">
                <legend><font size="5" color="white">Delete Category</font></legend>
            </div> 
        <?php 
        $attributes = array("class" => "form-horizontal", "id" => "employeeform", "name" => "employeeform");
        echo form_open("admin/DeleteCategory", $attributes);?>
        <fieldset>
            
            <div style="float: center">
              <div style="float: center">
                <div>
                 <?php $attributes = 'class = "form-control2" id = "category"';
              echo form_dropdown('category',$category,set_value('category'),$attributes);?>
                <span class="text-danger"><?php echo form_error('brand'); ?></span>
               </div>
                   <?php if(isset($caerror)){?>
                <div style=" margin-left: 24%; width: 50%;align: center;">
                <font size="3" color="red">  <p><strong>Oops!!</strong> Something Went wrong!!</p></font> 
                </div>
                    
               <?php }?>
                <?php if(isset($casucess)){?>
                <div style=" margin-left: 21%; width: 56%;align: center;" >
                 <font size="3" color="green"><p><strong>Oh Good!</strong>Category Deleted sucessfully!!</p></font> 
                </div>
               <?php }?>
                <?php if(isset($caempty)){?>
                <div style=" margin-left: 24%; width: 52%;align: center;" >
                 <font size="3" color="red"><p><strong>Oops!!</strong> Category Name is Empty!!</p></font> 
                </div>
               <?php }?>
            </div>
            </div>
        <div class="form-group">
                <div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left" >
           <input  id="btn_add" name="btn_add" type="submit" class="btn btn-primary" value="Delete" />
            </div>
            </div>
        </fieldset>
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
        </td>
  </tr>
</table>  
                   
</div>


<!-- Modal ->
    <!--scripts loaded here-->
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    
    <script src="js/scripts.js"></script>
  </body>
</html>