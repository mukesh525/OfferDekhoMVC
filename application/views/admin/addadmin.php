<div style="margin-top: 2%;width:83%;height:100%;margin-left: 0%;float: right;">
<div class="row">
               <div class="col-md-6 col-md-offset-3" style="margin-top: 5%;margin-left: 8%;width: 29%">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Add Admin</h4>
            </div>
            <div class="panel-body">
                <?php $attributes = array("name" => "addadminform");
                echo form_open("admin/do_register", $attributes);?>
                <div class="form-group">
                    <label for="uname">Name</label>
                    <input class="form-control" name="uname" placeholder="User Name" type="text" value="<?php echo set_value('uname'); ?>" />
                    <span class="text-danger"><?php echo form_error('uname'); ?></span>
                </div>
               <div class="form-group">
                    <label for="email">Email ID</label>
                    <input class="form-control" name="email" placeholder="Email-ID" type="text" value="<?php echo set_value('email'); ?>" />
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
                
               
            </div>
            <div class="form-group">
                 <label for="gender">Gender  </label>
                <input type="radio" name="gender" value="male" <?php echo set_radio('gender', 'male'); ?>/>Male
                <input type="radio" name="gender" value="female" <?php echo set_radio('gender', 'female'); ?>/>Female
                <span class="text-danger"><?php echo form_error('gender'); ?></span>
            </div>

                <div class="form-group">
                    <label for="subject">Password</label>
                    <input class="form-control" name="password" placeholder="Password" type="password" />
                    <span class="text-danger"><?php echo form_error('password'); ?></span>
                </div>

                <div class="form-group">
                    <label for="subject">Confirm Password</label>
                    <input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" />
                    <span class="text-danger"><?php echo form_error('cpassword'); ?></span>
                </div>

                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-default">Add Admin</button>
                    <button name="cancel" type="reset" class="btn btn-default">Cancel</button>
                </div>
                <?php echo form_close(); ?>
                <?php echo $this->session->flashdata('verify_msg'); ?>
                <?php if(isset($sucess)){?>
                <div style=" margin-left: 21%; width: 58%;align: center;" >
                 <font size="3" color="green"><p><strong>Good!</strong>Admin Added Sucessfully!!</p></font> 
                </div>
               <?php }?>
            </div>
        </div>
    
    
    
    
      <div class="col-md-6 col-md-offset-3" style="float:right;margin-top: 5%;
    margin-left:10%">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Delete Admin</h4>
            </div>
            <div class="panel-body">
                <?php $attributes = array("name" => "adminform");
               echo form_open_multipart('admin/delete_admin');?>
                <div class="form-group">
                   <label for="admin">Admin</label>
                    <?php $attributes = 'class = "form-control2" id = "admin" style="margin-left: 2%;"';
                 echo form_dropdown('admin',$admin,set_value('admin'),$attributes);?>
                      <span class="text-danger"><?php echo form_error('admin'); ?></span>
                </div>
                <div id="image1" style="margin-left: 18%;"></div>
                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-default">Delete Admin</button>
                    <button name="cancel" type="reset" class="btn btn-default">Cancel</button>
                </div>
                <?php echo form_close(); ?>
                <?php echo $this->session->flashdata('verify_msg'); ?>
                <?php if(isset($adsucess)){?>
                <div style=" margin-left: 21%; width: 58%;align: center;" >
                 <font size="3" color="green"><p><strong>Good!</strong>Admin Deleted Sucessfully!!</p></font> 
                </div>
               <?php }?>
              <?php if(isset($aderror)){?>
                <div style=" margin-left: 21%; width: 58%;align: center;" >
                 <font size="3" color="green"><p><strong>Good!</strong>Some error Occured try again!!</p></font> 
                </div>
               <?php }?>
            </div>
        </div>
    </div>  
    </div>  
</div>


<!-- Modal ->
    <!--scripts loaded here-->
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    
    
  </body>
</html>