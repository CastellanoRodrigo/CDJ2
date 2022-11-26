<?php
session_start();
#controlamos el ingreso, si trata de acceder manualmente por url 
#lo redirige al login
if (empty($_SESSION["id"])) {
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menù Lateral con Css</title>
	<link rel="stylesheet" href="./menu-lateral/estilos.css">
	
</head>
<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰ </label>
		</div>
			<div class="logo">
				<h1>Usuarios</h1>
				
			<!--Usuario Logueado-->
			
			<div class=".text-light" style="
    padding-top: 0px;
    padding-right: 2px;
    padding-left: 2px;
    border-top-width: 2px;
    border-right-width: 2px;
    border-bottom-width: 2px;
    margin-top: 2px;
    margin-bottom: 2px;
">
            <?php
           echo $_SESSION["nombre"]." ".$_SESSION["apellido"];
            ?>
			</div>
    
				
			</div>
			<nav class="menu">
			<a href="./menu-lateral/index.php">Inicio</a>
				<a href="./Nosotros.php">Nosotros</a>
				<a href="./Usuarios.php">Usuarios</a>
				<a href="">Contacto</a>
			</nav>
		</div>
	</header>
    
    <section>
        <div>IMAGEN NUESTRA</div>
    </section>
    <section class="BarraInferior">

    <?php #Llammo a pie 
include('./template/pie.php');?>