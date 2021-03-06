<html>
<head>
<meta charset="utf-8">
<title>OfferDekho Admin Login</title>
<link rel="shortcut icon" href="<?=base_url()?>images/logo1.png">
<style type="text/css">
body {
background-color: #f4f4f4;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 1.5em;
}
a { text-decoration: none; }
h1 { font-size: 1em; }
h1, p {
margin-bottom: 10px;
}
strong {
font-weight: bold;
}
.uppercase { text-transform: uppercase; }

/* ---------- LOGIN ---------- */
#login {
margin: 50px auto;
width: 300px;
}
form fieldset input[type="text"], input[type="password"] {
background-color: #e5e5e5;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 10px;
width: 280px;
-webkit-appearance:none;
}
form fieldset input[type="submit"] {
background-color: #008dde;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
width: 280px;
margin-top: 8px;
-webkit-appearance:none;
}
form fieldset a {
color: #5a5656;
font-size: 10px;
}
form fieldset a:hover { text-decoration: underline; }
.btn-round {
background-color: #5a5656;
border-radius: 50%;
-moz-border-radius: 50%;
-webkit-border-radius: 50%;
color: #f4f4f4;
display: block;
font-size: 12px;
height: 50px;
line-height: 50px;
margin: 30px 125px;
text-align: center;
text-transform: uppercase;
width: 50px;
}
.facebook-before {
background-color: #0064ab;
border-radius: 3px 0px 0px 3px;
-moz-border-radius: 3px 0px 0px 3px;
-webkit-border-radius: 3px 0px 0px 3px;
color: #f4f4f4;
display: block;
float: left;
height: 50px;
line-height: 50px;
text-align: center;
width: 50px;
}
.facebook {
background-color: #0079ce;
border: none;
border-radius: 0px 3px 3px 0px;
-moz-border-radius: 0px 3px 3px 0px;
-webkit-border-radius: 0px 3px 3px 0px;
color: #f4f4f4;
cursor: pointer;
height: 50px;
text-transform: uppercase;
width: 250px;
}
.twitter-before {
background-color: #189bcb;
border-radius: 3px 0px 0px 3px;
-moz-border-radius: 3px 0px 0px 3px;
-webkit-border-radius: 3px 0px 0px 3px;
color: #f4f4f4;
display: block;
float: left;
height: 50px;
line-height: 50px;
text-align: center;
width: 50px;
}
.twitter {
background-color: #1bb2e9;
border: none;
border-radius: 0px 3px 3px 0px;
-moz-border-radius: 0px 3px 3px 0px;
-webkit-border-radius: 0px 3px 3px 0px;
color: #f4f4f4;
cursor: pointer;
height: 50px;
text-transform: uppercase;
width: 250px;
}
</style>
<link href="<?=base_url()?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?=base_url()?>css/docs.min.css" rel="stylesheet">
<!-- Custom Theme files -->
<!--theme style-->
<link href="<?=base_url()?>css/style.css" rel="stylesheet" type="text/css" media="all" />	
<script src="<?=base_url()?>js/jquery.min.js"></script>

</head>
<body>
<div id="login1">
    <center><h4 style="margin-bottom: 4px;"><strong>Welcome to OfferDekho Admin</strong></h4> </center>
<div class="logo1">
<h1><a  href="<?=base_url()?>">Offer Dekho</a></h1></div>
<center><p class="alert alert-success" role="alert">Please login to continue..</p></center>
<?php echo form_open(base_url()."admin/login"); ?>
<fieldset>
<p><input type="text" required name="l_email" value="<?=set_value('l_email') ?>" onBlur="if(this.value=='')this.value='Email'" onFocus="if(this.value=='Email')this.value='' "></p>
<p><input type="password" required name="l_pass" value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "></p>
<p><input type="submit" name="signin" value="Sign in"></p>
</fieldset>
  <?php echo form_close(); ?> 
</form>
<?php if(isset($error)){?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> Invalid email id or password..!!
			   </div>
<?php }?>
    
</div> <!-- end login -->
</body>
</html>


  