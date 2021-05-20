<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php'; ?>
<?php require 'includes/header.php'; ?>
<link rel="stylesheet" href="style/tablaalumne.css" />

   <header>

 
         
   </header>

<body>
  <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg></a>
<body style="background-color:LightCyan;"> 

<div style="width: 100%; text-align: center">
<h1>Alumnes del centre <img src="imagenes/claase.jpg" wdith="300ph" />
</h1>
<p>Aqui teniu la llista de tots els nous alumnes incrits al centre.</p>

</body>
   <form action="llista_alumne.php" method="get">
      <label>Filtrar:</label>
      <select name="curs">
         <option value="0">Tots els cursos</option>
         <option value="1">1 ESO</option>
         <option value="2">2 ESO</option>
         <option value="3">3 ESO</option>
         <option value="4">4 ESO</option>
         <option value="5">1r Bach</option>
         <option value="6">2n Bach</option></option>
         <option value="7">FP Grau Bàsic</option>
         <option value="8">FP Grau Mitja</option>
      </select>
      <button type="submit">Filtrar</button>
   </form>


   <table> 
    <caption>Aquesta taula esta feta nomes per alumnes incrits al centre</caption>
      <thead>
         <tr>
            <th>DNI</th>
            <th>Nom</th>
            <th>Curs</th>
            <th>adreca</th>
            <th>codi postal</th>
            <th>telèfon</th>
            <th>naixament</th>
            <th>Curs</th>
            <th>Opcions</th>
         </tr>
      </thead>
      <tbody>
         <?php
         $where = "";
         if(isset($_GET['curs']) && $_GET['curs'] > 0){
           $where= " where c.IDCurs= $_GET[curs] ";
         }

         $query = "SELECT al.*,c.Nom_curs AS Nom_curs FROM alumne AS al
                    INNER JOIN curs AS c ON (al.IDCurs = c.IDCurs)
                    $where 
                     ORDER BY al.nombre ";
         $result = mysqli_query($bbdd, $query);
         while ($row = mysqli_fetch_assoc($result)) {
            echo "
       <tr>
       <td> $row[DNI]</td>
       <td> <a href=\"fitxa_alumne.php?dni=$row[DNI]\">$row[nombre]</a></td>
       <td> $row[cognom]</td>
       <td> $row[adreca]</td>
       <td> $row[codi_postal]</td>
       <td> $row[telefon]</td>
       <td> $row[naixament]</td>
       <td> $row[IDCurs]</td>
       <td><a href=\"delete_api_alumne.php?DNI=$row[DNI]\">eliminar</a></td>
       </tr>
      ";
         }
         ?>
      </tbody>
   </table>
        <img src="imagenes/claase.jpg" wdith="300ph" />
        </div>
</body>