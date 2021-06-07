<?php

include "includes/mysql.php" ;

//Si tenim imatge
$updateImg = '';
if($_FILES['imatgeAlumne']){
    $tmp = $_FILES['imatgeAlumne']['tmp_name'];
    $path = 'imagenes/alumnes/' . $_GET['DNI'] . '.jpg';
    move_uploaded_file($tmp, $path);
    $updateImg = ", imatgeAlumne = \"$_GET[DNI].jpg\" ";
}else{
   
   return "";

}

$id = $_GET['DNI'];
$DNI = $_POST['DNI'];
$nombre = $_POST['nombre'];
$cognom = $_POST['cognom'];
$adreca = $_POST['adreca'];
$codi_postal = $_POST['codi_postal'];
$telefon = $_POST['telefon'];
$naixament = $_POST['naixament'];
$query = "update alumne set 
DNI='$DNI',nombre='$nombre', cognom='$cognom', 
adreca='$adreca', codi_postal='$codi_postal', telefon='$telefon', 
naixament='$naixament' $updateImg 
WHERE DNI = $id";
//echo($DNI);


$edit = mysqli_query($bbdd, $query);
if($edit)
{
    mysqli_close($bbdd);
    header("location:ok.php");

}
else{
    $error = mysqli_error($bbdd);
    header("location:no_ok.php?error=$error");
}