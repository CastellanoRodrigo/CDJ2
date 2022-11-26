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
				<h1>Proyectos</h1>
				
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

    <title>Carga de Campaña</title>
 <!-- Body -->
<body>
<section class="home">
        <div class="BarraNavegacion">
            <img src="imagenes/Gafa.jpg">
            <nav>
                <a href="inicio.php"> Inicio </a>             
                <a href="Consultas.php"> Consultas </a>
                <a href="Usuarios.php"> Usuarios </a>
            </nav>
            <div>
                <button class="BotonSalir"> Salir </button>
            </div>
        </div>
    <section>
        <div class="Espacio"></div>
        <div class="Cover2">
            <div class="ImagenParcela">
                <h1> CARGA DE CAMPAÑA </h1>
            </div>
        </div>
    </section>
    <section>
        <div class="contenedor">
		    <div class="widget-1">
			    <h3> AGRICULTURA </h3>
                
                    <table>
                        <tr>
                            <td style="height: 47px; width: 264px;">
                                Nombre de la campaña:
                            </td>
                            <td style="width: 366px; height: 47px">
	                            <input name="txtNombre" style="width: 127px; height: 30px" type="text" />
	                        </td>
                        </tr>
                        <tr>
                            <td style="width: 264px">
                                ID de la campaña:
                            </td>
                            <td style="width: 366px">
	                            <input name="txtId" type="text" class="auto-style1" style="height: 30px; width: 127px" />
	                        </td>
                        </tr>
                        <tr>
                            <td style="width: 264px; height: 69px;">
                                Parcelas seleccionada:
                            </td>
                            <td style="width: 366px; height: 69px;">
     		 
		                        <?php
	                            $mysqli = new mysqli('localhost', 'root', '', 'sistema_dj');		 
		                        ?>	 
		 
		                        <select  name="cmbparcela" style="width: 120px; height: 28px;">
  
                                <option name="cmbParcelas" value="0">Seleccionar</option>
  
                                <?php
  
                                    $query = $mysqli -> query ("SELECT * FROM Parcela ");
                        
                                    while ($valores = mysqli_fetch_array($query)) {
  
                                        echo '<option value="'.$valores['Id_Parcela'].'">'.$valores['Id_Parcela'].'</option>';
  
                                    }
  
                                ?>
	  
	                        </td>
                        </tr>
                        <tr>
                            <td style="width: 264px; height: 69px;">
                                Tipo de siembra:
                            </td>
                            <td style="width: 366px; height: 69px;">
     		 
		                        <?php
	                            $mysqli = new mysqli('localhost', 'root', '', 'sistema_dj');		 
		                        ?>	 
		 
		                        <select  name="cmbparcela" style="width: 120px; height: 28px;">
  
                                <option name="cmbParcelas" value="0">Seleccionar</option>
  
                                <?php
                                    /* Query */
                                ?>
                            </td>  
                        </tr>
                        <tr>
                            <td style="width: 264px; height: 69px;">
                                Fecha de inicio:
                            </td>
                            <td style="width: 366px">
	                            <input name="txtFechaInicio" type="text" class="auto-style1" style="height: 30px; width: 127px" />
	                        </td>
                        </tr>
                        <tr>
                            <td style="width: 264px; height: 69px;">
                                Fecha de fin estimada:
                            </td>
                            <td style="width: 366px">
	                            <input name="txtFechaFin" type="text" class="auto-style1" style="height: 30px; width: 127px" />
	                        </td> 
                        </tr>
                        <tr>
                            <td style="width: 264px; height: 69px;">
                                Capital invertido ($ARS):
                            </td>
                            <td style="width: 366px">
	                            <input name="txtFechaFin" type="text" class="auto-style1" style="height: 30px; width: 127px" />
	                        </td> 
                        </tr>
                        <tr>
                            <td style="width: 264px; height: 69px;">
                                Rendimiento esperado (Tons):
                            </td>
                            <td style="width: 366px">
	                            <input name="txtFechaFin" type="text" class="auto-style1" style="height: 30px; width: 127px" />
	                        </td> 
                        </tr>
                        <tr>
                            <td style="width: 264px">
                                <input  type="reset" value="LIMPIAR" style="width: 83px">
                                <input type="submit" value="CREAR CAMPAÑA">
                            </td>
                        </tr>
                    </table>
                             
		    </div>
		    <div class="widget-2">
			    <h3> GANADERIA </h3>
		    </div>
		    <footer class="footer">
			    <h3> ALQUILER </h3>
		    </footer>
        </div>

    </section>
    <section class="BarraInferior">

<?php #Llammo a pie 
include('./template/pie.php');?>