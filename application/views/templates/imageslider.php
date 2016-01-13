<div class="slider">
	  <div class="callbacks_container">
	     <ul class="rslides" id="slider">
                 
	    <?php foreach($result1 as $key => $row)  {?>
	         <li>
                 
                           <div class="banner1" style="background-image: url(<?=base_url()?>/images/<?php echo $row['image'] ?>);" >				  
					  <div class="banner-info">
					  <h3><?php echo $row['name'] ?></h3>
					  <p><?php echo $row['description'] ?></p>
					  </div>
				 </div>
	         </li>
               <?php }?>

              
	      </ul>
  </div>
</div>
