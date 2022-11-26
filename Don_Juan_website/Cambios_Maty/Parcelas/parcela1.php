

<?php #Llammo a cabecera, incluye el archivo cabecera.php desde template
include('./Template/Cabecera.php');?>

<title>Parcela 1 detalles</title>
<!-- Body -->
<body>
  <!--llamar controlador-->
<?php
include "modelo/conexion.php";
// include "Controlador/controlador_login.php";
?>
	<center>
	<h2>Muestra detalles proyectos de la parcela 1</h2>
	</center>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<center><table border=2 width=400><tr>
	<td style= "text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold; width: 108px;">Id_Detalle</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 79px;">Id_Proyecto</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 79px;">NombreProyecto</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;">FechaInicio</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;">Fechacierre</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 86px;">Hectareas</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 86px;">Cabezas</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 97px;">Categoria</td>
	<td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 162px;">InversionInicial</td>
    <td style= "text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold; width: 162px;">Parcela</td>   
	</tr>
	</center>
	   <?php
	   	// conexion con la bd
	   		
	$host = "localhost";
	$usuario = "root";
	$clave = "";
	$base = "sistema_dj";

	$cn=new mysqli($host, $usuario, $clave, $base);

	$registros=$cn->query("SELECT d.Id_DetalleHacienda, d.Id_ProyectoHacienda, p.NombreProyecto, d.FechaInicio, d.FechaCierre,
						d.CantidadHectareas, d.CantidadCabezas, d.Categoria, d.InversionInicial, p.Id_Parcela 
						FROM detalleinicialhacienda d
						INNER JOIN proyectohacienda p ON d.Id_ProyectoHacienda = p.Id_ProyectoHacienda
						WHERE p.Id_Parcela='1'");	

	 while ($myrow=$registros->fetch_row()) //mientras haya registros muestra la informacion
     {
      	    
   	   echo "<tr>
   	   		 <td>$myrow[0]</td>
   	   		 <td>$myrow[1]</td>
   	   		 <td>$myrow[2]</td>
   	   		 <td>$myrow[3]</td>
   	   		 <td>$myrow[4]</td>
   	   		 <td>$myrow[5]</td>
   	   		 <td>$myrow[6]</td>
   	   		 <td>$myrow[7]</td>
   	   		 <td>$myrow[8]</td>
   	   		 <td>$myrow[9]</td>
   	   		 </tr>";
   	    
     } 
     if (mysqli_num_rows($registros) <= 0) {
       echo 'No hay proyecto de HACIENDA en esta parcela'; //si no se encuentra hay mensaje 
     }
	 //Cierra conexion
    $cn->close();

    ?>
	
	<center> <table border=2 width=400>
    <tr><td style= text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>Id_Detalle</td>
	<td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;> Id_Proyecto</td>
	<td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;>NombreProyecto</td>
	<td style= text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>FechaInicio</td>
	<td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;>FechaCierre</td>
    <td style= text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>Hectareas</td>
	<td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;>Cultivo </td>
	<td style= text-align:center;font-size:16pt;height:30px;background-color:lightgreen;font-weight:bold>RindeEspeculado</td>
	<td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;>InversionInicial</td>
	<td style= text-align:center;font-size:16pt;background-color:lightgreen;font-weight:bold;>Parcela</td>
	</tr>
	</center>
	
<?php
	 
    $cn= new mysqli("localhost", "root", "", "sistema_dj"); //conexion con base de datos
  	

    $registros= $cn->query("SELECT d.Id_DetalleSiembra, d.Id_ProyectoSiembra, p.NombreProyecto, d.FechaInicio, d.FechaCierre, d.CantidadHectareas, s.NombreCultivo,
 								   d.RindeEspeculado, d.InversionInicial,p.Id_Parcela
  							FROM detalleinicialsiembra d
 						    INNER JOIN proyectosiembra p ON d.Id_ProyectoSiembra = p.Id_ProyectoSiembra
  							INNER JOIN siembra s ON d.Id_Cultivo = s.Id_Cultivo
 						    WHERE p.Id_Parcela='1'");    
    

     while ($myrow=$registros->fetch_row()) //mientras haya registros muestra dia y hora
     {
      	    
   	   echo "<tr>
   	         <td> $myrow[0] </td>
   	         <td> $myrow[1] </td>
   	         <td> $myrow[2] </td>
   	         <td> $myrow[3] </td>
   	         <td> $myrow[4] </td>
   	         <td> $myrow[5] </td>
   	         <td> $myrow[6] </td>
   	         <td> $myrow[7] </td>
   	         <td> $myrow[8] </td>
   	         <td> $myrow[9] </td>
   	         </tr>";
   	    
     } 
     if (mysqli_num_rows($registros) <= 0) {
       echo 'No hay proyecto de SIEMBRA en esta parcela'; //si no hay mensaje
     }
     
	// Cierra conexion
    $cn->close();
 		 	
?>

</body>

<?php #Llammo a pie 
include('./template/pie.php');?>


