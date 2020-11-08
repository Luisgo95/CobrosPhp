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

        <form action="../Controlador/Afiliados/control.ingresar.php" method="post" >
          <h1>Ingreso de afiliado</h1>
          <div class="col-xs-12 col-sm-8  col-md-5">
          <br>
          <div class="input-group">
                <span class="input-group-addon" id="txtnombre">Nombre</span>
                <input type="text" name="txtNombre" class="form-control"
                placeholder="Nombre" aria-describedby="basic-addon1"required>
        </div>
          <br>
          <div class="input-group">
                <span class="input-group-addon" id="txtApellido ">Apellido</span>
                <input type="text" name="txtApellido" class="form-control"
                placeholder="Apellido" aria-describedby="basic-addon1"required>
        </div>
        <br>
          <!-- <div class="input-group">
                    <span class="input-group-addon" id="txtMarca">Marcas</span>
                       <select name="idMarca" class="form-control">
                         <?php
                        //  if(isset($_SESSION['ModeloSession'])){
                        //     echo '<option value="'.$_SESSION['IdModeloSession'].'">'.$_SESSION['ModeloSession'].'</option>';
                        //  }
                          ?>
                            <option value="0">Seleccione:</option>
                         <?php
                        //     require'../Modelo/class.conexion.php';
                        //  $modelo1 = new Conexion();
                        //  $conexion1 = $modelo1->get_conexion();
                        //  $sql = ("call ListMarca");
                        //  $statement1 = $conexion1->prepare($sql);
                        //    $statement1->execute();
                        //    while ($row1 = $statement1->fetch()) {
                        //      echo '<option value="'.$row1['idMarca'].'">'.$row1['Nombre'].'</option>';
                        //    }
                         ?>
                       </select>
          </div> -->
<!-- 
          <div class="input-group">
                    <span class="input-group-addon" id="txtModelo">Modelo</span>
                       <select name="idModelo" class="form-control">
                    <?php
                        //  if(isset($_SESSION['ModeloSession'])){
                        //     echo '<option value="'.$_SESSION['IdModeloSession'].'">'.$_SESSION['ModeloSession'].'</option>';
                        //  }
                          ?>
                        <option value="0">Seleccione:</option> -->
                       <?php 

                        //  $modelo1 = new Conexion();
                        //  $conexion1 = $modelo1->get_conexion();
                        //  $sql = ("call ListModelo");
                        //  $statement1 = $conexion1->prepare($sql);
                        //    $statement1->execute();
                        //    while ($row1 = $statement1->fetch()) {
                        //      echo '<option value="'.$row1['idModelo'].'">'.$row1['nombreModelo'].'</option>';
                        //    }
                         ?>
                       <!-- </select> -->
          <!-- </div> -->
          <!-- <br> -->
   

      </div>
      <!-- se aplican margenes para las columnas-->
      <div class="col-xs-12 col-sm8 col-md-5">
  <br>
          <div class="input-group">
                <span class="input-group-addon" id="txtTelefono">Telefono</span>
                <input type="text" name="txtTelefono" class="form-control"
                placeholder="Telefono" aria-describedby="basic-addon1"required>
        </div>
          <br>
          <div class="input-group">
                <span class="input-group-addon" id="txtDpi ">DPI</span>
                <input type="text" name="txtDpi" class="form-control"
                placeholder="DPI" aria-describedby="basic-addon1"required>
        </div>
    
        <br>

     

          <br>
          <div >
                <input type="submit"  class="btn btn-primary" role="button" value="Guardar"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
          </div>
          <br>
          <br>
      </form>
        </div>
      </section>
      </div>
  </body>
</html>
