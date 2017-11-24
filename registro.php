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
<<<<<<< HEAD
     echo "No se puede ejecutar la consulta!";
=======
     echo "Query could not execute !";
>>>>>>> 21b1562cbe732b118bf311be7ef70de4024b3b8b
    }
   
   }
   else{
    
<<<<<<< HEAD
    echo "1"; 
=======
    echo "1"; //  not available
>>>>>>> 21b1562cbe732b118bf311be7ef70de4024b3b8b
   }
    
  }
  catch(PDOException $e){
       echo $e->getMessage();
  }
 }

?>