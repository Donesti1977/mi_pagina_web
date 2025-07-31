<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/principal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <title>CMES</title>
    <style>
        @import url('https://fonts.cdnfonts.com/css/black-future');
    </style>
</head>
<body>
    <div class="cuerpo_pagina">
        <?php
            require_once("cabecera.php");
        ?>
        <div class="contenedor_principal">
            <!--<h2>DONDE ESTAMOS</h2>-->
            <iframe class="contenedor_principal_iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d862.3155750890812!2d-3.6760529517681206!3d40.44773043727857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228dbb142f3dd%3A0x31b5d0a9ea01609e!2sC.%20de%20Eugenio%20Salazar%2C%2052%2C%20Chamart%C3%ADn%2C%2028002%20Madrid!5e0!3m2!1ses!2ses!4v1753391457181!5m2!1ses!2ses" width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <?php
            require_once("footer.php");
        ?>
    </div>
    
</body>
</html>