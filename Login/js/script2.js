$('document').ready(function()
{ 
     /* validation */
  $("#login-form").validate({
      rules:
   {
  contrasena: {
   required: true,
   },
   email: {
            required: true,
            email: true
            },
    },
       messages:
    {
            contrasena:{
                      required: "porfavor ponga su contrasena"
                     },
            email: "porfavor ponga su email",
       },
    submitHandler: submitForm 
       });  
    /* validation */
    
    /* login submit */
    function submitForm()
    {  
   var data = $("#login-form").serialize();
    
   $.ajax({
    
   type : 'POST',
   url  : 'loginp.php',
   data : data,
   beforeSend: function()
   { 
    $("#error").fadeOut();
    $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
   },
   success :  function(response)
      {      
     if(response=="ok"){
         
      $("#btn-login").html('<img src="btn-ajax-loader.gif" /> &nbsp; Signing In ...');
      setTimeout(' window.location.href = "home.php"; ',4000);
     }
     else{
         
      $("#error").fadeIn(1000, function(){      
    $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
           $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
         });
     }
     }
   });
    return false;
  }
    /* login submit */
});