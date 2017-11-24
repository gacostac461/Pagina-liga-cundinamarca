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
<<<<<<< HEAD
            user_name: "Ponga su nombre de usuario",
            password:{
                      required: "Pon tu contraseña",
                      minlength: "Tu contraseña debe tener al menos 8 caracteres"
                     },
            user_email: "Pon una direccion de correo valida",
   cpassword:{
      required: "Reescribe tu contraseña",
      equalTo: "La contraseña no cincide"
=======
            user_name: "please enter user name",
            password:{
                      required: "please provide a password",
                      minlength: "password at least have 8 characters"
                     },
            user_email: "please enter a valid email address",
   cpassword:{
      required: "please retype your password",
      equalTo: "password doesn't match !"
>>>>>>> 21b1562cbe732b118bf311be7ef70de4024b3b8b
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
<<<<<<< HEAD
     $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; enviando ...');
=======
     $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
>>>>>>> 21b1562cbe732b118bf311be7ef70de4024b3b8b
    },
    success :  function(data)
         {      
        if(data==1){
         
         $("#error").fadeIn(1000, function(){
           
           
<<<<<<< HEAD
           $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; ¡Lo sentimos una cuenta ya usa ese email !</div>');
           
           $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Crea una cuenta');
=======
           $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');
           
           $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
>>>>>>> 21b1562cbe732b118bf311be7ef70de4024b3b8b
          
         });
                    
        }
        else if(data=="registered")
        {
         
<<<<<<< HEAD
         $("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Registrandose...');
         setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("../index.php"); }); ',5000);
=======
         $("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Signing Up ...');
         setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("success.php"); }); ',5000);
>>>>>>> 21b1562cbe732b118bf311be7ef70de4024b3b8b
         
        }
        else{
          
         $("#error").fadeIn(1000, function(){
           
      $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
           
<<<<<<< HEAD
         $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Crear cuenta');
=======
         $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
>>>>>>> 21b1562cbe732b118bf311be7ef70de4024b3b8b
          
         });
           
        }
         }
    });
    return false;
  }
<<<<<<< HEAD
   
});


=======
    /* form submit */ 

});


>>>>>>> 21b1562cbe732b118bf311be7ef70de4024b3b8b
