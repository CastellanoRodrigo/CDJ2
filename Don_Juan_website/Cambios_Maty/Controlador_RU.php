<?php
if (!empty($_POST["registro"])) {
    if (empty($_POST["usuario"]) or empty($_POST["contraseña"]) or empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["perfil"])){
        echo '<div class="Alerta">Uno de los campos esta vacio</div>';
    } else {
        $usuario=$_POST["usuario"];
        $contraseña=$_POST["contraseña"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $perfil=$_POST["perfil"];
        $sql=$conexion->query("insert into usuarios(usuario,password,nombre,apellido,tipo_usuario) values('$usuario','$contraseña',' $nombre','$apellido','$perfil')");
        if ($sql==1){
            echo'Usuario registrado';
        } else{
            echo'El usuario no se ha podido registar';
        }
    }
}

?>