<?php  session_start();
if (isset($_SESSION['usuarioCel'])) {

require_once('../../Modelo/consultas.modelos.php');
$mensaje=null;
if ($_SERVER['REQUEST_METHOD']=='GET') {

        $Codigo = $_GET['id'];

        $consultas= new Modelos();

        $mensaje = $consultas ->BorrarModelo($Codigo);
          echo $mensaje;
          header('Location: ../../Vista/ListarModelos.view.php');
}
}else {
        header('Location: ../../Vista/intruso.view.php');
}
 ?>
