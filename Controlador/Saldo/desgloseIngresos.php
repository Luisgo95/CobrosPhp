<?php
include ("../../Modelo/class.conexion.php");
session_start();
	$modelo = new Conexion();

	$conexion = $modelo->get_conexion();

	$consulta = ("select afi.idAfiliado,CONCAT(afi.nombre,' ',afi.apellido) AS Nombre,
	r.idRecibo,r.descripcion, r.cantidad, r.fecha, m.nombre as Mes
	from afiliados afi , recibos r, mes m 
	where r.idAfiliado = afi.idAfiliado and m.id = r.idMes 
    and r.fecha between :Inicio and :Fin");
	 $statement= $conexion->prepare($consulta);
	 $statement->bindParam(':Inicio',$_SESSION['FechaInicio'] );
	 $statement->bindParam(':Fin', $_SESSION['FechaFin']);
	 	$statement->execute();
	//$registro = mysql_query($consulta,$dbx);
	$tabla = "";
	while($row = $statement->fetch()){
	$editar = '<a   href=\"editarModelos.view.php?a='.$row['idAfiliado'].'&b='.$row['idRecibo']
.'\"data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
	$eliminar = '<a href=\"../Controlador/Modelos/control.borrarModelo.php?id='.$row['idAfiliado'].'\" onclick=\"return confirm(\'¿Seguro que desea eliminiar este objeto?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';
  //  $trans = '<a href=\"transferencia.view.php?a='.$row['imei'].'&b='.$row['Nombre'].'&c='.$row['imei'].'&d='.$row['imei'].'&e='.$row['imei'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';

		$tabla.='{
			"idAfiliado":"'.$row['idAfiliado'].'",
			"Nombre":"'.$row['Nombre'].'",
			"idRecibo":"'.$row['idRecibo'].'",
			"descripcion":"'.$row['descripcion'].'",
			"cantidad":"'.$row['cantidad'].'",
			"fecha":"'.$row['fecha'].'",
			"Mes":"'.$row['Mes'].'",
			"Acciones":"'.$editar.$eliminar.'"
		},';
}
	//eliminamos la coma que sobra
	//
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';

?>
