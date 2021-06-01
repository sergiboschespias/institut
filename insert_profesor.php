<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php'; ?>
<?php require 'includes/header.php'; ?>
<header>

</header>
<body style="background-color:LightCyan;">
<div style="width: 100%; text-align: center">



  <form action="insert_api_profesor.php" method="POST">

    <h1>Inscripció nous professors</h1>
    <p>Aqui abaix podeu posar les vostres dades per poder inscriurer-vos</p>
    <div>
    <label><b> Nom (*obligatori)</b></label>
    </div>
    <div>
    <input type="text" maxlength="120" required name="nombre_profesor" placeholder="Escriu aqui el teu nom" />
    </div>
    <div>
    <label><b>Cognom (*obligatori)</b></label>
    </div>
    <div>
    <input type="text" maxlength="100" required name="cognom_profesor" placeholder="Escriu aqui el teu cognom" />
    </div>
    <div>
      <label><b>Adreça (*obligatori)</b></label>
      </div>
    <div>
      <input type="text" maxlength="100" required name="adreca" placeholder="Escriu aqui la teva adreça" />
    </div>
    <div>
      <label><b>telefon (*obligatori)</b></label>
      </div>
    <div>
      <input type="text" maxlength="100" required name="telefon" placeholder="Escriu aqui el teu telefon" />
    </div>
    <div>
    <label><b>dni (*obligatori)</b></label>
    </div>
    <div>
      <input type="text" maxlength="150" required name="DNI" placeholder="Escriu aqui el teu DNI" />
    </div>



    <button type="submit"><b>enviar</b></button>
    <!--select name="IDCurs">
      <?php
      $query = "SELECT * FROM profesor ORDER BY DNI";
      $result = mysqli_query($bbdd, $query);
      while ($row = mysqli_fetch_assoc($result)) {
      }
      ?>
    </select-->

  </form>
  <div style="width: 100%; text-align: center" >
        <img src="imagenes/claase.jpg" wdith="300ph" />
        </div>
</body>


</html>