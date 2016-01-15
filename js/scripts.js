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