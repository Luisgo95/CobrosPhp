<?php session_start();

if (isset($_SESSION['usuarioCel'])) {
require_once('../../Modelo/consultas.meses.php');
$mensaje=null;

if ($_SERVER['REQUEST_METHOD']=='POST') {
          $Mes = filter_var(strtolower($_POST['txtMes']), FILTER_SANITIZE_STRING);
          $consultas = new Mes();
          $mensaje = $consultas -> insertarMes($Mes);
          header('Location: ../../Vista/meses.view.php');
          //  header('Location: ../../Vista/transferencia.view.php');
}
}else {
        header('Location: ../../Vista/intruso.view.php');
}
 ?>
