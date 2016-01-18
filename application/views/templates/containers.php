<div class="items">
	 <div class="container">
		 <div class="items-sec">
                       <?php foreach($result3 as $key => $row) {?>    
			 <div class="col-md-3 feature-grid">
				 <a href="<?=base_url()?>welcome/singleproduct/<?php echo $row['id'] ?>"><img src="<?=base_url()?>images/<?php echo $row['image'] ?>" alt=""/>	
					 <div class="arrival-info">
						 <h4><?php echo $row['name'] ?></h4>
						 <p><?php echo $row['location'] ?></p>
						 <span class="pric1"><del>Rs 18000</del></span>
						 <span class="disc">[<?php echo $row['discount'] ?>% Off]</span>
					 </div>
					 <div class="viw">
						<a href="<?=base_url()?>welcome/singleproduct/<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
					 </div>
				  </a>
			 </div>
                       <?php }?>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>