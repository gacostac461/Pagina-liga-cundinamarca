<?php

 require_once 'configuracion.php';

 if($_POST)
 {
  $usuario = $_POST['nombre'];
  $email = $_POST['Email'];
  $contrasena = $_POST['Contrasena'];
 
  
  try
  { 
  
   $stmt = $db_con->prepare("SELECT * FROM usuarios WHERE email=:Email");
   $stmt->execute(array(":Email"=>$email));
   $count = $stmt->rowCount();
   
   if($count==0){
    
   $stmt = $db_con->prepare("INSERT INTO usuarios(nombre,Email,Contrasena) VALUES(:nombre, :Email, :Contrasena)");
   $stmt->bindParam(":nombre",$usuario);
   $stmt->bindParam(":Email",$email);
   $stmt->bindParam(":Contrasena",$contrasena);
  
     
    if($stmt->execute())
    {
     echo "registrado";
    }
    else
    {
     echo "No se puede ejecutar la consulta!";
    }
   
   }
   else{
    
    echo "1"; 
   }
    
  }
  catch(PDOException $e){
       echo $e->getMessage();
  }
 }

?>