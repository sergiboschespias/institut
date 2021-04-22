<!DOCTYPE html>
<html>
<head>
<?php require 'includes/mysql.php';?> 
</head>
<body>
<?php
echo "<p>".$_POST["DNI"]."</p>";
echo "<p>".$_POST["nombre_alumne"]."</p>";
echo "<p>".$_POST["cognom_alumne"]."</p>";
echo "<p>".$_POST["adreca"]."</p>";
echo "<p>".$_POST["codi_postal"]."</p>";
$DNIv = $_POST["DNI"];
$nombre_alumnev = $_POST["nombre_alumne"];
$cognom_alumnev = $_POST["cognom_alumne"];
$adrecav = $_POST["adreca"];
$codi_postalv = $_POST["codi_postal"];
$query="INSERT INTO alumne (DNI,nombre,cognom,adreca,codi_postal) VALUES (\"$DNIv\",\"$nombre_alumnev\",\"$cognom_alumnev\",\"$adrecav\",\"$codi_postalv\") ;";
echo $query;
$res=mysqli_query($bbdd,$query);
if(!$res){
    echo"no ha anat be";
    print(mysqli_error($bbdd));
}
?>
</body>

</html>





