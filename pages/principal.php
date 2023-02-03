<?php
include("conexion.php");
include("header.php");
session_start();
error_reporting(0);
if ($_SESSION['verificar']==null || $_SESSION['verificar']==''){
  echo '
  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Página no encontrada</h4>
    <p>Al parecer cerraste sesión y ya no puedes ingresar a esta página. Por favor vuelve a <a href="../index.php" rel="noopener noreferrer">Iniciar Sesión</a> o <a href="./registrarse.php" rel="noopener noreferrer">Regístrate</a></p>
    <hr>
    <p class="mb-0">Gracias por preferirnos.</p>
  </div>';
  die();
}
$email=$_SESSION['verificar'];
$query = "SELECT * FROM usuarios WHERE email='$email'";
$peticion = mysqli_query($conexion, $query);
?>
  <header>
      <nav class="navbar navbar-expand-lg bg-light">
      <div class="container">
          <a class="navbar-brand fw-bold py-1 px-0" href="">Consulta total</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav d-flex w-100 d-flex justify-content-between">
                <li class="nav-item me-5 p-2">
                  <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="./consulta.php">Consulta por nombre</a>
                </li>

                <li class="nav-item ms-5 border border-info border-3 rounded-5 p-2">
                  <a class="nav-link fw-bold py-1 px-0" href="../index.php" rel="noopener noreferrer">Cerar Sesión</a>
                </li>
            </ul>
          </div>
      </div>
      </nav>
  </header>
  
  <main class="container d-flex flex-column align-items-center mt-5 h-100">
    <h1 style="font-size: 4rem">Bienvenido <?php echo mysqli_fetch_assoc($peticion)['nombre'] ?></h1>
    <h2>Datos del equipo</h2>
    
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">id<th>
                <th scope="col">Nombre<th>
                <th scope="col">DNI<th>
                <th scope="col">Correo electrónico<th>
            </tr>    
        </thead>
        <tbody>
        <?php
        $query = "SELECT * FROM usuarios";
        $peticion = mysqli_query($conexion, $query);
        while($row = mysqli_fetch_assoc($peticion)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <th></th>
                    <td><?php echo $row['nombre']; ?></td>
                    <th></th>
                    <td><?php echo $row['dni']; ?></td>
                    <th></th>
                    <td><?php echo $row['email']; ?></td>
                </tr>
        <?php } ?>
        </tbody>
    </table>
  </main>
<?php include ("./footer.php");?>