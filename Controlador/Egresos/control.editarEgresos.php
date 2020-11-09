<?php session_start();
if (isset($_SESSION['usuarioCel'])) {
require_once('../../Modelo/consultas.egresos.php');
$mensaje=null;

if ($_SERVER['REQUEST_METHOD']=='POST') {
        $IdEgreso = $_POST['codigo'];
        $descripcion = $_POST['descripcion'];
        $cantidad = $_POST['cantidad'];
        $fecha = $_POST['fecha'];

        $consultas= new Egresos();



        $mensaje = $consultas ->editarEgreso($IdEgreso,$descripcion,$cantidad,$fecha);

        header('Location: ../../Vista/ListarEgresos.view.php');
}

}else {
        header('Location: ../../Vista/intruso.view.php');
}
 ?>