<?php session_start();

if (isset($_SESSION['usuarioCel'])) {


require_once('../../Modelo/consultas.Saldos.php');


$mensaje=null;
if ($_SERVER['REQUEST_METHOD']=='POST') {
        $_SESSION['FechaInicio'] = $_POST['FechaDel'];
        $_SESSION['FechaFin'] = $_POST['FechaAl'];
      
//Cambiar
        $consultas= new Saldos();
        $_SESSION['Saldo'] = $consultas ->ConsultarSaldo($_SESSION['FechaInicio'],$_SESSION['FechaFin']);
       
        header('Location: ../../Vista/ReporteSaldos.php');
}
}else {
        header('Location: ../../Vista/intruso.view.php');
}
 ?>