<?php #Llammo a cabecera, incluye el archivo cabecera.php desde template
include('./Template/Cabecera.php');?>

<body>
<title>PARCELAS</title>
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

   <header class="content header" id="Portada_PA">
       <h1 id="TituloPrincipal">Parcelas</h1>
   </header>

   <section class="sau"> <!--class="content sau"-->
        <div id="ContenedorBotones" class="sau">
            <button class="BotonesCampaña" id="open" onclick="location.href='altaCampañaHacienda.php'"> AÑADIR CAMPAÑA DE HACIENDA</button>
            <button class="BotonesCampaña" id="open" onclick="location.href='altaCampañaSiembra.php'"> AÑADIR CAMPAÑA DE SIEMBRA</button>
            <button class="BotonesCampaña"> MODIFICAR CAMPAÑA </button>
            <button class="BotonesCampaña"> ELIMINAR CAMPAÑA </button>
        </div>
        <div class="BotonParcelas">
            <a class="Boton11" href="./Parcelas/parcela11.php"><button id="open"> 11 </button></a>
            <a class="Boton9" href="./Parcelas/parcela9.php"><button id="open"> 9 </button></a>
            <a class="Boton10" href="./Parcelas/parcela10.php"><button id="open"> 10 </button></a>
        </div>
        <div class="BotonParcelas">
            <a class="BotonInvisible"></a>
            <a class="Boton8" href="./Parcelas/parcela8.php"><button id="open"> 8 </button></a>
            <a class="Boton7"href="./Parcelas/parcela7.php"><button id="open"> 7 </button></a>
        </div>
        <div class="BotonParcelas">
            <a class="Boton6" href="./Parcelas/parcela6.php"><button id="open"> 6 </button></a>
            <a class="Boton4"href="./Parcelas/parcela4.php"><button id="open"> 4 </button></a>
            <a class="Boton3"href="./Parcelas/parcela3.php"><button id="open"> 3 </button></a>
            <a class="BotonInvisible2"></a>
        </div>
        <div class="BotonParcelas">
            <a class="Boton5" href="./Parcelas/parcela5.php"><button id="open"> 5 </button></a>
            <a class="Boton2"href="./Parcelas/parcela2.php"><button id="open"> 2 </button></a>
            <a class="BotonInvisible3"></a>
        </div>
        <div class="BotonParcelas">
            <a class="Boton1" href="./Parcelas/parcela1.php"><button id="open"> 1 </button></a>
            <a class="BotonInvisible4"></a>
        </div>
        <div>
            <a class="BotonInvisible5"></a>
        </div>
   </section>
   <section class="content aboutDESCRIPCION">
        <h2 class="title" id="TituloNosotrosPA">Descripcion</h2>
        <div class="box-container2">

            <div class="box">
                <h3>Imagen de parcela</h3>
            </div>

            <div class="box">
                <h3>Descripcion</h3>
                <div>
                    <p>Hola</p>
                </div>
            </div>
        </div>       
   </section>

   <?php #Llammo a cabecera, incluye el archivo cabecera.php desde template
include('./Template/Pie.php');?>