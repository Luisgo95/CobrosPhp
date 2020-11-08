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
<h3>Ingrese el nuevo Modelo</h3>
    <form class="" action="../Controlador/Modelos/control.ingresarModelo.php" method="post">
      <h2>Ingresa los modelos ordenados alfabeticamente para mayor optimizacion</h2>
        <div class="col-xs-12 col-sm8 col-md-5">
              <br>
            <div class="input-group">
                  <span class="input-group-addon" id="txtModelo">Modelo</span>
                  <input type="text" name="modelo"class="form-control" placeholder="Modelo" aria-describedby="basic-addon1"required>

          </div>

          <br>
            <div >
                  <input type="submit"  class="btn btn-primary" role="button" value="Guardar"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i>


            </div>
      </div>


      </form>

      </section>
      </div>

  </body>

</html>
