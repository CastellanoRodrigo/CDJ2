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
<title>Compra Hacienda</title>
<!-- Body -->
<body>

<?php
    // Controla si hubo ingreso de datos
   if (!empty ($_POST))  
   {  // Conecta a la base de datos
      $cn= new mysqli("localhost" , "root" ,"" , "campodonjuan" );
     // captura datos ingresados
     $fecha=$_REQUEST['Fecha'];
     $vendedor=$_REQUEST['Vendedor'];  
     $cantCabezas=$_REQUEST['CantidadCabezas'];
     $kgTotal=$_REQUEST['KgTotal'];
     $kgPromedio=$_REQUEST['KgPromedio'];
     $precioCabeza=$_REQUEST['PrecioPorCabeza'];
     $precioBruto=$_REQUEST['PrecioBruto'];
     $costoTotal=$_REQUEST['CostoTotalCompra'];
         
     
     // Cadena que controla si el articulo existe
    // $sql="select  * from productos  where id= $dato ";
     // Ejecuta sentencia en sql
     // $re=$cn->query($sql);
      // controla cantidad de regsitros
     // $c=$re->num_rows; 
      //if ( $c==0)
     //{  //cadena que agrega el regsitro a la tabla En este caso la tabla HACIENDA poner bn el nombre
        $cad = "INSERT INTO hacienda (Fecha, Vendedor, CantidadCabezas,KgTotal,kgPromedio,PrecioPorCabeza,PrecioBruto,CostoTotalCompra) VALUES ($fecha,$vendedor,$cantCabezas,$kgTotal,$kgPromedio,$precioCabeza,$precioBruto,$costoTotal)";
        // Ejecuta sentencia INSERT
        $result = $cn->query($cad);
       // muestra mensaje
       echo "Compra registrada con éxito";
    //}
        
	 $cn->close();

	}

?>

<table>
 <tr>
  <td style="height: 47px">
   Fecha:</td>
  <td style="width: 366px; height: 47px">
   <form method="post">
	   <input name="txtFecha" style="width: 127px; height: 30px" type="text" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Vendedor:</td>
  <td style="width: 366px">
   <form method="post">
	   <input name="txtVendedor" type="text" class="auto-style1" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Cantidad de Cabezas:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtCantidadCabezas" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Kg Totales:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtKgTotales" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Kg Promedio:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtKgPromedio" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Precio por Cabeza:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtPrecioCabeza" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Precio Bruto:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtPrecioBruto" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   Costo Total de Compra:</td>
   <td style="width: 366px">
     <form method="post">
		 <input name="txtCostoTotal" type="text" style="height: 30px; width: 127px" /></form>
	 </td>
 </tr>
 <tr>
  <td>
   <input type="button" value="Cargar" style="width: 81px">&nbsp;
   <input   type="reset" value="Cancelar" style="width: 83px" ></td>
 </tr>
</table>


<?php #Llammo a pie 
include('./template/pie.php');?>