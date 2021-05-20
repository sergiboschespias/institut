<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php'; ?>
<?php require 'includes/header.php'; ?>
<link rel="stylesheet" href="style/tablaalumne.css" />

   <header>

   <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
         </svg></a>
         
   </header>

<body>

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
       <td><a href=\"delete_api_producte.php?DNI=$row[DNI]\">eliminar</a></td>
       </tr>
      ";
         }
         ?>
      </tbody>
   </table>
        <img src="imagenes/claase.jpg" wdith="300ph" />
        </div>
</body>