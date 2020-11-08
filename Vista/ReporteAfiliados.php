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
    <script src="../media/js/ReporteAfiliados.js"></script>

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
      <form action="../Controlador/Afiliados/controlReporteAfi.php" method="post" >
        <h3>Reporte de Solventes</h3>
        <div class="col-xs-5 col-sm- 5 col-md-5">
            <br>
            <div class="input-group">
                    <span class="input-group-addon" id="txtMes">Mes</span>
                       <select name="idMes" class="form-control">
                        <option value="<?php
        if (isset($_SESSION['MesConsulta'])) {
          echo $_SESSION['MesConsulta'];
        }
        ?>"><?php
        if (isset($_SESSION['MesSeleccionado'])) {
          echo $_SESSION['MesSeleccionado'];
        }else{
          echo "Seleccione";
        }
        ?></option> 
                       <?php 
                         $modelo1 = new Conexion();
                         $conexion1 = $modelo1->get_conexion();
                         $sql = ("select * from mes");
                         $statement1 = $conexion1->prepare($sql);
                           $statement1->execute();
                           while ($row1 = $statement1->fetch()) {
                             
                             echo '<option value="'.$row1['id'].",".$row1['nombre'].'">'.$row1['nombre'].'</option>';
                           }
                         ?>
                       </select>
            </div>
            <div>
            
            </div>
      <br>

    </div>
    <!-- se aplican margenes para las columnas-->
    <div class="col-xs-12 col-sm8 col-md-5">
<br>
    <!-- <?php if (isset($_SESSION['MesSeleccionado'])) : ?> 
    <div class="input-group">
                <span class="input-group-addon" id="txtnombre">Mes Seleccionado</span>
                <input type="text" name="txtMes" class="form-control" placeholder="Meses"
                 aria-describedby="basic-addon1" value="<?php
        if (isset($_SESSION['MesSeleccionado'])) {
         // echo $_SESSION['MesSeleccionado'];
        }
        ?>"readonly="true"> 
        </div>
        <?php endif;?> -->
      <br>
        <br>
        <div >
              <input type="submit"  class="btn btn-primary" role="button" value="Buscar"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
        </div>
        <br>
        </div>
    </form>

      </div>
    </section>
</div>
<div class="container  ">
<div class="main row">
    <!-- <div class="col-md-6 col-md-offset-2"> -->
        <h1>Lista de Solventes</h1>
        <table id ="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
              <th>id</th>
              <th>Nombres</th>
              <th>Estado</th>
              <th>Acciones</th>
          </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
            <tr>
            <th>id</th>

              <th>Nombres</th>
              <th>Estado</th>
              <th>Acciones</th>
            </tr>
            </tfoot>
        </table>
        </div>
        </div>
  </body>
</html>
