<body>
<div class="container" style="margin-top: 2%;width:83%;height:100%;margin-left: 0%;float: right;">
       <div class="row">
               <div class="col-md-6 col-md-offset-3" style="margin-top:5%;
    margin-left: 5%;width: 32%;float: left;">
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
                  <div class="col-md-6 col-md-offset-3" style="float:right;margin-top: 5%;
    margin-left:10%">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Delete Product</h4>
            </div>
            <div class="panel-body">
                <?php $attributes = array("name" => "productform");
               echo form_open_multipart('admin/delete_product');?>
                <div class="form-group">
                   <label for="products">Product</label>
                    <?php $attributes = 'class = "form-control2" id = "products" style="margin-left: 2%;"';
                 echo form_dropdown('products',$products,set_value('products'),$attributes);?>
                      <span class="text-danger"><?php echo form_error('products'); ?></span>
                </div>
<!--                <div id="image1" style="margin-left: 18%;"></div>-->
                <div id="image8" style="margin-left: 18%;"></div>
                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-default">Delete Product</button>
                    <button name="cancel" type="reset" class="btn btn-default">Cancel</button>
                </div>
                <?php echo form_close(); ?>
                <?php echo $this->session->flashdata('verify_msg'); ?>
                <?php if(isset($dpsucess)){?>
                <div style=" margin-left: 21%; width: 58%;align: center;" >
                 <font size="3" color="green"><p><strong>Good!</strong>Product Deleted Sucessfully!!</p></font> 
                </div>
               <?php }?>
              <?php if(isset($dperror)){?>
                <div style=" margin-left: 21%; width: 58%;align: center;" >
                 <font size="3" color="green"><p><strong>Good!</strong>Some error Occured try again!!</p></font> 
                </div>
               <?php }?>
            </div>
        </div>
    </div>  

                   
</div>
        </div>

    <script src=<?php echo site_url("js/scripts.js")?>></script>
  </body>
</html>
