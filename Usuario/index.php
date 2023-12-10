<?php
include_once("../config/config.php");
include("Usuario.php");

$usuario = new Usuario();
$data = $usuario->getAll();

if (isset($_GET["id"]) && !empty($_GET["id"])) {
  $remove = $usuario->delete($_GET["id"]);
  if ($remove) {
    header("Location: " . ROOT . "/Usuario/index.php");
  } else {
    $mensaje = "<div class='alert alert-danger'>Error al eliminar el usuario</div>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuarios - Amarte</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
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
    <section class="container-fluid">
      <div class="row">
        <h1 class="title__section">Usuarios registrados</h1>
      </div>
      <div class="container mb-5">
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">usuario</th>
                <th scope="col">Correo</th>
                <th scope="col">Fecha de nacimiento</th>
                <th scope="col">Tipo de terapia</th>
                <th scope="col">Fecha de terapia</th>
                <th scope="col">Comentarios</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <?php foreach ($data as $usuario): ?>
                <tr>
                  <td>
                    <?php echo $usuario['id']; ?>
                  </td>
                  <td>
                    <?php echo $usuario['nombres'] . " " . $usuario['apellidos']; ?>
                  </td>
                  <td>
                    <?php echo $usuario['correo']; ?>
                  </td>
                  <td>
                    <?php echo $usuario['fecha_nacimiento']; ?>
                  </td>
                  <td>
                    <?php echo $usuario['tipo_terapia']; ?>
                  </td>
                  <td>
                    <?php echo $usuario['fecha_hora']; ?>
                  </td>
                  <td>
                    <?php echo $usuario['comentarios']; ?>
                  </td>
                  <?php $idUsuario = $usuario["id"] ?>
                  <td>
                    <?php echo "<a href='" . ROOT . "/Usuario/modify.php?id=$idUsuario' class='btn btn-primary btn-modify'>Editar</a> " ?>
                  </td>
                  <td>
                    <?php echo "<a href='" . ROOT . "/Usuario/index.php?id=$idUsuario' class='btn btn-danger'>Eliminar</a>" ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

      </div>

    </section>
  </main>
  <?php include("../components/footer.php") ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>