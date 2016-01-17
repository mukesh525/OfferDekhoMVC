<div class="offers">
	 <div class="container">
	 <h3>End of Season Sale</h3>
          <?php $result = count($result4); $i=0;while($i<$result){?>
	 <div class="offer-grids">
             <div class="col-md-6 grid-left">
			 <a href="#"><div class="offer-grid1">
				 <div class="ofr-pic">
					 <img src="<?=base_url()?>images/<?php echo $result4[$i]['image']?>" class="img-responsive" alt=""/>
				 </div>
				 <div class="ofr-pic-info">
					 <h4><?php echo $result4[$i]['name']?> <br></h4>
					 <span>UP TO <?php echo $result4[$i]['discount']?>% OFF</span>
					 <p>Shop Now</p>
				 </div>
				 <div class="clearfix"></div>
			 </div></a>
		 </div>
		 <div class="col-md-6 grid-right">
			 <a href="#"><div class="offer-grid2">				 
				 <div class="ofr-pic-info2">
					 <h4>Flat Discount</h4>
					 <span>UP TO <?php echo $result4[$i+1]['discount']?>% OFF</span>
					 <h5><?php echo $result4[$i+1]['name']?></h5>
					 <p>Shop Now</p>
				 </div>
				 <div class="ofr-pic2">
					 <img src="<?=base_url()?>images/<?php echo $result4[$i+1]['image']?>" class="img-responsive" alt=""/>
				 </div>
				 <div class="clearfix"></div>
			 </div></a>
		 </div>
		 <div class="clearfix"></div>
              
	 </div>
             <?php $i=$i+2;};?>
	 </div>
</div>
</div>
