<!DOCTYPE html>
<html lang="es-ES">
<?php require "includes/head.php"; ?>
<?php require "includes/header.php"; ?>
<head>


    <link rel="stylesheet" href="style/tablaaula.css" />


</head>


<body style="background-color:LightCyan;">
<div style="width: 100%; text-align: center">

<h1>Llista de profesors del centre.  <img src="imagenes/claase.jpg" wdith="100ph" style="width: 10%"; text-align: right /></h1>
<p>Aqui podreu trobar tots els profesors que fan feine en el centre</p>
<form>
   <label >introduce tu DNI</label>
<input list="DNI" name="DNI">
<datalist id="DNI">
<?php 
   $query = "SELECT DNI FROM profesor AS pr ORDER BY DNI;";
   $result = mysqli_query($bbdd, $query) or die (mysqli_error($bbdd));
   while($row = mysqli_fetch_assoc($result)){
         echo "<opiton value=\"$row[DNI]\">$row[DNI]</option>";

   }
   ?>

</datalist>

<button type="submit">Filtrar</button>
</form>
<table>
<caption>Aquesta taula esta feta per els profesors del centre.</caption>
<thead>
         <tr>
            <th>DNI</th>
            <th>nom</th>
            <th>Cognom</th>
            <th>adreça</th>
            <th>telèfon</th>
            <th>Eliminar</th>
        
         </tr>
</thead>
<tbody>
         <?php
         $where = "";
         if(isset($_GET['DNI'])){
            $where= " where DNI=\"$_GET[DNI]\" ";
         }
          $query= "SELECT *  FROM profesor $where ORDER BY DNI";    
          $result = mysqli_query($bbdd, $query);
          while ($row=mysqli_fetch_assoc($result)) {
          echo "
          <tr>
          <td> $row[DNI]</td>
          <td> $row[nombre]</td>
          <td> $row[cognom]</td>
          <td> $row[adreca]</td>
          <td> $row[telefon]</td>
          <td><a href=\"delete_api_profesor.php?DNI=$row[DNI]\">eliminar</a></td>
          </tr>
         ";
          }
         
          ?>
</tbody>


       
        
</table>

</div>
</body>
</html>
