<?php echo form_open(base_url()."admin/login"); ?>
    <div class="bs-example">
        <div class="col-md-2">
            <label class="sr-only" for="email">Email     :</label>
             <input type="text" class="form-control" name="l_email" placeholder="Email" value="<?=set_value('l_email') ?>">
        </div>
        <div class="col-md-2">
            <label class="sr-only" for="password">Password:</label>
            <input type="password" class="form-control" name="l_pass" placeholder="Password" value="">
        </div>
        <button type="submit" class="btn btn-default" name="signin" value="Sign in">Sign in</button>
    </div>
    <?php echo form_close(); ?> 
