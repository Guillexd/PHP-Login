<?php
include("./conexion.php");
include("./header.php");
?>

  <main class="container-fluid mainForm d-flex flex-column justify-content-center align-items-center" style="height: 100vh; background-color: #08AEEA; background-image: linear-gradient(0deg, #08AEEA 0%, #2AF598 100%);">
    <div class="card border border-primary border-2 p-5 rounded-4" style="background-color: #0093E9; background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);">
			<label style="font-family: 'Alkalami', serif; font-size:4rem">Registre sus datos</label>
      <form class="formulario py-5 position-relative d-flex flex-column align-items-center" id="formulario_registro" method="post">
        <!-- Grupo: Nombre -->
        <div class="formularioDiv mb-4">
          <div class="formularioDivDiv">
            <div class="formularioDivDivDiv">
              <input type="text" class="formularioInput" id="nombre" required>
              <label for="nombre" class="formularioLabel">Nombre</label>
            </div>
          </div>
        </div>

        <!-- Grupo: DNI-->
            <div class="formularioDiv mb-4">
              <div class="formularioDivDiv">
                <div class="formularioDivDivDiv">
                  <input type="text" class="formularioInput" id="dni" required>
                  <label for="dni" class="formularioLabel">DNI</label>
                </div>
              </div>
            </div>

        <!-- Grupo: Correo electrónico-->
            <div class="formularioDiv mb-4">
              <div class="formularioDivDiv">
                <div class="formularioDivDivDiv">
                  <input type="e-mail" class="formularioInput" id="correo" required>
                  <label for="correo" class="formularioLabel">Correo Electrónico</label>
                </div>
              </div>
            </div>

        <!-- Grupo: contraseña-->
            <div class="formularioDiv mb-4">
              <div class="formularioDivDiv">
                <div class="formularioDivDivDiv">
                  <input type="password" class="formularioInput" id="contra1" required>
                  <label for="contra1" class="formularioLabel">Contraseña</label>
                </div>
              </div>
            </div>

        <!-- Grupo: contraseña confirmación-->
            <div class="formularioDiv mb-4">
              <div class="formularioDivDiv">
                <div class="formularioDivDivDiv">
                  <input type="password" class="formularioInput" id="contra2" required>
                  <label for="contra2" class="formularioLabel">Reingrese contraseña</label>
                </div>
              </div>
            </div>

        <input type="submit" id="envio_registro" value="Registrarse" class="btn btn-primary btn-lg my-3 w-75">

      </form>
		</div>
		<!-- Aquí va el mensaje -->
		<div id="mensaje_registro" class="mt-3"></div>
	</main>
  <script src="../js/ajax_registro.js"></script>
<?php
  include("./footer.php");
?>