<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php'; ?>
<?php require 'includes/header.php'; ?>
<header>
  <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
    </svg></a>
</header>
<body style="background-color:LightCyan;">
<div style="width: 100%; text-align: center">



  <form action="insert_api_profesor.php" method="POST">

    <h1>Inscripció nous alumnes FP</h1>
    <p>Aqui abaix podeu posar les vostres dades per poder inscriurer-vos</p>
  
    <label><b> Nom </b></label>
    <input type="text" maxlength="120" required name="nombre_alumne" placeholder="Escriu aqui el teu nom" />

    <label><b>Cognom</b></label>
    <input type="text" maxlength="100" required name="cognom_alumne" placeholder="Escriu aqui el teu cognom" />
    <div>
      <label><b>Adreça</b></label>
      <input type="text" maxlength="100" required name="adreca" placeholder="Escriu aqui la teva adreça" />
    </div>
    <div>
      <label><b>telefon</b></label>
      <input type="text" maxlength="100" required name="telefon" placeholder="Escriu aqui el teu telefon" />
    </div>
    <div>
    <label><b>DNI</b></label>
      <input type="text" maxlength="150" required name="DNI" placeholder="Escriu aqui el teu DNI" />
    </div>



    <button type="submit"><b>enviar</b></button>
    <!--select name="IDCurs">
      <?php
      $query = "SELECT * FROM profesor ORDER BY DNI";
      $result = mysqli_query($bbdd, $query);
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value=\"$row[DNI]\">$row[subgrup]</option>";
      }
      ?>
    </select-->

  </form>
  <div style="width: 100%; text-align: center" >
        <img src="imagenes/claase.jpg" wdith="300ph" />
        </div>
</body>


</html>