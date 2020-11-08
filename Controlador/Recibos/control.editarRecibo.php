<?php session_start();

if (isset($_SESSION['IdUsuarioCel'])) {
require_once('../../Modelo/consultas.recibos.php');
$mensaje=null;

if ($_SERVER['REQUEST_METHOD']=='POST') {
        $descripcion= $_POST['descripcion'];
        $cantidad = $_POST['cantidad'];
        $idMes = $_POST['idMes'];
        $fecha = $_POST['fecha'];
        $idAfiliado = $_POST['idAfiliado'];
        $idRecibo = $_POST['idRecibo'];

          $consultas = new Recibos();
          $mensaje = $consultas -> editarRecibo($descripcion,$cantidad,$idMes,$fecha,$idAfiliado,$idRecibo);
        echo $mensaje;

           header('Location: ../../Vista/ListarRecibos.view.php');
          //  header('Location: ../../Vista/transferencia.view.php');

}
}else {
        header('Location: ../Vista/intruso.view.php');
}
 ?>
