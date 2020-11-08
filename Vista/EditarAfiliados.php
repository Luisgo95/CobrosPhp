<?php include ('menu.view.php'); ?>
<!DOCTYPE html>
<br>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Afiliados</title>
  </head>
  <body>
      <br><br><br>
      <div class="container  ">
        <section class="main row">

        <form action="../Controlador/Afiliados/control.editar.php" method="post" >
          <h1>Editar afiliado</h1>
          <div class="col-xs-12 col-sm-8  col-md-5">
          <br>
          <input type="text" name="id" class="form-control"
                placeholder="id" aria-describedby="basic-addon1" required value="<?php echo $_GET['id']; ?>">
      
          <div class="input-group">
                <span class="input-group-addon" id="txtnombre">Nombre</span>
                <input type="text" name="txtNombre" class="form-control"
                placeholder="Nombre" aria-describedby="basic-addon1" required value="<?php echo $_GET['a']; ?>">
        </div>
          <br>
          <div class="input-group">
                <span class="input-group-addon" id="txtApellido ">Apellido</span>
                <input type="text" name="txtApellido" class="form-control"
                placeholder="Apellido" aria-describedby="basic-addon1"required value="<?php    echo $_GET['b']; ?>">
        </div>
        <br>
        
      </div>
      <!-- se aplican margenes para las columnas-->
      <div class="col-xs-12 col-sm8 col-md-5">
  <br>
          <div class="input-group">
                <span class="input-group-addon" id="txtTelefono">Telefono</span>
                <input type="text" name="txtTelefono" class="form-control"
                placeholder="Telefono" aria-describedby="basic-addon1" required value="<?php    echo $_GET['c']; ?>">
        </div>
          <br>
          <div class="input-group">
                <span class="input-group-addon" id="txtDpi ">DPI</span>
                <input type="text" name="txtDpi" class="form-control"
                placeholder="DPI" aria-describedby="basic-addon1"required value="<?php    echo $_GET['d']; ?>">
        </div>
    
        <br>

          <div >
                <input type="submit"  class="btn btn-primary" role="button" value="Actualizar"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
          </div>
          <br>
          <br>
      </form>
        </div>
      </section>
      </div>
  </body>
</html>
