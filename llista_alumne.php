<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php'; ?>
<?php require 'includes/header.php'; ?>
<link rel="stylesheet" href="styles/style.css" />

<body>

   <header>

      <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
         </svg></a>
   </header>

   <form action="llista_alumne.php" method="get">
      <label>Filtrar:</label>
      <select name="alumne">
         <option value="1">Fp Grau Mitjá</option>
         <option value="2">Fp Grau Basic</option>

      </select>
      <button type="submit">Filtrar</button>
   </form>


   <table>

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
         </tr>
      </thead>
      <tbody>
         <?php
         $query = "SELECT al.*,c.Nom_curs AS Nom_curs FROM alumne AS al
    INNER JOIN curs AS c ON (al.IDCurs = c.IDCurs)

    ORDER BY al.nombre ";
         $result = mysqli_query($bbdd, $query);
         while ($row = mysqli_fetch_assoc($result)) {
            echo "
       <tr>
       <td> $row[DNI]</td>
       <td> $row[nombre]</td>
       <td> $row[cognom]</td>
       <td> $row[adreca]</td>
       <td> $row[codi_postal]</td>
       <td> $row[telefon]</td>
       <td> $row[naixament]</td>
       <td> $row[IDCurs]</td>
       </tr>
      ";
         }
         ?>
      </tbody>
   </table>
</body>