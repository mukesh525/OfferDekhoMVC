<table class="tg" style="margin-top: 2%;width:83%;height:100%;margin-left: 0%;float: right;">
  <tr>
        
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
                <span class="text-danger"><?php echo form_error('category'); ?></span>
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
