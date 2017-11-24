<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario de registro</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    
<div class="signin-form">

 <div class="container">
     
        
       <form class="form-signin" method="post" id="register-form">
      
        <h2 class="form-signin-heading">Registrarse</h2><hr />
        
        <div id="error">
     
        </div>
        
        <div class="form-group">
        <input type="text" class="form-control" placeholder="nombre" name="nombre" id="nombre" />
        </div>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email" name="Email" id="Email" />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Contrasena" name="Contrasena" id="Contrasena" />
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Rescribe la contrasena" name="Contrasena" id="Contrasena" />
        </div>
      <hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
      <span class="glyphicon glyphicon-log-in"></span> &nbsp; Crear Cuenta
   </button> 
        </div>  
      
      </form>

    </div>
    
</div>
    
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>