<?php  session_start();
if (isset($_SESSION['usuarioCel'])) {
require_once('../../Modelo/consultas.meses.php');
$mensaje=null;
if ($_SERVER['REQUEST_METHOD']=='GET') {
        $Codigo = $_GET['id'];
        $consultas= new Mes();
        $mensaje = $consultas ->BorrarMeses($Codigo);
          echo $mensaje;
          header('Location: ../../Vista/ListarMeses.view.php');
}
}else {
        header('Location: ../../Vista/intruso.view.php');
}
 ?>
