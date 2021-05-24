<?php
require "includes/mysql.php";
$query = "DELETE FROM alumne WHERE DNI=\"$_GET[DNI]\" ";
$result = mysqli_query($bbdd,$query);

if($result){
    header('Location: ok.php');
}else{
    $error = mysqli_error($bbdd);
    header("Location: no_ok.php?error=$error");
}