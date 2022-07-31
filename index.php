<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dionisio Gacía</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/galeria.css">
    <link rel="stylesheet" href="CSS/tarjetas.css">
    <!-- enlace fontaweson -->
    <script src="https://kit.fontawesome.com/45730bc152.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="contenedor">
        
        <!-- Includes de Header y Nav--> 
        <?php
            include "includes/header.php";
            include "includes/nav.php";
             
        ?>
        
        
        <div class="galeria">

            <img id="fotoPortada" src="imagenes/images-1.jpg" class="portada_foto " alt="drogueria Dionsio garcia " title="dionisio garcia ">
           
        </div>
          <div class="tarjetas">

            <div id="tarjetaPintura">
                <img src="imagenes/card_Pintura.jpg" class="cardsImg">

                <h2>Pinturas</h2>
                <ul>
                    <li>Pinturas plásticas</li>
                    <li>Esmaltes</li>
                    <li>Barnices</li>
                    <li>Sprays</li>
                    <li>...</li>
                </ul>


            </div>

            <div id="tarjetaLavanderia">
                <img src="imagenes/cardLavanderia.jpg" class="cardsImg">

                <h2>Lavandería</h2>
                <ul>
                    <li>Detergentes</li>
                    <li>Suavizantes</li>
                    <li>Desmanchantes</li>
                    <li>Bombas dosifiación</li>
                    <li>...</li>
                </ul>

            </div>
            <div id="tarjetaLimpieza">
                <img src="imagenes/Card_limpieza.jpg" class="cardsImg">

                <h2>Limpieza industrial</h2>
                <ul>
                    <li>Limpiasuelos</li>
                    <li>Desengrasantes</li>
                    <li>Desinfectantes</li>
                    <li>utiles</li>
                    <li>...</li>
                </ul>


            </div>
        </div>
       
       
     <!-- Include del footer--> 
     <?php
     include "includes/footer.php";
            
        ?>


    </div>

    <script src="js/script.js "></script>
    <script src="js/galeriaSetInterval.js"></script>
    <script src="js/enlaces.js "></script>

    <!-- Botones para el slider manual    
    <script src="https://kit.fontawesome.com/45730bc152.js " crossorigin="anonymous "></script>
    -->
   
</body>


</html>