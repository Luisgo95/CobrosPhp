<?php
session_start();
if (isset($_SESSION['usuarioCel'])) {
require_once('../../Modelo/consultas.ventas.php');
$mensaje=null;
if ($_SERVER['REQUEST_METHOD']=='POST') {
        $FechaDel = $_POST['FechaDel'];
        $FechaAl = $_POST['FechaAl'];
        $_SESSION['fechaDelCel'] = $FechaDel;
        $_SESSION['fechaAlCel'] = $FechaAl;
       $consultas= new Ventas();
       $mensaje = $consultas ->montoDelAl();
       header('Location: ../../Vista/FiltroDelAlVenta.view.php');
}
}else {
      header('Location: ../../Vista/intruso.view.php');
} ?>
