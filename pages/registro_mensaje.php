<?php
  include("conexion.php");
  if (isset($_POST["data_email_r"]) and isset($_POST["data_pass_r"])){
    // agarramos datos
    $nombre=$_POST["data_nombre_r"];
    $dni=$_POST["data_dni_r"];
    $email=$_POST["data_email_r"];
    $contrasenia=$_POST["data_pass_r"];
    $contrasenia=password_hash($contrasenia, PASSWORD_DEFAULT);
    // validamos datos y hacemos la petición a la base de datos
    $query = "INSERT INTO usuarios values(NULL, '$nombre', '$dni', '$email', '$contrasenia')";
    $peticion = mysqli_query($conexion, $query);
    if($peticion){
      echo '
      <div class="alert alert-warning" role="alert" style="font-size: 20px">
        <i class="fa-solid fa-circle-check" style="font-size: 30px"></i>
        Datos registrados con éxito, intente iniciar sesión <a href="../index.php" class="alert-link">aquí</a>. Gracias por preferirnos.
      </div>';
    } else {
      echo '
      <div class="alert alert-dark" role="alert" style="font-size: 20px">
        <i class="fa-solid fa-triangle-exclamation" style="font-size: 30px"></i>
        Datos incorrectos, reingrese sus datos o <a href="./pages/registrarse.php" class="alert-link" target="_blank" rel="noopener noreferrer">registrese</a>. Gracias por preferirnos.
      </div>';
    }
   
  }
?>