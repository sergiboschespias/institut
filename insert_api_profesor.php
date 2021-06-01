<!DOCTYPE html>
<html>
<head>
<?php require 'includes/head.php';?> 
</head>
<body>
<?php

echo "<p>".$_POST["DNI"]."</p>";
echo "<p>".$_POST["nombre_profesor"]."</p>";
echo "<p>".$_POST["cognom_profesor"]."</p>";
echo "<p>".$_POST["adreca"]."</p>";
echo "<p>".$_POST["telefon"];
$DNIv = $_POST["DNI"];
$nombre_profesorv = $_POST["nombre_profesor"];
$cognom_profesorv = $_POST["cognom_profesor"];
$adrecav = $_POST["adreca"];
$telefonv = $_POST["telefon"];
$query="INSERT INTO profesor (DNI,nombre,cognom,adreca,telefon) VALUES (\"$DNIv\",\"$nombre_profesorv\",\"$cognom_profesorv\",\"$adrecav\",\"$telefonv\");";
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

