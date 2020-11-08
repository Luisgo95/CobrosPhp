<?php session_start();

if (isset($_SESSION['IdUsuarioCel'])) {
require_once('../../Modelo/consultas.usuarios.php');
$mensaje=null;
if ($_SERVER['REQUEST_METHOD']=='POST') {
        $Codigo = filter_var(strtolower($_POST['Codigo']), FILTER_SANITIZE_STRING);
        $Nombre = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
        $Contrasena =filter_var(strtolower( $_POST['Contra']), FILTER_SANITIZE_STRING);
        $Contrasena2 = filter_var(strtolower($_POST['contra2']), FILTER_SANITIZE_STRING);
        if ($Contrasena==$Contrasena2) {
          $consultas= new Usuario();
          $mensaje = $consultas ->updateUsuario($Codigo,$Nombre,$Contrasena);
            header('Location: ../../Vista/ListarUsuarios.view.php');
          //  header('Location: ../../Vista/transferencia.view.php');
        }else{
          echo "Las Contraseñas no coinciden";
        }

}
}else {
        header('Location: ../../Vista/intruso.view.php');
}
 ?>
