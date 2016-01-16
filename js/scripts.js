$(document).ready(function() {
    
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
  
});


$('#navigation li').click(function() {
    // alert("selected");
    $('#navigation li').removeClass('selected');
    $(this).addClass('selected');
});





$('#products').change(function(){
       var r=$('#products').val();
      // alert(r);
       $.ajax({ 
            type: "POST", 
            url:BASE_URL+"/admin/getProductImage/"+r, 
            success: function(data){
                 if($.trim(data)!='empty'){
                   $("#image8").show();
                  // alert(data);
                   $('#image8').html('<img src="'+BASE_URL+"images/"+data+'">')
                }
                else{
                     $("#image8").hide();
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
                  $('#image11').html('<img style="width:100%;margin-bottom: 3%;margin-left:0%;" src="'+BASE_URL+"images/"+data+'">')
               }
                else{
                     $("#image11").hide();
                }   }
            });
        });        