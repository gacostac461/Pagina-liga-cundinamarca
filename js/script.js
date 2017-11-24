// JavaScript Document

$('document').ready(function()
{ 
     /* validation */
  $("#register-form").validate({
      rules:
   {
   user_name: {
      required: true,
   minlength: 3
   },
   password: {
   required: true,
   minlength: 8,
   maxlength: 15
   },
   cpassword: {
   required: true,
   equalTo: '#password'
   },
   user_email: {
            required: true,
            email: true
            },
    },
       messages:
    {
            user_name: "Ponga su nombre de usuario",
            password:{
                      required: "Pon tu contraseña",
                      minlength: "Tu contraseña debe tener al menos 8 caracteres"
                     },
            user_email: "Pon una direccion de correo valida",
   cpassword:{
      required: "Reescribe tu contraseña",
      equalTo: "La contraseña no cincide"
       }
       },
    submitHandler: submitForm 
       });  
    /* validation */
    
    /* form submit */
    function submitForm()
    {  
    var data = $("#register-form").serialize();
    
    $.ajax({
    
    type : 'POST',
    url  : 'registro.php',
    data : data,
    beforeSend: function()
    { 
     $("#error").fadeOut();
     $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; enviando ...');
    },
    success :  function(data)
         {      
        if(data==1){
         
         $("#error").fadeIn(1000, function(){
           
           
           $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; ¡Lo sentimos una cuenta ya usa ese email !</div>');
           
           $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Crea una cuenta');
          
         });
                    
        }
        else if(data=="registered")
        {
         
         $("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Registrandose...');
         setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("../index.php"); }); ',5000);
         
        }
        else{
          
         $("#error").fadeIn(1000, function(){
           
      $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
           
         $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Crear cuenta');
          
         });
           
        }
         }
    });
    return false;
  }
   
});


