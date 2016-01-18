<div style="margin-top: 2%;width:83%;height:100%;margin-left: 0%;float: right;">

               <div class="col-md-6 col-md-offset-3" style="width:28%;
    margin-left: 6%;    margin-top: 5%;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Add Hot Offers</h4>
            </div>
            <div class="panel-body">
                <?php $attributes = array("name" => "imagesliderform");
               echo form_open_multipart('admin/add_HotOffers');?>
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
                    <label for="discount">Discount</label>
                    <input class="form-control" name="discount" placeholder="Discount" type="text" value="<?php echo set_value('discount');?>"/>
                    <span class="text-danger"><?php echo form_error('discount'); ?></span>
                </div>
              <div class="form-group">
                    <label for="location">Location</label>
                    <input class="form-control" name="location" placeholder="Location" type="text" value="<?php echo set_value('location');?>"/>
                    <span class="text-danger"><?php echo form_error('location'); ?></span>
                </div>
               <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-default">Add Hot Offer</button>
                    <button name="cancel" type="reset" class="btn btn-default">Cancel</button>
                </div>
                <?php echo form_close(); ?>
                <?php echo $this->session->flashdata('verify_msg'); ?>
                <?php if(isset($hosucess)){?>
                <div style=" margin-left: 0%; width: 100%;align: center;" >
                 <font size="3" color="green"><p><strong>Good!</strong>Hot Offer Added Sucessfully!!</p></font> 
                </div>
               <?php }?>
              <?php if(isset($hoerror)){?>
                <div style=" margin-left:0%; width:100%;align: center;" >
                 <font size="3" color="green"><p><strong>Good!</strong>Some error Occured try again!!</p></font> 
                </div>
               <?php }?>
            </div>
        </div>
     

                   
<div class="col-md-6 col-md-offset-3" style="margin-top: 5%;margin-left: 16%;margin-bottom: 5%;width: 44%;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Delete Hot Offfer</h4>
            </div>
            <div class="panel-body">
                <?php $attributes = array("name" => "hotoffersform");
               echo form_open_multipart('admin/delete_HotOfferImage');?>
                <div class="form-group">
                   <label for="imageslider">HotOffers</label>
                    <?php $attributes = 'class = "form-control2" id = "hotoffers" style="margin-left: 2%;"';
                   echo form_dropdown('hotoffers',$hotoffers,set_value('hotoffers'),$attributes);?>
                      <span class="text-danger"><?php echo form_error('hotoffers'); ?></span>
                </div>
                <div id="image13" style="margin-left: 0%;"></div>
                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-default">Delete Hot Offer</button>
                    <button name="cancel" type="reset" class="btn btn-default">Cancel</button>
                </div>
                <?php echo form_close(); ?>
                <?php echo $this->session->flashdata('verify_msg'); ?>
                <?php if(isset($hfsucess)){?>
                <div style=" margin-left: 21%; width: 62%;align: center;" >
                 <font size="3" color="green"><p><strong>Good!</strong>HotOffer Deleted Sucessfully!!</p></font> 
                </div>
               <?php }?>
              <?php if(isset($hferror)){?>
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
