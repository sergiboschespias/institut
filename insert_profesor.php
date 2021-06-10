<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php'; ?>
<?php require 'includes/header.php'; ?>
<header>

</header>
<div style="width: 100%; text-align: center">



  <form action="insert_api_profesor.php" method="POST">

    <h1>Inscripció nous professors</h1>
    <p>Aqui abaix podeu posar les vostres dades per poder inscriurer-vos</p>
    
    <div>
    <input type="text" maxlength="120" required name="nombre_profesor" placeholder="Nom" />
    </div>
    
    <div>
    <input type="text" maxlength="100" required name="cognom_profesor" placeholder="Cognom" />
    </div>
    
    <div>
      <input type="text" maxlength="100" required name="adreca" placeholder="Adreça" />
    </div>
    
    <div>
      <input type="text" maxlength="100" required name="telefon" placeholder="Telefon" />
    </div>
    
    <div>
      <input type="text" maxlength="150" required name="DNI" placeholder="DNI" />
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