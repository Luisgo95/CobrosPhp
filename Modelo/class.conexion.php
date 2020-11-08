<?php

  class Conexion{

    public function get_conexion()
    {
      $user="UserCobros";
      $pass="UserCobros123";
      $host="localhost";
      $db="dbcobros";
      $conexion = new PDO("mysql:host=$host;dbname=$db;",$user,$pass);
      return  $conexion;

    }
  }





 ?>
