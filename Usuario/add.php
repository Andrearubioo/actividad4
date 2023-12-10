<?php
include("../config/config.php");
include("Usuario.php");

if (isset($_POST) && !empty($_POST)) {
  $usuario = new Usuario();
  $save = $usuario->save($_POST);
  if ($save) {
    $mensaje = '<div class="alert alert-success">Usuario registrado correctamente</div>';
  } else {
    $mensaje = '<div class="alert alert-alert">Error al registrar el usuario</div>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <title>Amarte - Registrar usuarios</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="<?= ROOT . 'styles/index.css' ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="./styles/index.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&family=Ubuntu:wght@300;400;500;700&display=swap"
    rel="stylesheet">
</head>

<body>
  <?php include("../components/header.php") ?>
  <main>
    <div class="container">
      <div class="row">
        <h1 class="title__section">Registrar usuario</h1>
      </div>
      <div class="row">
        <div class="col">
          <form class="card" method="POST">
            <div class="row">
              <div class="containerInput col-sm-12 col-md-12 col-lg-6 form-floating">
                <input type="text" placeholder="Nombres del usuario" name="nombres" id="nombres" class="form-control">
                <label for="nombres">
                  Nombres
                </label>
              </div>
              <div class="containerInput col-sm-12 col-md-12 col-lg-6 form-floating">
                <input type="text" placeholder="Apellidos del usuario" name="apellidos" id="apellidos"
                  class="form-control">
                <label for="apellidos">
                  Apellidos
                </label>
              </div>
            </div>
            <div class="row">
              <div class="containerInput col-sm-12 col-md-12 col-lg-6 form-floating">
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control"
                  placeholder="Fecha">
                <label for="fecha_nacimiento">
                  Fecha de nacimiento
                </label>
              </div>
              <div class="containerInput col-sm-12 col-md-12 col-lg-6 form-floating">
                <input type="number" placeholder="Celular del usuario" name="celular" id="celular" class="form-control">
                <label for="celular">
                  Celular
                </label>
              </div>
            </div>
            <div class="row">
              <div class="containerInput col-sm-12 col-md-12 col-lg-6 form-floating">
                <input type="email" placeholder="Correo@gmail.com" name="correo" id="correo" class="form-control">
                <label for="correo">
                  Correo electrónico
                </label>
              </div>
              <div class="containerInput col-sm-12 col-md-12 col-lg-6 form-floating">
                <select name="tipo_terapia" id="tipo_terapia" class="form-select">
                  <option value="" disabled selected>Seleccione el tipo de terapia</option>
                  <option value="Individual">Terapia individual</option>
                  <option value="Grupal">Terapia grupal</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="containerInput col-sm-12 col-md-12 col-lg-6 form-floating">
                <input type="datetime-local" placeholder="Fecha para tu sesión" name="fecha_hora" id="fecha_hora"
                  class="form-control">
                <label for="fecha_hora">
                  Fecha de reservación
                </label>
              </div>
              <div class="containerInput col-sm-12 col-md-12 col-lg-6 form-floating">
                <textarea name="comentarios" placeholder="Comentarios" id="comentarios" class="form-control"></textarea>
                <label for="comentarios" id="comentarios">
                  Comentarios
                </label>
              </div>
            </div>
            <div class="row">
              <button type="submit" name="registrar" id="registrar" class="btn btn-success">Registrar</button>
            </div>
          </form>
        </div>
      </div>

      <?php
      if (isset($mensaje)) {
        echo $mensaje;
      }
      ?>
    </div>
  </main>
  <?php include("../components/footer.php") ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>