<head>
<title>Offer Dekho:Get to know about all offer near to your supermarket</title>
<link href="<?=base_url()?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?=base_url()?>css/docs.min.css" rel="stylesheet">
<!-- Custom Theme files -->
<!--theme style-->
<link href="<?=base_url()?>css/style.css" rel="stylesheet" type="text/css" media="all" />	
<script src="<?=base_url()?>js/jquery.min.js"></script>

<!--//theme style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="<?=base_url()?>js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="<?=base_url()?>css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?=base_url()?>js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<link rel="shortcut icon" href="<?=base_url()?>images/logo1.png">
<!-- /start menu -->
</head>
<script src="<?=base_url()?>js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: false,
      });
    });
  </script>
 
  <div class="header-top" style="margin-bottom: -3px;">
	 <div class="header-bottom">			
			  <div class="logo" >
                                    <div style="width:80px;height:100px ;margin-left:0%;">
                                   <img src="<?=base_url()?>images/logo1.png" class="img-responsive" alt="">
                                    </div>
                           
                                    
				</div>    	
             <div class="logo" style="height: 1px;margin-left: 0%" >
                 <h1 ><a href="<?=base_url()?>">Offers Dekho</a></h1>	
                              </div>
           
             
			 <!---->		 
			 <div class="top-nav">
				<ul class="memenu skyblue"><li class="showhide" style="overflow: hidden; display: none;">
                                        <span class="title">MENU</span><span class="icon1"></span>
                                        <span class="icon2"></span></li><li class="active"><a href="<?=base_url()?>">Home</a></li>
					<li class="grid"><a href="#">Products</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Type</h4>
									<ul>
                                                                          <?php foreach($data as $key => $value) {?>
                                                                            <li><a href="<?=base_url()?>GetType/<?php echo $value?>"><?php echo $value;?></a></li>
                                                                              <?php }?>
									</ul>
                                                                        
								</div>
								<div class="col1 me-one">
									<h4>Popular Brands</h4>
									<ul>
										 <?php foreach($brand as $key => $value) {?>
										 <li><a href="<?=base_url()?>GetBrands/<?php echo $value?>"><?php echo $value;?></a></li>
                                                                              <?php }?>
										
									</ul>	
								</div>
							</div>
						</div>
					</li>	
					<li class="grid"><a href="typo.php">Typo</a></li>
					<li class="grid"><a href="contact.php">Contact</a></li>					
				</ul>				
			 </div>
			
		
			 <div class="clearfix"> </div>
			 <!---->			 
			 </div>
			<div class="clearfix"> </div>
</div>