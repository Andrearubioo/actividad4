<?php
include("../config/config.php");
include("Usuario.php");

$usuario = new Usuario();
$dataUsuario = mysqli_fetch_object($usuario->getOne($_GET['id']));
$dateNacimiento = new DateTime($dataUsuario->fecha_nacimiento);
$dateSesion = new DateTime($dataUsuario->fecha_hora);

if (isset($_POST) && !empty($_POST)) {
  $usuarioActualizado = $usuario->update($_POST);
  if ($usuarioActualizado) {
    $mensaje = "<div class='alert alert-success' role='alert'>Usuario actualizado correctamente</div>";
  } else {
    $mensaje = "<div class='alert alert-danger' role='alert'>Error al actualizar el usuario</div>";
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
  <title>Amarte - Moficar usuario</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="<?= ROOT . "styles/index.css" ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="<? ROOT . 'styles/index.css' ?>" />
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
        <h1 class="title__section">Modificar usuario</h1>
      </div>
      <div class="row">
        <div class="col">
          <form class="card" method="POST">
            <div class="row">
              <div class="containerInput col-sm-12 col-md-12 col-lg-6 form-floating">
                <input type="hidden" name="id" value="<?= $dataUsuario->id ?>">
                <input type="text" placeholder="Nombres del usuario" name="nombres" id="nombres" class="form-control"
                  value="<?= $dataUsuario->nombres ?>">
                <label for="nombres">
                  Nombres
                </label>
              </div>
              <div class="containerInput col-sm-12 col-md-12 col-lg-6 form-floating">
                <input type="text" placeholder="Apellidos del usuario" name="apellidos" id="apellidos"
                  class="form-control" value="<?= $dataUsuario->apellidos ?>">
                <label for="nombres">
                  Apellidos
                </label>
              </div>
            </div>
            <div class="row">
              <div class="containerInput col-sm-12 col-md-12 col-lg-6 form-floating">
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control"
                  placeholder="Fecha" value="<?= $dateNacimiento->format('Y-m-d') ?>">
                <label for="apellidos">
                  Fecha de nacimiento
                </label>
              </div>
              <div class="containerInput col-sm-12 col-md-12 col-lg-6 form-floating">
                <input type="number" placeholder="Celular del usuario" name="celular" id="celular" class="form-control"
                  value="<?= $dataUsuario->celular ?>">
                <label for="celular">
                  Celular
                </label>
              </div>
            </div>
            <div class="row">
              <div class="containerInput col-sm-12 col-md-12 col-lg-6 form-floating">
                <input type="email" placeholder="Correo@gmail.com" name="correo" id="correo" class="form-control"
                  value="<?= $dataUsuario->correo ?>">
                <label for="correo">
                  Correo electrónico
                </label>
              </div>
              <div class="containerInput col-sm-12 col-md-12 col-lg-6 form-floating">
                <select name="tipo_terapia" id="tipo_terapia" class="form-select">
                  <option value="" disabled>Seleccione el tipo de terapia</option>
                  <option value="Individual" <?php echo ($dataUsuario->tipo_terapia === 'Individual' ? 'selected' : '') ?>>
                    Terapia
                    individual</option>
                  <option value="Grupal" <?php echo ($dataUsuario->tipo_terapia === 'Grupal' ? 'selected' : '') ?>>
                    Terapia
                    grupal</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="containerInput col-sm-12 col-md-12 col-lg-6 form-floating">
                <input type="datetime-local" placeholder="Fecha y hora" name="fecha_hora" id="fecha_hora"
                  class="form-control" value="<?= $dateSesion->format('Y-m-d\TH:i') ?>">
                <label for="fecha_hora">
                  Fecha de reservación
                </label>
              </div>
              <div class="containerInput col-sm-12 col-md-12 col-lg-6 form-floating">
                <textarea placeholder="Comentarios" name="comentarios" id="comentarios"
                  class="form-control"><?= $dataUsuario->comentarios ?></textarea>
                <label for="comentarios">
                  Comentarios
                </label>
              </div>
            </div>
            <div class="row">
              <button type="submit" name="Modificar" id="modificar" class="btn btn-success">Modificar</button>
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