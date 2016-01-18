<?php // echo $result->image;exit(); ?>

<div class="product"style="margin-bottom:-11%">
	 <div class="container">				
		 <div class="product-price1">
			 <div class="top-sing">
				  <div class="col-md-7 single-top">	
					 <div class="flexslider">
							  <ul class="slides">
								<li data-thumb="<?=base_url()?>images/<?php echo $result->image ?>">
									<div class="thumb-image"> <img src="<?=base_url()?>images/<?php echo $result->image ?>" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li>
								
							  </ul>
						</div>					 					 
					 <script src="js/imagezoom.js"></script>
						<script defer src="js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>

				 </div>	
			     <div class="col-md-5 single-top-in simpleCart_shelfItem">
					  <div class="single-para ">
						 <h4><?php echo $result->name?> </h4>							
							<h5 class="item_price"><?php echo $result->discount."%"?></h5>							
							<p class="para"><?php echo $result->location ?></p>
<!--							<div class="prdt-info-grid">
								 <ul>
									 <li>- Brand : Fos Lighting</li>
									 <li>- Dimensions : (LXBXH) in cms of...</li>
									 <li>- Color : Brown</li>
									 <li>- Material : Wood</li>
								 </ul>
							</div>-->
							<div class="check">
						   </div>
					 </div>
				 </div>
				 <div class="clearfix"> </div>
			 </div>
	     </div>

	 </div>
</div>
<!---->