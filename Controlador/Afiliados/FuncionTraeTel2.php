<?php
include ("../../Modelo/class.conexion.php");
session_start();
	$modelo = new Conexion();

	$conexion = $modelo->get_conexion();

	$consulta = ("call ListTelefonos");
	 $statement= $conexion->prepare($consulta);
	 	$statement->execute();
	//$registro = mysql_query($consulta,$dbx);
	$tabla = "";

	while($row = $statement->fetch()){
	$editar = '<a   href=\"vender.view.php?a='.$row['imei'].'&b='.$row['Nombre'].'&c='.$row['idMarca'].'&d='.$row['nombreModelo'].'&e='.$row['idModelo'].'&f='.$row['color'].'&g='.$row['precioVenta']
	.'&h='.$row['fechaIngreso'].'&i='.$row['precioCompra']
.'\"data-toggle=\"tooltip\" data-placement=\"top\" title=\"Vender\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
	$eliminar = '<a href=\"../controlador/Telefonos/controlBorrar.telefono.php?id='.$row['imei'].'\" onclick=\"return confirm(\'¿Seguro que desea eliminiar este objeto?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';
  //  $trans = '<a href=\"transferencia.view.php?a='.$row['imei'].'&b='.$row['Nombre'].'&c='.$row['imei'].'&d='.$row['imei'].'&e='.$row['imei'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';

		$tabla.='{
			"Imei":"'.$row['imei'].'",
			"Marca":"'.$row['Nombre'].'",
			"Modelo":"'.$row['nombreModelo'].'",
			"color":"'.$row['color'].'",
			"PrecioC":"'.$row['precioCompra'].'",
			"PrecioV":"'.$row['precioVenta'].'",
            "Usuario":"'.$row['nombreUser'].'",
            "Fecha":"'.$row['fechaIngreso'].'",
			"Acciones":"'.$editar.$eliminar.'"
		},';
		$idMarca  = $row['idMarca'];
		$idModelo  = $row['idModelo'];

}
	//eliminamos la coma que sobra
	//
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';

?>
