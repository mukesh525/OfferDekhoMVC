$(document).ready(function() {
    
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
  
});

$('#products').change(function(){
       var r=$('#products').val();
      // alert(r);
       $.ajax({ 
            type: "POST", 
            url:BASE_URL+"/admin/getProductImage/"+r, 
            success: function(data){
                 if($.trim(data)!='empty'){
                   $("#image1").show();
                   alert('<img src="'+BASE_URL+"images/"+data+'">');
                   $('#image1').html('<img src="'+BASE_URL+"images/"+data+'">')
                }
                else{
                     $("#image1").hide();
                }
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
                 if($.trim(data)!='empty'){
                   $("#image11").show();
                  $('#image11').html('<img style="width: 50%;margin-bottom: 3%;margin-left: -11%;s" src="'+BASE_URL+"images/"+data+'">')
               }
                else{
                     $("#image11").hide();
                }   }
            });
        });        