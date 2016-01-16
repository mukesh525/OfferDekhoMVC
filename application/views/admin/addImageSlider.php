<div style="margin-top: 2%;width:83%;height:100%;margin-left: 0%;float: right;">

               <div class="col-md-6 col-md-offset-3" style="width:25%;
    margin-left: 6%;    margin-top: 5%;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Add ImageSlider</h4>
            </div>
            <div class="panel-body">
                <?php $attributes = array("name" => "imagesliderform");
               echo form_open_multipart('admin/add_ImageSlider');?>
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input class="form-control" name="name" placeholder="Product Name" type="text" value="<?php echo set_value('name'); ?>" />
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                </div>
             </div>
            <div class="form-group">
                 <label for="image">Product Image </label>
                <input class="form-control" id="image" type="file" name="image" value="image" <?php echo set_value('image');?>/>
               <span class="text-danger"><?php echo form_error('image'); ?></span>
            </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input class="form-control" name="description" placeholder="Description" type="text" value="<?php echo set_value('description');?>"/>
                    <span class="text-danger"><?php echo form_error('description'); ?></span>
                </div>
               <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-default">Add Slider</button>
                    <button name="cancel" type="reset" class="btn btn-default">Cancel</button>
                </div>
                <?php echo form_close(); ?>
                <?php echo $this->session->flashdata('verify_msg'); ?>
                <?php if(isset($pisucess)){?>
                <div style=" margin-left: 21%; width: 58%;align: center;" >
                 <font size="3" color="green"><p><strong>Good!</strong>Image Slider Added Sucessfully!!</p></font> 
                </div>
               <?php }?>
              <?php if(isset($pierror)){?>
                <div style=" margin-left: 21%; width: 58%;align: center;" >
                 <font size="3" color="green"><p><strong>Good!</strong>Some error Occured try again!!</p></font> 
                </div>
               <?php }?>
            </div>
        </div>
     

                   
<div class="col-md-6 col-md-offset-3" style="margin-top: 5%;margin-left: 16%;margin-bottom: 5%;width: 44%;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Delete Image Slider</h4>
            </div>
            <div class="panel-body">
                <?php $attributes = array("name" => "imagesliderform");
               echo form_open_multipart('admin/delete_SliderImage');?>
                <div class="form-group">
                   <label for="imageslider">ImageSlider</label>
                    <?php $attributes = 'class = "form-control2" id = "imageslider" style="margin-left: 2%;"';
                   echo form_dropdown('imageslider',$imageslider,set_value('imageslider'),$attributes);?>
                      <span class="text-danger"><?php echo form_error('imageslider'); ?></span>
                </div>
                <div id="image11" style="margin-left: 18%;"></div>
                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-default">Delete Slider Image</button>
                    <button name="cancel" type="reset" class="btn btn-default">Cancel</button>
                </div>
                <?php echo form_close(); ?>
                <?php echo $this->session->flashdata('verify_msg'); ?>
                <?php if(isset($dipsucess)){?>
                <div style=" margin-left: 21%; width: 58%;align: center;" >
                 <font size="3" color="green"><p><strong>Good!</strong>ImageSlider Deleted Sucessfully!!</p></font> 
                </div>
               <?php }?>
              <?php if(isset($diperror)){?>
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
    <script src=<?php echo site_url("js/scripts.js")?>></script>
  </body>
</html>
