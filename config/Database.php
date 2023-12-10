<?php

/*
Esta clase nos permite hacer una conexión con la base de datos
*/

class Database{
  public $host = 'localhost'; //Servidor
  public $user = 'root'; //Usuario de phpMyAdmin
  public $pass = ''; //Contraseña de phpMyAdmin
  public $db = 'amarte'; //Nombre de la base de datos
  public $connection;

  function connectToDatabase(){
    $this->connection = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

    if(mysqli_connect_error()){
      echo 'Error de conexión ' . mysqli_connect_error();
    }

    return $this->connection;
  }
}

?>