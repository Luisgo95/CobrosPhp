<?php  include('menu.view.php');
 include('../Modelo/class.conexion.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <script src="../media/js/jquery-1.10.2.js"></script>
    <script src="../media/js/jquery.dataTables.min.js"></script>
    <script src="../media/js/dataTables.bootstrap.min.js"></script>
  <!--
  Al hacer esto ya no interrumpe con el menu por el bootstrap
  <script src="../media/js/bootstrap.js"></script> -->
    <script src="../media/js/ReporteFechaIngresos.js"></script>
  <script src="../media/js/ReporteFechaEgresos.js"></script> 
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
  </head>
  <body>
    <br><br>
    <div class="container">
      <section class="main row">
      <form action="../Controlador/Saldo/cantidadSaldo.php" method="post">
                <h3>Saldo de caja</h3>
                <div class="col-xs-5 col-sm- 5 col-md-5">
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon" id="txtfecha">Fecha Del</span>
                        <input type="date" name="FechaDel" class="form-control" placeholder="Fecha" aria-describedby="basic-addon1" required value="<?php
                              if (isset($_SESSION['FechaInicio'])) {
                                  echo $_SESSION['FechaInicio'];
                              }
                              ?>">
                    </div>

                </div>
                <!-- se aplican margenes para las columnas-->
                <div class="col-xs-12 col-sm8 col-md-5">

                    <br>
                    <div class="input-group">
                        <span class="input-group-addon" id="txtfecha">Fecha Al</span>
                        <input type="date" name="FechaAl" class="form-control" placeholder="Fecha" aria-describedby="basic-addon1" required value="<?php
                             if (isset($_SESSION['FechaFin'])) {
                                 echo $_SESSION['FechaFin'];;
                             }
                             ?>">
                    </div>
                    <br>
                    <div id="TotalDiv" class="input-group">
                        <span class="input-group-addon" id="txtTotal">Saldo en caja</span>
                        <input type="text" name="monto" class="form-control" placeholder="Total en Q" aria-describedby="basic-addon1" readonly="true" value="<?php
                             if (isset($_SESSION['Saldo'])) {
                                 echo $_SESSION['Saldo'];
                                 //echo "<script language='javascript'> location.reload(); </script>";
                             } ?>">
                    </div>
                    <br>
                    <br>
                    <div>

                        <button type="submit" class="btn btn-primary" role="button">Buscar</button>
                    </div>
                    <br>
            </form>
    </section>
</div>
<div class="container  ">
<div class="main row">
    <!-- <div class="col-md-6 col-md-offset-2"> -->
        <h1>Desglose</h1>
        <h2>Ingresos</h2>
        <table id ="Ingresos" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
            <th>id</th>
              <th>Nombres</th>
              <th>Recibo</th>
              <th>Descripcion</th>
              <th>Cantidad</th>
              <th>Fecha</th>
              <th>Mes</th>
              <!-- <th>Acciones</th> -->
          </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
            <tr>
            <th>id</th>
              <th>Nombres</th>
              <th>Recibo</th>
              <th>Descripcion</th>
              <th>Cantidad</th>
              <th>Fecha</th>
              <th>Mes</th>
              <!-- <th>Acciones</th> -->
            </tr>
            </tfoot>
        </table>
        <br>
        <br>
        <br>
        <h2>Egresos</h2>
        <table id ="exampleEgresos" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
              <th>id</th>
              <th>Descripcion</th>
              <th>cantidad</th>
              <th>fecha</th>
      
              <!-- <th>Acciones</th> -->

          </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
            <tr>
            <th>id</th>
              <th>Descripcion</th>
              <th>cantidad</th>
              <th>fecha</th>
      
              <!-- <th>Acciones</th> -->
            </tr>
            </tfoot>
        </table>
        </div>
        </div>
  </body>
</html>
