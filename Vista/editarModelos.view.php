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
<h3>Edite el Modelo</h3>
    <form class="" action="../Controlador/Modelos/control.editarModelo.php" method="post">
        <div class="col-xs-12 col-sm8 col-md-5">
          <div class="input-group">
                <span class="input-group-addon" id="txtCodigo">Codigo</span>
                <input type="text" name="codigo"class="form-control" placeholder="Nombre"
                aria-describedby="basic-addon1"required value="<?php    echo $_GET['a']; ?>" readonly="true">
        </div>
        <br>
            <div class="input-group">
                  <span class="input-group-addon" id="txtnombre">Nombre</span>
                  <input type="text" name="nombre"class="form-control"
                  placeholder="Nombre" aria-describedby="basic-addon1"required value="<?php  echo $_GET['b']; ?>">
          </div>
          <br>
            <div >
                  <input type="submit"  class="btn btn-primary" role="button"
                  value="Actualizar"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
            </div>
      </div>
      </form>
      </section>
      </div>
  </body>
</html>
