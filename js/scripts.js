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


   $(function() {
                $("#datepicker").datepicker({
                    minDate : 0,
                    dateFormat: 'yy-mm-dd'
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
        $('#hotoffers').change(function(){
       var r=$('#hotoffers').val();
        //alert(r);
       $.ajax({ 
            type: "POST", 
            url:BASE_URL+"/admin/getHotOffersImage/"+r, 
            success: function(data){
                 if($.trim(data)!='empty'){
                   $("#image13").show();
                  $('#image13').html('<img style="width:16%;margin-bottom: 3%;margin-left:17%;" src="'+BASE_URL+"images/"+data+'">')
               }
                else{
                     $("#image13").hide();
                }   }
            });
        });    