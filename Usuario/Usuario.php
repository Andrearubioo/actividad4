<?php
include("../config/Database.php");

class Usuario
{
  public $connection;

  public function __construct()
  {
    $db = new Database();
    $this->connection = $db->connectToDatabase();
  }

  function save($params)
  {
    $nombres = $params['nombres'];
    $apellidos = $params['apellidos'];
    $fecha_nacimiento = $params['fecha_nacimiento'];
    $celular = $params['celular'];
    $correo = $params['correo'];
    $tipo_terapia = $params['tipo_terapia'];
    $fecha_hora = $params['fecha_hora'];
    $comentarios = $params['comentarios'];

    if ($nombres !== '' && $apellidos !== '' && $fecha_nacimiento !== '' && $correo !== '' && $tipo_terapia !== '' && $fecha_hora !== '' && $comentarios !== '') {
      $insert = "INSERT INTO usuarios VALUES(NULL, '$nombres','$apellidos', '$fecha_nacimiento', $celular,'$correo','$tipo_terapia','$fecha_hora','$comentarios', NULL)";
      return mysqli_query($this->connection, $insert);
    }
  }

  function getAll()
  {
    $sql = "SELECT * FROM usuarios ORDER BY fecha_hora ASC";
    return mysqli_query($this->connection, $sql);
  }

  function getOne($id)
  {
    $sql = "SELECT * FROM usuarios where id = $id";
    return mysqli_query($this->connection, $sql);
  }

  function update($params)
  {
    $id = $params["id"];
    $nombres = $params['nombres'];
    $apellidos = $params['apellidos'];
    $fecha_nacimiento = $params['fecha_nacimiento'];
    $celular = $params['celular'];
    $correo = $params['correo'];
    $tipo_terapia = $params['tipo_terapia'];
    $fecha_hora = $params['fecha_hora'];
    $comentarios = $params['comentarios'];

    $update = "UPDATE usuarios SET nombres='$nombres', apellidos='$apellidos',fecha_nacimiento='$fecha_nacimiento', celular=$celular, correo='$correo', tipo_terapia='$tipo_terapia', fecha_hora='$fecha_hora', comentarios='$comentarios' WHERE id= $id";
    return mysqli_query($this->connection, $update);
  }

  function delete($id)
  {
    $sql = "DELETE FROM usuarios WHERE ID=$id";
    return mysqli_query($this->connection, $sql);
  }
}
?>