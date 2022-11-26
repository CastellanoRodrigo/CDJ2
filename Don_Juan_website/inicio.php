<?php #Llammo a cabecera, incluye el archivo cabecera.php desde template
include('./template/cabecera.php');?>

<title>Inicio</title>
        
        <section>
            <div class="Espacio"></div>
            <div class="Cover2">
                <div class="ImagenParcela">
                    <h1> PARCELAS </h1>
                </div>
            </div>
        </section>
        <div>
        
        

            <div> 
                <button class="btn btn-dark mx-2 mt-2" data-bs-toggle="offcanvas" data-bs-target="#intro">Administrar Parcelas</button> 
                <div class="offcanvas offcanvas-start" id="intro">
                    <div class="offcanvas-header">
                        <div class="offcanvas-title">
                            <button class="btn btn-danger" data-bs-dismiss="offcanvas">Cerrar</button>
                            
                        </div>
                    </div>

                    <div class="offcanvas-body">
                        <button class="btn btn-dark p1">Añadir proyecto de hacienda</button><br>
                        <button class="btn btn-dark">Añadir proyecto de siembra</button><br>
                        <button class="btn btn-dark">Modificar Proyecto</button><br>
                        <button class="btn btn-dark">Finalizar Proyecto</button>

                    </div>
                </div>
                <!-- Onclick= nos lleva al formulario de carga            
                <button class="BotonAñadir" id="open" onclick="location.href='altaProyectoHacienda.php'"> AÑADIR CAMPAÑA DE HACIENDA</button>
                <button class="BotonAñadir2" id="open" onclick="location.href='altaProyectoSiembra.php'"> AÑADIR CAMPAÑA DE SIEMBRA</button>
                 <button class="BotonModificar"> MODIFICAR CAMPAÑA </button>
                <button class="BotonEliminar"> ELIMINAR CAMPAÑA </button> --> 
            </div>
        
            <div>
                <table align="center">
                    <tr>
                        <th><a href="CargaCampaña.php"><button id="open"> Parcela 1 </button></a></th>
                        <th><a href="CargaCampaña.php" target="_blank"><button id="open"> Parcela 2 </button></a></th>
                    </tr>
                    <tr>
                        <th><a href="CargaCampaña.php"><button id="open"> Parcela 3 </button></a></th>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 4 </button></a></th>
                    </tr>
                    <tr>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 5 </button></a></th>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 6 </button></a></th>
                    </tr>
                    <tr>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 7 </button></a></th>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 8 </button></a></th>
                    </tr>
                    <tr>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 9 </button></a></th>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 10 </button></a></th>
                    </tr>
                    <tr>
                        <th><a href="DescripcionParcelas.html"><button id="open"> Parcela 11</button></a></th>
                    </tr>
                </table>
            </div>
        </div>
        <div>
            <h1>INFORMACION DE LAS PARCELAS</h1>
        </div>

        <?php #Llammo a pie 
include('./template/pie.php');?>
 