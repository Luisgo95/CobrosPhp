<?php  session_start();
if (isset($_SESSION['usuarioCel'])) {

require_once('../../Modelo/consultas.recibos.php');
$mensaje=null;
if ($_SERVER['REQUEST_METHOD']=='GET') {

        $Codigo = $_GET['id'];

        $consultas= new Recibos();

        $mensaje = $consultas ->BorrarRecibo($Codigo);
          echo $mensaje;
          header('Location: ../../Vista/ListarRecibos.view.php');
}
}else {
        header('Location: ../../Vista/intruso.view.php');
}
 ?>
