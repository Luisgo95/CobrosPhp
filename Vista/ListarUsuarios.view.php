<?php include('menu.view.php');
if($_SESSION['IdUsuarioCel']==6 ){
  //  header('Location: intruso.view.php');
//  die();
}else{?>
    <h1>Lo siento No tienes Autorizada esta seccion del Software contacta a tu superior inmediato</h1>
<?php
 die();
}
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
    <script src="../media/js/TraeUsuarios.js"></script>
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
</head>
<body>
<div class="col-md-8 col-md-offset-2">
    <h1>Lista de Usuarios  </h1>
    </div>
<div class="col-md-8 col-md-offset-2">
    <table id ="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
         <th>Codigo</th>
          <th>Nombre </th>
          <th>Contraseña</th>
          <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
        <tr>
          <th>Codigo</th>
           <th>Nombre </th>
           <th>Contraseña</th>
           <th>Acciones</th>
        </tr>
        </tfoot>
    </table>
</div>
</body>
</html>
