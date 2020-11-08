<?php include('menu.view.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Busqueda de Celulares</title>
    <script src="../media/js/jquery-1.10.2.js"></script>
    <script src="../media/js/jquery.dataTables.min.js"></script>
    <script src="../media/js/dataTables.bootstrap.min.js"></script>
  <!--
  Al hacer esto ya no interrumpe con el menu por el bootstrap
  <script src="../media/js/bootstrap.js"></script> -->
    <script src="../media/js/TraeDetalle.js"></script>
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
    <?php
    if (isset($_GET['idMarca'])) {
    $_SESSION['CodigoMarca'] = $_GET['idMarca'];
}

     ?>
</head>
<body>
<div class="col-md-8 col-md-offset-2">
    <h1>Lista Telefonos por marca  </h1>
    <h2><?php echo $_SESSION['CodigoMarca'];  ?></h2>
    </div>
<div class="col-md-8 col-md-offset-2">
    <table id ="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
         <th>Codigo marca</th>
          <th>Nombre </th>
          <th>Codigo Modelo </th>
          <th>Nombre Modelo </th>
          <th>cantidad </th>
          <th>Acciones </th>
        </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
        <tr>
          <th>Codigo marca</th>
           <th>Nombre </th>
           <th>Codigo Modelo </th>
           <th>Nombre Modelo </th>
           <th>Cantidad </th>
          <th>Acciones </th>
        </tr>
        </tfoot>
    </table>
</div>
</body>
</html>
