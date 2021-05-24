<!DOCTYPE html>
<html lang="es-ES">
<?php require "includes/head.php"; ?>
<?php require "includes/header.php"; ?>

    <head>
        <meta charset="utf-8">
        <style>
            td {
              border: 1px solid;
            }
        </style>
        <title>Titol de sa pagina</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>

    <body style="background-color:Cornsilk;">
        <div style="width: 100%; text-align: center">
            <h1>
                <i>
                    Es Liceu
                </i>
            </h1>


        <p>
            Bon dia , estas en la pàgina web del colegi <b>Es Liceu</b> aqui podras
            cercar informacio sobre el centre i els alumnes del liceu.
        </p>
        <p>
            En la nova web diseñada per <i>Sergi Bosch i Jordi Mayrata</i> volem una millor estructura de les dades i
            una millor accesibilitat als alumnes.Gràcies.
        </p>
        <p>
            <a class="btn btn-primary" href="llista_alumne.php"> Alumnes</a>
        </p>
        <p>
            <a class="btn btn-primary" href="insert_alumne.php"> Nous alumnes </a>
        </p>
        <p>
            <a class="btn btn-primary" href="aula.php"> Aules</a>
        </p>
        <p>
            <a class="btn btn-primary" href="llista_profesor.php"> Profesors</a>
        </p>
        <p>
            <a class="btn btn-primary" href="insert_profesor.php"> Nous profesors</a>
        </p>
        
        
        </div>
        <div style="width: 100%; text-align: center">
        <img src="imagenes/claase.jpg" wdith="300ph" />
        </div>
    
    </body>

</html>