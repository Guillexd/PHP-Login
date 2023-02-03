<?php
include("./pages/header.php");
session_start();
session_destroy();
?>

<main class="container-fluid d-flex flex-column justify-content-center align-items-center" style="height: 100vh; background-color: #08AEEA;
background-image: linear-gradient(0deg, #08AEEA 0%, #2AF598 100%);">
  <div class="card border border-primary border-2 p-5 rounded-4" style="background-color: #0093E9;
background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);">
    <h1 style="font-family: 'Alkalami', serif; font-size:4rem">Bienvenido</h1>

    <!-- aquí va el formulario -->
    <form action="" method="post" class="text-center">
      <label style="font-size: 1.2rem">Ingrese sus datos por favor:</label>
      <div class="d-flex flex-column text-center mt-3">
        <input type="e-mail" name="data_user" placeholder="Ingresa tu correo" class="mt-3 border border-success border-2 p-2 mb-2 border-opacity-75 rounded-3" style="outline: none; font-size: 1.2rem">
        <input type="password" name="data_pass"  placeholder="Ingresa tu clave" class="mt-3 border border-success border-2 p-2 mb-2 border-opacity-75 rounded-3" style="outline: none; font-size: 1.2rem">
        <input type="submit" id="envio_login" value="Iniciar Sesión" class="btn btn-primary btn-lg my-3">
        <a href="./pages/registrarse.php" target="_blank" rel="noopener noreferrer" style="font-size: 1.2rem; text-decoration: none">Registrarse</a>
      </div>
    </form>

  </div>
  <!-- aquí va el error -->
  <div id="mensaje_error" class="mt-3"></div>
</main>
 
<script src="./js/ajax_index.js"></script>
<?php
  include("./pages/footer.php");
?>
