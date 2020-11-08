<?php include ('menu.view.php'); ?>
<!DOCTYPE html>
<br>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Meses</title>
  </head>
  <body>
      <br><br><br>
      <div class="container  ">
        <section class="main row">

        <form action="../Controlador/Meses/control.ingresar.php" method="post" >
          <h1>Meses</h1>
          <div class="col-xs-12 col-sm-8  col-md-5">
          <br>
          <div class="input-group">
                <span class="input-group-addon" id="txtnombre">Nombre</span>
                <input type="text" name="txtMes" class="form-control" placeholder="Meses" aria-describedby="basic-addon1"required>
        </div>
          <br>
          <div >
                <input type="submit"  class="btn btn-primary" role="button" value="Guardar"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
          </div>

      </div>
      <!-- se aplican margenes para las columnas-->

       

        
          <br>
   
          <br>
          <br>
        </form>
      </div>
      </section>
      </div>
  </body>
</html>
