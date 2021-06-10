<!DOCTYPE html>
<html lang="es-ES">
  <?php require 'includes/head.php'; ?>
  <?php require 'includes/header.php'; ?>
  <header>

  </header>

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

    <form action="<?=(isset($_GET['DNI'])) ? "update_api_alumne.php?DNI=$_GET[DNI]" : 'insert_api_alumne.php'?>"  method="POST" enctype="multipart/form-data">

    <h1>Inscripció nous alumnes FP</h1>
    <p>Aqui abaix podeu posar les vostres dades per poder inscriurer-vos</p>

     <div>
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
    <div>
      <input type="text" maxlength="120" value="<?=$nombre?>" required name="nombre" placeholder="Nom" />
    </div>
    <div>
      <input type="text" maxlength="100" value="<?=$cognom?>" required name="cognom" placeholder="Cognom" />
    </div>
    <div>  
      <input type="text" maxlength="100" value="<?=$adreca?>" required name="adreca" placeholder="Adreça" />
    </div>
    <div>  
      <input type="text" maxlength="100" value="<?=$codi_postal?>" required name="codi_postal" placeholder="Codi postal" />
    </div>
  
    <div>  
      <input type="text" maxlength="100" value="<?=$telefon?>" required name="telefon" placeholder="Telefon" />
    </div>
    
    
    
    <div>
    <input type="text" maxlength="150" value="<?=$DNI?>"required name="DNI" placeholder="DNI" />
    </div>
      <input type="date" name="naixament"
         value="2018-07-22"
        min="1900-01-01" max="2090-12-31">
    <div> 
    <input name="imatgeAlumne" type="file" accept="img/jpg"/>

    </div>
   

  
    



    <button type="submit"  ><b>Inscriure</b></button>
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