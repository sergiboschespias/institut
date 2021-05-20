<!DOCTYPE html>
<html lang="es-ES">
<?php require "includes/head.php"; ?>
<?php require "includes/header.php"; ?>
<head>
<a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg></a>

    <link rel="stylesheet" href="style/tablaaula.css" />


</head>


<body style="background-color:LightCyan;">
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