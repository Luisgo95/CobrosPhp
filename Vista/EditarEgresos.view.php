<!DOCTYPE html>
<?php include('menu.view.php'); ?>
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
<h3>Egresos</h3>
    <form class="" action="../Controlador/Egresos/control.editarEgresos.php" method="post">
 
        <div class="col-xs-12 col-sm8 col-md-5">
              <br>
              <input type="hidden" name="idEgresos"class="form-control" placeholder="Afiliado" aria-describedby="basic-addon1"
                  value="<?php
                  if (isset($_GET['a'])) {
                    echo  $_GET['a'];
                   }?>"
                  required>

            <div class="input-group">
                  <span class="input-group-addon" id="txtMarca">Descripcion</span>
                  <input type="text" name="descripcion"class="form-control" placeholder="Descripcion" aria-describedby="basic-addon1"required
                  value="<?php echo $_GET['b']; ?>"
                  >

          </div>
          <br>
          <div class="input-group">
                  <span class="input-group-addon" id="txtMarca">Cantidad</span>
                  <input type="number" name="cantidad"class="form-control" placeholder="Cantidad" aria-describedby="basic-addon1"required
                  value="<?php    echo $_GET['c']; ?>"
                  
                  >

          </div>
          <br>
          </div>
          <div class="col-xs-12 col-sm8 col-md-5">
          <br>
          <div class="input-group">
                  <span class="input-group-addon" id="txtMarca">Fecha</span>
                  <input type="date" name="fecha"class="form-control" placeholder="Fecha" aria-describedby="basic-addon1"required
                  value="<?php    
                   $fechaR = $_GET['d'];
                   $New_date = explode(" ",$fechaR);
                   echo  $New_date[0];?>"
                  >

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
