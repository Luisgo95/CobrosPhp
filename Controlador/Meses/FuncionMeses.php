<?php
include ("../../Modelo/class.conexion.php");
session_start();
	$modelo = new Conexion();

	$conexion = $modelo->get_conexion();

	$consulta = ("select * from mes");
	 $statement= $conexion->prepare($consulta);
	 	$statement->execute();
	//$registro = mysql_query($consulta,$dbx);
	$tabla = "";

	while($row = $statement->fetch()){
	$editar = '<a   href=\"editarMeses.view.php?a='.$row['id'].'&b='.$row['nombre']
.'\"data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
	$eliminar = '<a href=\"../Controlador/Meses/control.borrarMeses.php?id='.$row['id'].'\" onclick=\"return confirm(\'¿Seguro que desea eliminiar este objeto?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';
  //  $trans = '<a href=\"transferencia.view.php?a='.$row['imei'].'&b='.$row['Nombre'].'&c='.$row['imei'].'&d='.$row['imei'].'&e='.$row['imei'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';

		$tabla.='{
			"id":"'.$row['id'].'",
			"Nombre":"'.$row['nombre'].'",
			"Acciones":"'.$editar.$eliminar.'"
		},';
}
	//eliminamos la coma que sobra
	//
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';

?>
