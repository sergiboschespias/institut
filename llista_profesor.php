<!DOCTYPE html>
<html lang="es-ES">
<?php require "includes/head.php"; ?>
<?php require "includes/header.php"; ?>
<head>
<a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
         </svg></a>

    <link rel="stylesheet" href="style/tablaaula.css" />


</head>


<body style="background-color:LightCyan;">
<div style="width: 100%; text-align: center">

<h1>Distribució de les aules del centre.  <img src="imagenes/claase.jpg" wdith="100ph" style="width: 10%"; text-align: right /></h1>
<p>Aqui podreu cercar la ubicaió de l'aula que cercau en els diferents blocs que te el center</p>

   <label >introduce tu DNI</label>
<input list="DNI">
<datalist id="DNI">
    
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
        
         </tr>
</thead>
<tbody>
         <?php
         $where = "";
         if(isset($_GET['profesor']) && $_GET['profesor'] > 0){
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