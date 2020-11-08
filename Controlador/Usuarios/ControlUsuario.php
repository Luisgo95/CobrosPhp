<?php session_start();

if (isset($_SESSION['IdUsuarioCel'])) {
require_once('../../Modelo/consultas.usuarios.php');
$mensaje=null;

if ($_SERVER['REQUEST_METHOD']=='POST') {
        $Nombre = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
        $Contrasena =filter_var(strtolower( $_POST['Contra']), FILTER_SANITIZE_STRING);
        $Contrasena2 = filter_var(strtolower($_POST['contra2']), FILTER_SANITIZE_STRING);

        if ($Contrasena==$Contrasena2) {
          $consultas= new Usuario();
          $mensaje = $consultas ->InsertarUsuario($Nombre,$Contrasena);
            header('Location:   ../../Vista/Bienvenido.view.php');
          //  header('Location: ../../Vista/transferencia.view.php');
        }else{
          echo "Las Contraseñas no coinciden";
        }

}
}else {
        header('Location: ../../Vista/intruso.view.php');
}
 ?>
