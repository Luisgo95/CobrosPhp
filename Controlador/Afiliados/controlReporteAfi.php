<?php  session_start();
if (isset($_SESSION['usuarioCel'])) {
$mensaje=null;
if ($_SERVER['REQUEST_METHOD']=='POST') {
      $Seleccion = $_POST['idMes'];
       
        $array = explode(",",$Seleccion);
        $_SESSION['MesConsulta']=$array[0];
        $_SESSION['MesSeleccionado']=$array[1];
        
        header('Location: ../../Vista/ReporteAfiliados.php');
}
}else {
        header('Location: ../../Vista/intruso.view.php');
}
?>