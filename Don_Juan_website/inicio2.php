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
	
	<link rel="stylesheet" href="./menu-lateral/estilos.css">
	
</head>
<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰ </label>
		</div>
			<div class="logo">
				<h1>Proyectos</h1>
				
			<!--Usuario Logueado-->
			<div class="button">
				<div class=".text-light">
            <?php
           echo $_SESSION["nombre"]." ".$_SESSION["apellido"];
            ?>
			</div>
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
 <div class="bd-example mb0" style="height: 15vh"></div>
        <nav class="navbar navbar-dark bg-dark navbar-expand-md navbar-light fixed-top">
	<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="#">Añadir proyecto hacienda</a>
			<a href="#">Añadir proyecto siembra</a>
			<a href="#">Añadir detalles hacienda</a>
			<a href="#">Añadir detalles siembra</a>
			<a href="#">Modificar</a>
			<a href="#">Finalizar</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
<div style="text-align:center;">
	<table border="1" style="margin: 0 auto;">

	
		<h1>INFORMACION DE LAS PARCELAS</h1><br>
        <div class="containerMap">
        <!--division  por parcelas -->
        <map name="mapa">
        <img src="./imagenes/DonJuanSRL1.png" usemap="#mapa">
            <area id="area1" class="area" shape="rectangle" coords="494, 690 333, 626" href="parcela1.php" >
            <area id="area2" shape="rectangle" coords="333, 626 497, 478" class="area" href="parcela2.php" >
            <area id="area" shape="rectangle" coords="494, 527 657, 367" class="area" href="parcela3.php" ">
            <area id="area" shape="rectangle" coords="497, 478 334, 365" class="area" href="parcela4.php" >
            <area id="area" shape="rectangle" coords="170, 481 331, 690" class="area" href="parcela5.php" >
            <area id="area" shape="rectangle" coords="334, 365 170, 481" class="area" href="parcela6.php" >
            <area id="area" shape="rectangle" coords="426, 365 667, 251" class="area" href="parcela7.php" >
            <area id="area" shape="rectangle" coords="426, 365 342, 247" class="area" href="parcela8.php" >
            <area id="area" shape="rectangle" coords="342, 247 429, 38" class="area" href="parcela9.php" >
            <area id="area" shape="rectangle" coords="429, 38 542, 250" class="area" href="parcela10.php" >
            <area id="area1" class="area" shape="rectangle" coords="347, 38 257, 163"  href="parcela11.php" >
</map>
        </div>
        </div>
    
	</table>
    
    
</div>
</div>
<div>

</div>
</body>
</html>