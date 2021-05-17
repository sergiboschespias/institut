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
<?php
    $query = "SELECT * FROM alumne WHERE DNI = '$_GET[dni]'  ";
    $result = mysqli_query($bbdd, $query);
    $alumne = mysqli_fetch_assoc($result);
?>

        <h1>
            <i>
               Nom alumne: <?php echo $alumne['nombre'] . ' ' . $alumne['cognom']; ?>
            </i>
        </h1>


    </div>
</body>

</html>