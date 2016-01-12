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
.tg  {margin-top: 2%;width: 100%;margin-left: -4%;border-collapse:collapse;border: 1px solid black;;border-spacing: 0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-width:1px;border: 1px solid black;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;width: 1%;border: 1px solid black;padding:10px 5px;border-width:1px;overflow:hidden;word-break:normal;}
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
    
         <div style="width: 54%;margin-top: 16%;float: left" id="sidebar" role="navigation">
            <ul class="nav nav-pills nav-stacked" >
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/login');?>">Brand/Category</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/register');?>">Add Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/addProduct');?>">Add Product</a></li>
                <li class="nav-item"><a class="nav-link" href="">Delete Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/logout');?>">Logout</a></li>
               
               </ul>
           </div>
            
           <div class="row">
               <div class="col-md-6 col-md-offset-3" style="margin-top: -26%;;
    margin-left: 25%">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Add Product</h4>
            </div>
            <div class="panel-body">
                <?php $attributes = array("name" => "productform");
               echo form_open_multipart('admin/add_product');?>
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input class="form-control" name="name" placeholder="Product Name" type="text" value="<?php echo set_value('name'); ?>" />
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                </div>
               <div class="form-group">
                    <label for="discount">Discount</label>
                    <input class="form-control" name="discount" placeholder="Discount" type="text" value="<?php echo set_value('discount'); ?>" />
                    <span class="text-danger"><?php echo form_error('discount'); ?></span>
                </div>
                
               
            </div>
            <div class="form-group">
                 <label for="image">Product Image </label>
                <input class="form-control" id="image" type="file" name="image" value="image" <?php echo set_value('image');?>/>
               <span class="text-danger"><?php echo form_error('image'); ?></span>
            </div>

                <div class="form-group">
                    <label for="location">Location</label>
                    <input class="form-control" name="location" placeholder="Location" type="text" />
                    <span class="text-danger"><?php echo form_error('location'); ?></span>
                </div>

                <div class="form-group">
                   <label for="brand">Brand</label>
                     <?php $attributes = 'class = "form-control1" style="margin-left: 7%" id = "brand"';
                      echo form_dropdown('brand',$brand,set_value('brand'),$attributes);?>
                      <span class="text-danger"><?php echo form_error('brand'); ?></span>
            
                </div>
                <div class="form-group">
                   <label for="category">Category</label>
                     <?php $attributes = 'class = "form-control1" id = "category"';
                      echo form_dropdown('category',$category,set_value('category'),$attributes);?>
                      <span class="text-danger"><?php echo form_error('category'); ?></span>
            
                </div>

                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-default">Add Product</button>
                    <button name="cancel" type="reset" class="btn btn-default">Cancel</button>
                </div>
                <?php echo form_close(); ?>
                <?php echo $this->session->flashdata('verify_msg'); ?>
                <?php if(isset($psucess)){?>
                <div style=" margin-left: 21%; width: 58%;align: center;" >
                 <font size="3" color="green"><p><strong>Good!</strong>Product Added Sucessfully!!</p></font> 
                </div>
               <?php }?>
              <?php if(isset($perror)){?>
                <div style=" margin-left: 21%; width: 58%;align: center;" >
                 <font size="3" color="green"><p><strong>Good!</strong>Some error Occured try again!!</p></font> 
                </div>
               <?php }?>
            </div>
        </div>
    </div>  

                   
</div>


<!-- Modal ->
    <!--scripts loaded here-->
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    
    <script src="js/scripts.js"></script>
  </body>
</html>
