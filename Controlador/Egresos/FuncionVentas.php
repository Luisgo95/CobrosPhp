<?php
include ("../../Modelo/class.conexion.php");
session_start();
	$modelo = new Conexion();
	$conexion = $modelo->get_conexion();
	$consulta = ("select imei,Modelo.nombreModelo,
		Marcas.Nombre,color,precioCompra,precioVenta,
                fechaIngreso,usuarios.nombreUser,fechaVenta
                from TelefonosVendidos, usuarios,Marcas,Modelo
                where TelefonosVendidos.vendidoPor = usuarios.idUsuario and
		Modelo.idModelo = TelefonosVendidos.idModelo and
                 Marcas.idMarca = TelefonosVendidos.idMarca 
                and fechaVenta between :FechaDel and :FechaAl");
	 $statement= $conexion->prepare($consulta);
	 $statement->bindParam(':FechaDel',$_SESSION['fechaDelCel']);
	 $statement->bindParam(':FechaAl',$_SESSION['fechaAlCel']);
	 	$statement->execute();
	//$registro = mysql_query($consulta,$dbx);
	$tabla = "";
	while($row = $statement->fetch()){
		$editar = '<a href=\"editarUsuario.view.php?a='.$row['imei'].'&b='.$row['imei'].'&c='.$row['imei'].'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
		//$eliminar = '<a href=\"../controlador/controlBorrar.empleado.php?id='.$row['IdLugar'].'\" onclick=\"return confirm(\'¿Seguro que desea eliminiar este usuario?\')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Eliminar\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>';
		$tabla.='{
			"Codigo":"'.$row['imei'].'",
			"CodModelo":"'.$row['nombreModelo'].'",
      "CodMarca":"'.$row['Nombre'].'",
      "Color":"'.$row['color'].'",
      "Compra":"'.$row['precioCompra'].'",
      "Venta":"'.$row['precioVenta'].'",
      "Ingreso":"'.$row['fechaIngreso'].'",
      "Usuario":"'.$row['nombreUser'].'",
      "Vendido":"'.$row['fechaVenta'].'",
			"Acciones":"'.$editar.'"
		},';
}
	//eliminamos la coma que sobra
	//
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';
?>
