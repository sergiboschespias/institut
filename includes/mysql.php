<?php

$host="localhost";
$database="institut";
$user="root";
$password="";
$bbdd=mysqli_connect($host,$user,$password,$database);
if(!$bbdd)
{
echo"No tenim les dades";
print(mysqli_connect_error());
//mysqli_query($bbdd,"");
}
