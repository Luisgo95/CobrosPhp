<!DOCTYPE html>
<?php include('menu.view.php');
 include('../Modelo/class.conexion.php');
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
  </head>
  <body>
    <br>
    <br>
        <br>
        <br>


<div class="container  ">

  <section class="main row">
<h3>Recibos</h3>
    <form class="" action="../Controlador/Recibos/control.ingresarRecibo.php" method="post">

        <div class="col-xs-12 col-sm8 col-md-5">

        <!-- <div class="input-group"> -->
        <input type="hidden" name="idAfiliado"class="form-control" placeholder="Afiliado" aria-describedby="basic-addon1"
                  value="<?php
                  if (isset($_GET['idAfiliado'])) {
                    echo  $_GET['idAfiliado'];
                   }?>"
                  required>


          <!-- </div> -->
        <br>
            <div class="input-group">
                  <span class="input-group-addon" id="txtMarca">Afiliado</span>
                  <input type="text" name="afiliado"class="form-control" placeholder="Afiliado" aria-describedby="basic-addon1"
                  value="<?php
                  if (isset($_GET['b'])) {
                    echo  $_GET['b'];
                   }?>" readonly="true"
                  required>

          </div>
              <br>
            <div class="input-group">
                  <span class="input-group-addon" id="txtMarca">Descripcion</span>
                  <input type="text" name="descripcion"class="form-control" placeholder="Descripcion" aria-describedby="basic-addon1"required>

          </div>
          <br>
          <div class="input-group">
                  <span class="input-group-addon" id="txtMarca">Cantidad</span>
                  <input type="number" name="cantidad"class="form-control" placeholder="Cantidad" aria-describedby="basic-addon1"required>

          </div>
          <br>
          </div>
          <div class="col-xs-12 col-sm8 col-md-5">
          <br>
          <div class="input-group">
                    <span class="input-group-addon" id="txtMes">Mes</span>
                       <select name="idMes" class="form-control">
           
                        <option value="0">Seleccione:</option> 
                       <?php 

                         $modelo1 = new Conexion();
                         $conexion1 = $modelo1->get_conexion();
                         $sql = ("select * from mes");
                         $statement1 = $conexion1->prepare($sql);
                           $statement1->execute();
                           while ($row1 = $statement1->fetch()) {
                             echo '<option value="'.$row1['id'].'">'.$row1['nombre'].'</option>';
                           }
                         ?>
                       </select>
            </div>
      <br>
          <div class="input-group">
                  <span class="input-group-addon" id="txtMarca">Fecha</span>
                  <input type="date" name="fecha"class="form-control" placeholder="Fecha" aria-describedby="basic-addon1"required>

          </div>
  
          <br>
            <div >
                  <input type="submit"  class="btn btn-primary" role="button" value="Guardar"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i>


            </div>
            <br>
      </div>


      </form>

      </section>
      </div>

  </body>

</html>
