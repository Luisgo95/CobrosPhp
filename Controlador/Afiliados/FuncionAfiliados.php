<?php
include ("../../Modelo/class.conexion.php");
session_start();
	$modelo = new Conexion();

	$conexion = $modelo->get_conexion();

	// $consulta = ("select  Telefonos.idMarca, Marcas.Nombre ,count(Telefonos.idMarca) as cantidad
	// from Telefonos, Marcas where Telefonos.idMarca = Marcas.idMarca group by idMarca");
		$consulta = ("select *
	from afiliados");
	 $statement= $conexion->prepare($consulta);
	 	$statement->execute();
	//$registro = mysql_query($consulta,$dbx);
	$tabla = "";

	while($row = $statement->fetch()){
	$editar = '<a   href=\"../Vista/EditarAfiliados.php?id='.$row['idAfiliado'].'&a='.$row['nombre'].'&b='.$row['apellido'].'&c='.$row['telefono']
	.'&d='.$row['dpi']
.'\"data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
$recibo = '<a   href=\"../Vista/recibos.view.php?idAfiliado='.$row['idAfiliado'].'&b='.$row['nombre']." ".$row['apellido']
.'\"data-toggle=\"tooltip\" data-placement=\"top\" title=\"Recibo\" class=\"btn btn-success\"><i class=\"fa fa-university\" aria-hidden=\"true\"></i></a>';
	$eliminar = '<a href=\"../controlador/Afiliados/controlBorrar.Afiliados.php?id='.$row['idAfiliado'].'\" onclick=\"return confirm(\'¿Seguro que desea eliminiar este usuario?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';
  //  $trans = '<a href=\"transferencia.view.php?a='.$row['imei'].'&b='.$row['Nombre'].'&c='.$row['imei'].'&d='.$row['imei'].'&e='.$row['imei'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';

		$tabla.='{
			"Codigo":"'.$row['idAfiliado'].'",
			"Nombre":"'.$row['nombre'].'",
			"Apellidos":"'.$row['apellido'].'",
			"Telefono":"'.$row['telefono'].'",
			"DPI":"'.$row['dpi'].'",
			"Acciones":"'.$editar.$eliminar.$recibo.'"
		},';

}
	//eliminamos la coma que sobra
	//
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';

?>
