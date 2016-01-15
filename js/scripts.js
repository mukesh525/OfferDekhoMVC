$(document).ready(function() {
    
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
  
});

$('#products').change(function(){
       var r=$('#products').val();
       $.ajax({ 
            type: "POST", 
            url:BASE_URL+"/admin/getProductImage/"+r, 
            success: function(data){
                 // alert('<img src="'+BASE_URL+"images/"+data+'">');
                 $('#image1').html('<img src="'+BASE_URL+"images/"+data+'">')
                }
            });
        });
        
$('#imageslider').change(function(){
       var r=$('#imageslider').val();
        //alert(r);
       $.ajax({ 
            type: "POST", 
            url:BASE_URL+"/admin/getSliderImage/"+r, 
            success: function(data){
                // alert('<img src="'+BASE_URL+"images/"+data+'">');
                 $('#image11').html('<img style="width: 50%;margin-bottom: 3%;margin-left: -11%;s" src="'+BASE_URL+"images/"+data+'">')
                }
            });
        });        