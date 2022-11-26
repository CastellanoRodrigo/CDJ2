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
<title>Detalles campañas Siembra</title>
<!-- Body -->
<body>
  <!--llamar controlador-->
<?php
include "modelo/conexion.php";
// include "Controlador/controlador_login.php";
?>
<center>
<h2>Asignar detalles proyecto de Siembra:</h2>
<br>
<br>
<br>
<br>

</center>
<form method="post">
 <center>
 <table>
 <tr>
  <td style="height: 47px; width: 274px;">
   Nombre del proyecto:</td>
  <td style="width: 366px; height: 47px"> 
	   &nbsp;<select  name="cmbNombre" style="width: 155px; height: 28px;">
  
        <option name="cmbnombre" value="0">Seleccionar</option>

	   <?php
	      $mysqli = new mysqli('localhost', 'root', '', 'sistema_dj');		 
	 
          $query = $mysqli -> query ("SELECT * FROM ProyectoSiembra ");
  
          while ($valores = mysqli_fetch_array($query)) {
  
            echo '<option value="'.$valores['Id_ProyectoSiembra'].'">'.$valores['NombreProyecto'].'</option>';
  
          }
  
        ?>
	   	   
	 </td>
 </tr>
 <tr>
  <td style="width: 274px">
   Fecha de inicio (yyyy/MM/dd):</td>
  <td style="width: 366px">
   
	   <input name="txtFechaInicio" type="text" class="auto-style1" style="height: 30px; width: 127px" />
	 </td>
 </tr>
 <tr>
  <td style="width: 274px">
   ID del detalle de la campaña:</td>
   <td style="width: 366px">
    
		 <input name="txtIdDetalle" type="text" style="height: 30px; width: 127px" />
	 </td>
 </tr>
 <tr>
  <td style="width: 274px; height: 69px;">
   Cultivo:</td>
   <td style="width: 366px; height: 69px;">
     		 
		 <?php
	     $mysqli = new mysqli('localhost', 'root', '', 'sistema_dj');		 
		 ?>	 
		 
		<select  name="cmbCultivo" style="width: 155px; height: 28px;">
  
        <option name="cmbCultivos" value="0">Seleccionar</option>
  
        <?php
  
          $query = $mysqli -> query ("SELECT * FROM Siembra ");
  
          while ($valores = mysqli_fetch_array($query)) {
  
            echo '<option value="'.$valores['Id_Cultivo'].'">'.$valores['NombreCultivo'].'</option>';
  
          }
  
        ?>
	  
	 </td>
 </tr>
 <tr>
  <td style="width: 274px">
   Inversion inicial:</td>
   <td style="width: 366px">
     <form method="post">				        
	   <input name="txtInversion" type="text" class="auto-style1" style="height: 30px; width: 127px" />                               
	 </td>
 </tr>
 <tr>
  <td style="width: 274px">
   Cantidad Hectareas utilizadas:</td>
  <td style="width: 366px">
   
	   <input name="txtHectareas" type="text" class="auto-style1" style="height: 30px; width: 127px" />
	 </td>
 </tr>
<tr>
  <td style="width: 274px">
   Rinde Especulado:</td>
  <td style="width: 366px">
   
	   <input name="txtRinde" type="text" class="auto-style1" style="height: 30px; width: 127px" />
	 </td>
 </tr>
 <tr>
  <td style="width: 274px">
   Fecha de cierre aproximado (yyyy/MM/dd):</td>
  <td style="width: 366px">
   
	   <input name="txtFechaCierre" type="text" class="auto-style1" style="height: 30px; width: 127px" />
	 </td>
 </tr>
 <tr>
  <td style="width: 274px">
   &nbsp;
   </td>
   <td style="width: 366px">
   </td>
 </tr>
 <tr>
  <td style="width: 274px">
   <input type="submit" value="Cargar detalle">
   <input  type="reset" value="Cancelar" style="width: 83px"></td>
 </tr>
</table>
</form>
</center>

<?php
    // Controla si hubo ingreso de datos
   if (!empty ($_POST))  
   {  // Conecta a la base de datos
      $cn= new mysqli("localhost" , "root" ,"" , "sistema_dj" );
     // captura datos ingresados
     $iddetalle=$_POST['txtIdDetalle'];
     $nombre=$_POST['cmbNombre']; 
     $fechainicio=$_POST['txtFechaInicio'];
     $fechacierre=$_POST['txtFechaCierre'];
     $cantHectareas=$_POST['txtHectareas'];
     $cultivo=$_POST['cmbCultivo']; 
     $rinde=$_POST['txtRinde'];
     $inversion=$_POST['txtInversion'];	 
	 		
     //Id_DetalleSiembra	Id_ProyectoSiembra	FechaInicio	FechaCierre	CantidadHectareas	Id_Cultivo	RindeEspeculado	InversionInicial
		
     // Cadena que controla si hay una campaña creada con ese Id
     $sql="select  * from detalleinicialsiembra  where Id_DetalleSiembra= $iddetalle";
     // Ejecuta sentencia en sql
      $re=$cn->query($sql);
      // controla cantidad de registros que existen en la tabla
      $c=$re->num_rows; 
      if ( $c==0)
     {  //cadena que agrega el regsitro osea la fila a la tabla CampañaHacienda
        $cad = "INSERT INTO detalleinicialsiembra(Id_DetalleSiembra, Id_ProyectoSiembra, FechaInicio, FechaCierre, CantidadHectareas, Id_Cultivo, RindeEspeculado, InversionInicial) VALUES ('$iddetalle','$nombre','$fechainicio','$fechacierre','$cantHectareas','$cultivo','$rinde','$inversion')";
                           
        // Ejecuta sentencia INSERT
        $result = $cn->query($cad);
       // muestra mensaje que fue dado de alta
       echo "El proyecto fue dado de alta con exito";
    }
    else 
    {
      // mensaje que ya existe por lo tanto no fue dado de alta
      echo "Ya existe un proyecto con ese ID";
      //. mysql_error().":". mysql_error()."<br>";
     }
     
  // cierra la conexion   
 $cn->close();
}
?>

<?php #Llammo a pie 
include('./template/pie.php');?>