<?php
#llamamos el inicio de sesion
session_start();
#verifico que se haya presionado el boton(name:btningresar) "iniciar sesion"
if(!empty($_POST["btningresar"])) {
    if (!empty($_POST["usuario"]) and (!empty($_POST["password"]))) {
      #almacenamos usuario y contraseña
      $usuario=$_POST["usuario"];
      $password=$_POST["password"];
      $sql=$conexion->query(" select * from usuarios where usuario='$usuario' and password='$password' ");
     
      if ($datos=$sql->fetch_object()) {
        $_SESSION["id"]=$datos->id;
        $_SESSION["nombre"]=$datos->nombre;
        $_SESSION["apellido"]=$datos->apellido;
        $_SESSION["tipo_usuario"]=$datos->tipo_usuario;
        /* header("location: inicio.php"); */  
        header("location: inicio.php");     
       }else{
        echo "<div class='alert alert-danger'>Acceso denegado</div>";
    }
       
    } else {
       echo "Campos incompletos o vacios";
    }
    
}


?>