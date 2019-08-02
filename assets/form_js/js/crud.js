// JavaScript Document

$(document).ready(function(){
 
 /* Data Insert Starts Here */
 $(document).on('submit', '#emp-SaveForm', function() {
   
    $.post("IRM_New_Referal_create.php", $(this).serialize())
        .done(function(data){
   $("#dis").fadeOut();
   $("#dis").fadeIn('slow', function(){
     $("#dis").html('<div class="alert alert-info">'+data+'</div>');
        $("#emp-SaveForm")[0].reset();
       }); 
   });   
      return false;
    });
 /* Data Insert Ends Here */

});