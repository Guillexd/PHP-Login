<?php
  include("conexion.php");
  if (isset($_POST["data_email"]) and isset($_POST["data_contrasenia"])){
    // agarramos datos
    $email=$_POST["data_email"];
    $contrasenia=$_POST["data_contrasenia"];
    // validamos datos y hacemos la petición a la base de datos
    $query = "SELECT email, contrasenia FROM usuarios WHERE email='$email'";
    $peticion = mysqli_query($conexion, $query); 
    $valores_database = mysqli_fetch_assoc($peticion);
    if((mysqli_num_rows($peticion)==1) and (password_verify($contrasenia, $valores_database['contrasenia']))){
      session_start();
      $_SESSION['verificar']=$email;
      echo "<meta http-equiv='refresh' content='1;url=./pages/principal.php' />";
    } else {
      echo '
      <div class="alert alert-dark" role="alert" style="font-size: 20px">
        <i class="fa-solid fa-triangle-exclamation" style="font-size: 30px"></i>
        Datos incorrectos, reingrese sus datos o <a href="./pages/registrarse.php" class="alert-link" target="_blank" rel="noopener noreferrer">registrese</a>. Gracias por preferirnos.
      </div>';
    }
  }
  
?>