<?php

include "includes/mysql.php" ;

$id = $_GET['id'];

if(isset($id))
$DNI = $_POST['DNI'];
$nombre = $_POST['nombre'];
$cognom = $_POST['cognom'];
$adreca = $_POST['adreca'];
$codi_postal = $_POST['codi_postal'];
$telefon = $_POST['telefon'];
$naixament = $_POST['naixament'];
$query = "update alumne set DNI='$DNI',nombre='$nombre', cognom='$cognom', adreca='$adreca', codi_postal='$codi_postal', telefon='$telefon', naixament='$naixament' WHERE DNI = $id";
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