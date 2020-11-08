<?php
include('../Modelo/logueo.php');

///if ($_SERVER['REQUEST_METHOD']=='POST') {

$User = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
$Pass = filter_var(strtolower($_POST['password']), FILTER_SANITIZE_STRING);
//$User = $_POST['usuario'];


//if (count($User)>0 /*&& count($Nombre)>0*/) {
  $consultas = new Loguearse();
  $mensaje = $consultas ->Validar($User,$Pass);
//}else {
//  echo "Por favor completa los campos";
//}
echo $mensaje;
//}
//require '../views/alumnos.view.php';
//require '../alumnos1.php';
//else {
//header('Location: ../Vista/intruso.php');
//}
 ?>
