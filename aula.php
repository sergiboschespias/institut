<!DOCTYPE html>
<html lang="es-ES">
<?php require "includes/head.php"; ?>
<?php require "includes/header.php"; ?>
<head>


    <link rel="stylesheet" href="style/style.css" />


</head>


<div style="width: 100%; text-align: center">




<h1>Distribució de les aules del centre.  <img src="imagenes/claase.jpg" wdith="100ph" style="width: 10%"; text-align: right /></h1>
<p>Aqui podreu cercar la ubicaió de l'aula que cercau en els diferents blocs que te el center</p>
<form>
   <label >Filtrar:</label>
      <select name="bloc">
         <option value="0">Tots els blocs</option>
         <option value="1" >Bloque 1</option>
         <option value="2">Bloque 2</option>
         <option value="3">Bloque 3</option>
         <option value="4">Bloque 4</option>
        
      </select>
      <button type="submit">Filtrar</button>
      
</form>
<table>
<caption>Aquesta taula esta feta per les aules del centre.</caption>
<thead>
         <tr>
            <th>Bloque</th>
            <th>Numero</th>
        
         </tr>
</thead>
<tbody>
         <?php
         $where = "";
         if(isset($_GET['bloc']) && $_GET['bloc'] > 0){
            $where= " where au.bloque= $_GET[bloc] ";
          }
 
          $query = "SELECT au.*  FROM aula  AS au " . $where ;
                    
          $result = mysqli_query($bbdd, $query);
          while ($row = mysqli_fetch_assoc($result)) {
             echo "
        <tr>
        <td> $row[bloque]</td>
        <td> $row[numero]</td>

        </tr>
       ";
          }
         
         
         ?>
</tbody>

       
        
</table>

</div>
</body>

</html>