<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>USUARIOS</title>
</head>
<body>
   <div class="head">      
        <div class="logo">
            <img src="img/Gafa.jpg"></i>
        </div>

        <nav class="navbar">
            <a href="Parcela.php">Inicio</a>
            <a href="Consultas.php">Consulta</a>
            <a href="Usuarios.php">Usuarios</a>
            <a href="#">Salir</a>
        </nav>
   </div>

   <header id="Portada_US">
       <h1 id="TituloPrincipal">USUARIOS</h1>
   </header>
   <div class="">
        <section class="content sau fondo_US">
            <?php
            include("Conexion.php");
            include("Controlador_RU.php");
            ?>
            <div class="box-container">
            <div class="box-container">
                <div class="box_US">
                    <h2 class="title_US">Registrar</h2>
                    <div>
                        <Label>Usuario</Label>
                        <input type="text" name="usuario">
                    </div>
                    <div>
                        <Label>Contraseña</Label>
                        <input type="text" name="contraseña">
                    </div>
                    <div>
                        <Label>Nombre</Label>
                        <input type="text" name="nombre">
                    </div>
                    <div>
                        <Label>Apellido</Label>
                        <input type="text" name="apellido">
                    </div>
                    <div>
                        <Label>Perfil</Label>
                        <input type="text" name="perfil">
                    </div>
                    <div class="navbar_US">                  
                        <input class="btn_Reg" type="submit" value="Limpiar" name="limpiar">
                        <input class="btn_Reg" type="submit" value="Registrar" name="registro">
                    </div>
                </div>
            </div>
            <div class="box-container">
                <div class="box_US">
                    <h2 class="title_US">Consultar</h2>
                    <div>
                        <Label>Usuario</Label>
                        <input type="text" name="usuario">
                    </div>
                    <div>
                        <Label>Contraseña</Label>
                        <input type="text" name="contraseña">
                    </div>
                    <div>
                        <Label>Nombre</Label>
                        <input type="text" name="nombre">
                    </div>
                    <div>
                        <Label>Apellido</Label>
                        <input type="text" name="apellido">
                    </div>
                    <div>
                        <Label>Perfil</Label>
                        <input type="text" name="perfil">
                    </div>
                    <div class="navbar_US">                      
                        <input class="btn_Con" type="submit" value="Limpiar" name="limpiar2">
                        <input class="btn_Con" type="submit" value="Consultar" name="consultar">
                    </div>
                </div>
            </div>
            <div class="box-container">
                <div class="box_US">
                    <h2 class="title_US">Modificar</h2>
                    <div>
                        <Label>Usuario</Label>
                        <input type="text" name="usuario">
                    </div>
                    <div>
                        <Label>Contraseña</Label>
                        <input type="text" name="contraseña">
                    </div>
                    <div>
                        <Label>Nombre</Label>
                        <input type="text" name="nombre">
                    </div>
                    <div>
                        <Label>Apellido</Label>
                        <input type="text" name="apellido">
                    </div>
                    <div>
                        <Label>Perfil</Label>
                        <input type="text" name="perfil">
                    </div>
                    <div class="navbar_US">                   
                        <input class="btn_Mod" type="submit" value="Cargar" name="limpiar3">
                        <input class="btn_Mod" type="submit" value="Modificar" name="modificar">
                    </div>
                </div>
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