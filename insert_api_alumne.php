<!DOCTYPE html>
<html>
<head>
<?php require 'includes/head.php';?> 
</head>
    <body>
        <?php

            echo "<p>".$_POST["DNI"]."</p>";
            echo "<p>".$_POST["nombre"]."</p>";
            echo "<p>".$_POST["cognom"]."</p>";
            echo "<p>".$_POST["adreca"]."</p>";
            echo "<p>".$_POST["codi_postal"]."</p>";
            echo "<p>".$_POST["telefon"];
            $DNIv = $_POST["DNI"];
            $nombrev = $_POST["nombre"];
            $cognomv = $_POST["cognom"];
            $adrecav = $_POST["adreca"];
            $codi_postalv = $_POST["codi_postal"];
            $telefonv = $_POST["telefon"];
            $cursv=$_POST["Curs"];
            $naixamentv=$_POST["naixament"];
            $query="INSERT INTO alumne (DNI,nombre,cognom,adreca,codi_postal,telefon,IDCurs,naixament) VALUES (\"$DNIv\",\"$nombrev\",\"$cognomv\",\"$adrecav\",\"$codi_postalv\",\"$telefonv\",\"$cursv\",\"$naixamentv\");";
            echo $query;
            $res=mysqli_query($bbdd,$query);
            if(!$res){
                echo"no ha anat be";
                print(mysqli_error($bbdd));
            }
            else {
                header("Location: v_inscripcio.php");

            }
        ?>
    </body>

</html>




