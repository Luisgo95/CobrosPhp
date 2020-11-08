<?php
include ("../../Modelo/class.conexion.php");
session_start();
	$modelo = new Conexion();

  $CodigoMarca = $_SESSION['CodigoMarca'];

	$conexion = $modelo->get_conexion();

	$consulta = ("select  Telefonos.idMarca, Marcas.Nombre,Telefonos.idModelo,
	Modelo.nombreModelo, count(Telefonos.idModelo) as cantidad
  	from Telefonos,Marcas,Modelo
 	where Telefonos.idMarca = $CodigoMarca
 	and Telefonos.idMarca = Marcas.idMarca
 	and Telefonos.idModelo = Modelo.idModelo
 	group by Telefonos.idModelo");
	 $statement= $conexion->prepare($consulta);
	 	$statement->execute();
	//$registro = mysql_query($consulta,$dbx);
	$tabla = "";

	while($row = $statement->fetch()){
	$editar = '<a   href=\"../Vista/Especifico.view.php?id='.$row['idMarca']
.'\"data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
	//$eliminar = '<a href=\"../controlador/Remitente/controlBorrar.remitente.php?id='.$row['idMarca'].'\" onclick=\"return confirm(\'¿Seguro que desea eliminiar este usuario?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';
  //  $trans = '<a href=\"transferencia.view.php?a='.$row['imei'].'&b='.$row['Nombre'].'&c='.$row['imei'].'&d='.$row['imei'].'&e='.$row['imei'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';

		$tabla.='{
			"codigo":"'.$row['idMarca'].'",
			"nombre":"'.$row['Nombre'].'",
			"IdModel":"'.$row['idModelo'].'",
      "NombreModel":"'.$row['nombreModelo'].'",
      "cantidad":"'.$row['cantidad'].'",
			"Acciones":"'.$editar.'"
		},';

}
	//eliminamos la coma que sobra
	//
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';

?>
