<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php'; ?>
<?php require 'includes/header.php'; ?>



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
            <th>Cognom</th>
            <th>adreca</th>
            <th>codi postal</th>
            <th>telèfon</th>
            <th>naixament</th>
            <th>Curs</th>
            <th>Imatge</th>
            <th>Eliminar</th
            ><th>Opcions</th>
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
       <td> <img src=\"imagenes/alumnes/$row[imatgeAlumne]\" width=\"100px\" /></td>
       <td><a href=\"delete_api_alumne.php?DNI=$row[DNI]\">eliminar</a></td>
       <td><a href=\"insert_alumne.php?DNI=$row[DNI]\">editar</a></td>

       </tr>
      ";
         }
         ?>
      </tbody>
   </table>
        <img src="imagenes/claase.jpg" wdith="300ph" />
        </div>
</body>