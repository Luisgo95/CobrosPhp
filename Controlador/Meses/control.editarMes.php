<?php session_start();
if (isset($_SESSION['usuarioCel'])) {
require_once('../../Modelo/consultas.meses.php');
$mensaje=null;

if ($_SERVER['REQUEST_METHOD']=='POST') {
        $IdMes = $_POST['codigo'];
        $Nombre = $_POST['nombre'];
        $consultas= new Mes();
        $mensaje = $consultas ->editarMes($IdMes,$Nombre);
        echo $mensaje;
        header('Location: ../../Vista/ListarMeses.view.php');
}

}else {
        header('Location: ../../Vista/intruso.view.php');
}
 ?>