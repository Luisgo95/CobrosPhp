<?php
include ("../../Modelo/class.conexion.php");
session_start();
	$modelo = new Conexion();
	$conexion = $modelo->get_conexion();
	$consulta = ("select * from egresos");
	 $statement= $conexion->prepare($consulta);
	//  $statement->bindParam(':FechaDel',$_SESSION['fechaDelCel']);
	//  $statement->bindParam(':FechaAl',$_SESSION['fechaAlCel']);
	 	$statement->execute();
	//$registro = mysql_query($consulta,$dbx);
	$tabla = "";
	while($row = $statement->fetch()){
		$editar = '<a href=\"editarEgresos.view.php?a='.$row['idEgresos'].'&b='.$row['descripcion'].'&c='.$row['cantidad'].'&d='.$row['fecha'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
		$eliminar = '<a href=\"../Controlador/Egresos/control.eliminarEgresos.php?id='.$row['idEgresos'].'\" onclick=\"return confirm(\'¿Seguro que desea eliminiar este usuario?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';
		$tabla.='{
		"idEgresos":"'.$row['idEgresos'].'",
		"descripcion":"'.$row['descripcion'].'",
        "cantidad":"'.$row['cantidad'].'",
        "fecha":"'.$row['fecha'].'",
		"Acciones":"'.$editar.$eliminar.'"
		},';
}
	//eliminamos la coma que sobra
	//
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';
?>
