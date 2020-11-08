<?php session_start();

if (isset($_SESSION['usuarioCel'])) {
require_once('../../Modelo/consultas.recibos.php');
$mensaje=null;

if ($_SERVER['REQUEST_METHOD']=='POST') {
      
        $idAfiliado = $_POST['idAfiliado'];
        $afiliado = $_POST['afiliado'];
        $descripcion = $_POST['descripcion'];
        $cantidad = $_POST['cantidad'];
        $idMes = $_POST['idMes'];
        $fecha = $_POST['fecha'];
     

          $consultas = new Recibos();
          $mensaje = $consultas -> insertarRecibo($idAfiliado,$afiliado,$descripcion,$cantidad,$idMes,$fecha);
        echo $mensaje;
           header('Location: ../../Vista/consultaAfiliados.view.php');
}
}else {
        header('Location: ../../Vista/intruso.view.php');
}
 ?>
