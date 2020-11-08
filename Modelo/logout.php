<?php
session_start();
//Unset elimina una sesion especifica
//unset($_SESSION["IdUsuario"]);
session_destroy();

header("Location: ../index.php");


 ?>
