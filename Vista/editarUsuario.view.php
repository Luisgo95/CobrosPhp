<!DOCTYPE html>
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
<h3>Ingrese el nuevo Usuario</h3>
    <form class="" action="../Controlador/Usuarios/ControlUpdateUsu.php" method="post">
        <div class="col-xs-12 col-sm8 col-md-5">
          <div class="input-group">
                <span class="input-group-addon" id="txtnombre">Codigo</span>
                <input type="text" name="Codigo"class="form-control" placeholder="Nombre" aria-describedby="basic-addon1"required
                value="<?php    echo $_GET['a'];  ?>" readonly="True" >
        </div>

              <br>
            <div class="input-group">
                  <span class="input-group-addon" id="txtnombre">Nombre</span>
                  <input type="text" name="nombre"class="form-control" placeholder="Nombre" aria-describedby="basic-addon1"required
                  value="<?php    echo $_GET['b'];  ?>"  >
          </div>
          <br>
        <div class="input-group">
              <span class="input-group-addon" id="txtnombre">Contraseña</span>
              <input type="text" name="Contra"class="form-control" placeholder="Contraseña" aria-describedby="basic-addon1"required
                value="<?php    echo $_GET['c'];  ?>" >
      </div>
      <br>
        <div class="input-group">
          <span class="input-group-addon" id="txtnombre">Repita Contraseña</span>
          <input type="text" name="contra2"class="form-control" placeholder="Contraseña" aria-describedby="basic-addon1"required
            value="<?php    echo $_GET['c'];  ?>"  >
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
