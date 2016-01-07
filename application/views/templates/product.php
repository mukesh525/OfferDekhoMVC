



<!--header//-->
<div class="product-model">	 
	 <div class="container">
			<ol class="breadcrumb">
		  <li><a href="<?=base_url()?>">Home</a></li>
		  <li class="active">Products</li>
		 </ol>
			<h2>Our Products</h2>	
                      
               
		 <div class="col-md-11 product-model-sec">
                       <?php foreach($selections as $key => $row) {?>    
					<a href="single.php"><div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="<?=base_url()?>images/<?php echo $row['image'] ?>" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>Quick View</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $row['name'] ?></h4>								
								<span class="item_price"><!-Price of that product -></span>
								<div class="ofr">
								  <p class="pric1"><del><?php echo $row['location'] ?></del></p>
						          <p class="disc">[<?php echo $row['discount'] ?>% Off]</p>
								</div>
								<input type="text" class="item_quantity" value="1" />
								<input type="button" class="item_add items" value="ADD">
								<div class="clearfix"> </div>
							</div>												
							
						</div>
					</div>
               
				<?php } ?>	
			</div>
                           
                      </center>
						 
	      </div>
		</div>
</div>
<!---->

<!---->
</body>
</html>