<?php session_start();
if (isset($_SESSION['usuarioCel'])) {
require_once('../../Modelo/consultas.egresos.php');
$mensaje=null;

if ($_SERVER['REQUEST_METHOD']=='POST') {
        $IdEgreso = $_POST['idEgresos'];
        $descripcion = $_POST['descripcion'];
        $cantidad = $_POST['cantidad'];
        $fecha = $_POST['fecha'];

        $consultas= new Egresos();
        echo "  dato1 ".$IdEgreso;
        echo "  dato2 ".$descripcion;
        echo "  dato3 ".$cantidad;
        echo "  dato4 ".$fecha;


        $mensaje = $consultas ->editarEgresos($IdEgreso,$descripcion,$cantidad,$fecha);
        echo "
        
        MEnsaje
        ".$mensaje;
        // header('Location: ../../Vista/ListarEgresos.view.php');
}

}else {
        header('Location: ../../Vista/intruso.view.php');
}
 ?>