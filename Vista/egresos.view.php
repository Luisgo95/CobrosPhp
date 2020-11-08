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
    <form class="" action="../Controlador/Egresos/control.egresos.php" method="post">
 
        <div class="col-xs-12 col-sm8 col-md-5">
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
