<?php  session_start();
if (isset($_SESSION['usuarioCel'])) {
require_once('../../Modelo/consultas.marcas.php');
$mensaje=null;
if ($_SERVER['REQUEST_METHOD']=='GET') {
        $Codigo = $_GET['id'];
        $consultas= new Marcas();
        $mensaje = $consultas ->BorrarMarca($Codigo);
          echo $mensaje;
          header('Location: ../../Vista/ListarMarcas.view.php');
}
}else {
        header('Location: ../../Vista/intruso.view.php');
}
 ?>
