<?php
include ("../../Modelo/class.conexion.php");
	$modelo = new Conexion();
	$conexion = $modelo->get_conexion();
	$consulta = ("call ListUser");
	 $statement= $conexion->prepare($consulta);
	 	$statement->execute();
	//$registro = mysql_query($consulta,$dbx);
	$tabla = "";
	while($row = $statement->fetch()){
		$editar = '<a href=\"editarUsuario.view.php?a='.$row['idUsuario'].'&b='.$row['nombreUser'].'&c='.$row['password'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
		//$eliminar = '<a href=\"../controlador/controlBorrar.empleado.php?id='.$row['IdLugar'].'\" onclick=\"return confirm(\'¿Seguro que desea eliminiar este usuario?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';
		$tabla.='{
			"Codigo":"'.$row['idUsuario'].'",
			"Nombres":"'.$row['nombreUser'].'",
      "Contrasenia":"'.$row['password'].'",
			"Acciones":"'.$editar.'"
		},';
}
	//eliminamos la coma que sobra
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';
?>
