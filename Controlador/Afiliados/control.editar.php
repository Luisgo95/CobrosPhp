<?php session_start();

if (isset($_SESSION['IdUsuarioCel'])) {
require_once('../../Modelo/consultas.afiliados.php');
$mensaje=null;

if ($_SERVER['REQUEST_METHOD']=='POST') {
        $id= $_POST['id'];
        $nombre = $_POST['txtNombre'];
        $apellido = $_POST['txtApellido'];
        $telefono = $_POST['txtTelefono'];
        $dpi = $_POST['txtDpi'];
          $consultas = new AFiliado();
          $mensaje = $consultas -> editarAfiliado($id,$nombre,$apellido,$telefono,$dpi);

           header('Location: ../../Vista/consultaAfiliados.view.php');
          //  header('Location: ../../Vista/transferencia.view.php');

}
}else {
        header('Location: ../Vista/intruso.view.php');
}
 ?>
