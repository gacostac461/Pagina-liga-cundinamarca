<?php
 session_start();
 require_once 'configuracion.php';

 if(isset($_POST['btn-login']))
 {
  $Email = trim($_POST['Email']);
  $contrasena = trim($_POST['Contrasena']);
  
  $password = md5($contrasena);
  
  try
  { 
  
   $stmt = $db_con->prepare("SELECT * FROM usuarios WHERE Email=:Email");
   $stmt->execute(array(":Email"=>$Email));
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $count = $stmt->rowCount();
   
   if($row['Contrasena']==$contrasena){
    
     echo "ok"; // log in
    $_SESSION['user_session'] = $row['uId'];
   
   }
   else{
    
    echo "email o contraseña no existen."; 
   }
    
  }
  catch(PDOException $e){
   echo $e->getMessage();
  }
 }

?>