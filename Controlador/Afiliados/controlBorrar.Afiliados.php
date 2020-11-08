<?php  session_start();
if (isset($_SESSION['usuarioCel'])) {

require_once('../../Modelo/consultas.afiliados.php');
$mensaje=null;
if ($_SERVER['REQUEST_METHOD']=='GET') {

        $Codigo = $_GET['id'];

        $consultas = new AFiliado();

        $mensaje = $consultas ->BorrarTelefono($Codigo);
          echo $mensaje;
          header('Location: ../../Vista/consultaAfiliados.view.php');
}
}else {
        header('Location: ../../Vista/intruso.view.php');
}
 ?>
 $_SESSION['MesConsulta']
