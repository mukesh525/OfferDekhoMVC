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
 
<div class="header-top">
	 <div class="header-bottom">			
				<div class="logo">
					<h1><a href="">Offer Dekho</a></h1>					
				</div>
			 <!---->		 
			 <div class="top-nav">
				<ul class="memenu skyblue"><li class="showhide" style="overflow: hidden; display: none;">
                                        <span class="title">MENU</span><span class="icon1"></span>
                                        <span class="icon2"></span></li><li class="active"><a href="index.php">Home</a></li>
					<li class="grid"><a href="#">Products</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Type</h4>
									<ul>
                                                                          <?php foreach($data as $key => $value) {?>
                                                                            <li><a href="<?=base_url()?>/welcome/getdetail/<?php echo $value?>"><?php echo $value;?></a></li>
                                                                              <?php }?>
									</ul>
                                                                        
								</div>
								<div class="col1 me-one">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="product.php">Levis</a></li>
										<li><a href="product.php">Reebook</a></li>
										<li><a href="product.php">Havells</a></li>
										<li><a href="product.php">Puma</a></li>
										<li><a href="product.php">Lee</a></li>
										<li><a href="product.php">Nike</a></li>
										
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