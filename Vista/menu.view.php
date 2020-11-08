<?php
session_start();
if($_SESSION['usuarioCel']==null || $_SESSION['usuarioCel']==''){
    header('Location: intruso.view.php');
  die();
}else {
  if (!isset($_SESSION['tiempo'])) {
    $_SESSION['tiempo']=time();
}
else if (time() - $_SESSION['tiempo'] > 900) {
    session_destroy();
    /* Aquí redireccionas a la url especifica */
    header("Location: sesionExpirada.view.php");
    die();
}
$_SESSION['tiempo']=time(); //Si hay actividad seteamos el valor al tiempo actual
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  <!--  <link rel="stylesheet" type="text/css" href="../css/style.css">-->
  <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minumum-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="../bootstrap/estilos/estilo.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bootstrap/estilos.css">
<!--Incluyendo Iconos-->
  <link rel="stylesheet" href="../media/css/bootstrap.css">
  <link rel="stylesheet" href="../media/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../media/font-awesome/css/font-awesome.css">
  <script src="../media/js/jquery-1.10.2.js"></script>
  <script src="../media/js/jquery.dataTables.min.js"></script>
  <script src="../media/js/dataTables.bootstrap.min.js"></script>
  </head>
    <header>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="Bienvenido.php">Inicio</a>
  </li>

  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Afiliados</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="Afiliados.view.php">Ingresar</a>
          <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="consultaAfiliados.view.php">Leer</a>
      </div>
    </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Recibos</a>
    <div class="dropdown-menu">
    <a class="dropdown-item" href="recibos.view.php">Ingresar</a>
    <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="ListarRecibos.view.php">Leer</a>
    </div>
  </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Meses</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="meses.view.php">Ingresar</a>
          <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="ListarMeses.view.php">Leer</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Egresos</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="egresos.view.php">Ingresar</a>
          <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="ListarEgresos.view.php">Leer</a>
      </div>
    </li>
    <!-- <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Usuarios</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="usuarios.view.php">Insertar</a>
        <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="ListarUsuarios.view.php">Leer </a>
      </div>
    </li> -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reportes</a>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="ReporteAfiliados.php">Estado Afiliados </a>
        <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="ReporteSaldos.php">Saldos </a>
        </div>
      </div>
    </li>
    <li class="nav-item dropdown">
        <a class="icono izquierda fa fa-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php  echo "  Bienvenido: ".$_SESSION['usuarioCel']; ?></a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="../Modelo/logout.php">Cerrar Sesion</a>
        </div>
    </li>
    </header>
</html>
