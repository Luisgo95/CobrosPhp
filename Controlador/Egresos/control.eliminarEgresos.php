<?php  session_start();
if (isset($_SESSION['usuarioCel'])) {

require_once('../../Modelo/consultas.egresos.php');
$mensaje=null;
if ($_SERVER['REQUEST_METHOD']=='GET') {

        $Codigo = $_GET['id'];

        $consultas = new Egresos();

        $mensaje = $consultas ->Borrar($Codigo);
          echo $mensaje;
          header('Location: ../../Vista/ListarEgresos.view.php');
}
}else {
        header('Location: ../../Vista/intruso.view.php');
}
 ?>
