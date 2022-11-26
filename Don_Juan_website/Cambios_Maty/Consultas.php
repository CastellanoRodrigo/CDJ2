<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
  </head>

<title>CONSULTAS</title>
<body>
   <div class="head">      
        <div class="logo">
            <img src="img/Gafa.jpg"></i>
        </div>

        <nav class="navbar">
            <a href="Parcela.php">Inicio</a>
            <a href="Consulta.php">Consulta</a>
            <a href="Usuarios.php">Usuarios</a>
            <a href="#">Salir</a>
        </nav>
   </div>

   <header id="Portada_CS">
       <h1 id="TituloPrincipal">CONSULTAS</h1>
   </header>
   <div class="">
        <section class="content_CS sau fondo_CS">
            <?php
            include("Conexion.php");
            include("Controlador_RU.php");
            ?>
            
            <div class="box-container">
                <div class="box_CS">
                    <h2 class="title">Reportes</h2>
                    <div class="div_img"></div>
                    <img src="">
                </div>
            </div>
        </section>
    </div>

    <div class="contact contentPIE"> 
        <nav class="navbarPIE">
            <a href="Parcela.php">Inicio</a>
            <a href="Consultas.php">Consulta</a>
            <a href="Usuarios.php">Usuarios</a>
        </nav>
        <div>
            <a href="QuienesSomos.php" class="titlePIE">Quienes somos</a>
        </div>  
    </div>
    
</body>
</html>