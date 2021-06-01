<!DOCTYPE html>
<html lang="es-ES">
  <?php require 'includes/head.php'; ?>
  <?php require 'includes/header.php'; ?>
  <header>

  </header>
  <body style="background-color:LightCyan;">
    <div style="width: 100%; text-align: center">


    <?php
    $DNI = '';
    $nombre = '';
    $cognom = '';
    $adreca = '';
    $codi_postal = '';
    $naixament = '';
    $telefon = '';
    

    if(isset($_GET['DNI'])){
      $query = "SELECT * from alumne WHERE DNI = $_GET[DNI]";
      $result = mysqli_query($bbdd, $query) or die (mysqli_error($bbdd));
      $alumne = mysqli_fetch_assoc($result);
      $DNI = $alumne['DNI'];
      $nombre = $alumne['nombre'];
      $cognom = $alumne['cognom'];
      $adreca = $alumne['adreca'];
      $codi_postal = $alumne['codi_postal'];
      $naixament = $alumne['naixament'];
      $telefon = $alumne['telefon'];

      
    }
    ?>

    <form action="<?=(isset($_GET['DNI'])) ? "update_api_alumne.php?DNI=$_GET[DNI]" : 'insert_api_alumne.php'?>"  method="POST">

    <h1>Inscripció nous alumnes FP</h1>
    <p>Aqui abaix podeu posar les vostres dades per poder inscriurer-vos</p>
  
    <label><b> Nom </b></label>
    <input type="text" maxlength="120" value="<?=$nombre?>" required name="nombre_alumne" placeholder="Escriu aqui el teu nom" />

    <label><b>Cognom</b></label>
    <input type="text" maxlength="100" value="<?=$cognom?>" required name="cognom_alumne" placeholder="Escriu aqui el teu cognom" />
    <div>
      <label><b>Adreça</b></label>
      <input type="text" maxlength="100" value="<?=$adreca?>" required name="adreca" placeholder="Escriu aqui la teva adreça" />
      <label><b>Codi postal</b></label>
      <input type="text" maxlength="100" value="<?=$codi_postal?>" required name="codi_postal" placeholder="Escriu aqui el teu codi postal" />
    </div>
    <div>
      <label><b>telefon</b></label>
      <input type="text" maxlength="100" value="<?=$telefon?>" required name="telefon" placeholder="Escriu aqui el teu telefon" />

      
      <input type="text" maxlength="100" value="<?=$naixament?>" required name="naixament" placeholder="Escriu aqui la teva data de naixament" />
    </div>
    <div>
      <label><b>DNI</b></label>
      <input type="text" maxlength="150" value="<?=$DNI?>"required name="DNI" placeholder="Escriu aqui el teu DNI" />
      <label><b>Curs</b></label>
      <select name="Curs">      
        <option value="1">1r ESO</option>
        <option value="2">2n ESO</option>
        <option value="3">3r ESO</option>
        <option value="4">4t ESO</option>
        <option value="5">1r Bach</option>
        <option value="6">2n Bach</option>
        <option value="7">FP Basic</option>
        <option value="8">FP Mitja</option>
      </select>
    </div>



    <button type="submit"  ><b>enviar</b></button>
    <!--select name="IDCurs">
      <?php
      $query = "SELECT IDCurs, Nom_curs FROM curs ORDER BY IDCurs";
      $result = mysqli_query($bbdd, $query);
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value=\"$row[IDCurs]\">$row[subgrup]</option>";
      }
      ?>
    </select-->

    </form>
  <div style="width: 100%; text-align: center" >
        <img src="imagenes/claase.jpg" wdith="300ph" />
        </div>
</body>


</html>