        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="Css/estilos.css">
                <title>Login GAFA</title>
            </head>
            <body>
                <section class="home">
                    <div class="BarraNavegacion">
                        <h1> G.A.F.A </h1>
                        <div>
                            <img src="imagenes/Gafa.jpg">
                        </div>     
                    </div>
                    <!-- Envio de datos seguro -->
                    <div class="login-content">
                    <!-- Formulario-metodo de envio-->
                        <form method="post" action="">
                            <?php
                            include "modelo/conexion.php";
                            include "Controlador/controlador_login.php";
                            ?>
                            <div class="cover">
                                <div class="Content">
                                    <h1>INICIAR SESION</h1>
                                    <div class="input-div one">
                                        <div class="i">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="div">
                                            <h5>Usuario</h5>
                                            <input id="usuario" type="text" class="input" required="required"  name="usuario">
                                        </div>
                                    </div>
                                    <div class="input-div pass">
                                        <div class="i">
                                            <i class="fas fa-lock"></i>
                                        </div>
                                        <div class="div">
                                            <h5>Contraseña</h5>
                                            <input id="input" type="password" required="required" class="input" name="password">
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="fas fa-eve verPassword" onclick="vista()" id="verPassword"></div>
                                    </div>
                                    <div>
                                        <input name="btningresar" class="BotonIniciar"  type="submit" value="INICIAR SESION"> 
                                        <!-- no sirve <button name="btningresar" class="BotonIniciar" class="btn" > INICIAR SESION </button> -->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </body>
        </html>