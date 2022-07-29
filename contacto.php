<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dionisio Gacía</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/formulario.css">
</head>

<body>
    <div class="contenedor">
        
         <!-- Includes de Header y Nav--> 
         <?php
            include "includes/header.php";
            include "includes/nav.php";
             
        ?>

        <div class="formulario">

            <p>Formulario de Contacto:</p>

            <p>Rellena el siguiente formulario para contactar con nosotros. Nos pondremos en contacto contigo lo antes posible. Gracias. </p>
            <form class="form">

                <label for="labelNombre">Nombre *</label>
                <input type="text" name="nombre" required>
                <label for="labelApellido">Apellidos *</label>
                <input type="text" name="apellidos" required>
                <label for="lableMail">Mail *</label>
                <input type="email" name="email" required>
                <label for="lableTelefono">Telefono</label>
                <input type="number" name="telefono">
                <label for="labelasunto">Asunto</label>
                <input type="text" name="asunto">
                <label for="labelMensaje">Tu mensaje *</label>
                <textarea name="Mensaje" id="" cols="30" rows="10" required></textarea>

                <aside>

                    <p id="aceptarForm" class="aceptarForm">Debes aceptar el acuerdo para enviar el formulario</p>
                    <input type="checkbox" id="checkForm" name="permisoFormulario ">
                    <p>
                        De acuerdo con lo establecido por la Ley Orgánica 15/1999 de 13 de diciembre, de Protección de Datos de Carácter Personal, doy mi consentimiento/consiento para que estos datos sean incluidos en un fichero automatizado del que es titular Dionisio Garcia,
                        S.L., y puedan ser utilizados para la gestión fiscal, contable y administrativa de la relación contractual, así como el envío de información comercial sobre nuestros productos y servicios, y declaro estar informado sobre los derechos
                        de acceso, rectificación, cancelación y oposición que podré ejercitar en el domicilio social de Dionisio Garcia, S.L. CALLE DEL AJO PORRO, 9, MADRID 28O69 (Madrid). Para continuar debe Vd. Aceptar que ha leído y esta conforme con
                        esta cláusula
                    </p>
                </aside>
                <button type="submit " id="enviar" class="enviar" disabled>Send</button>
            </form>

            <div class="mapas">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.7499066823334!2d-3.7600530846068465!3d40.325707679375846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418a1c0fcfdc7b%3A0x61c2b4174a8f7dc1!2sC.%20Ac%2FDc%2C%2028914%20Legan%C3%A9s%2C%20Madrid!5e0!3m2!1ses!2ses!4v1658661323224!5m2!1ses!2ses"
                    width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        </div>
        <footer>
            <div class="datos">
                <p>Dionisio Garcia, SL</p>
                <p>Calle AC/DC 69</p>
                <p>28914 Leganes</p>
                <p>Madrid</p>
                <p>913 456 334</p>
                <a href="mailto:dionisoGarcia@mimail.com">dionisoGarcia@mimail.com</a>
            </div>
        </footer>



    </div>

    <script src="js/script.js "></script>
    <script src="js/formulario.js"></script>
    <script src="js/enlaces.js "></script>
   

</body>

</html>