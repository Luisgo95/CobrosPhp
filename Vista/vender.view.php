<?php include ('menu.view.php'); ?>
<!DOCTYPE html>
<br>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Remitentes</title>
  </head>
  <body>
      <br><br><br>
      <div class="container  ">
        <section class="main row">

        <form action="../Controlador/Ventas/control.ventas.php" method="post" >
          <h1>Confirmar Venta</h1>
          <div class="col-xs-5 col-sm- 5 col-md-5">
          <br>
          <div class="input-group">
                <span class="input-group-addon" id="txtnombre">imei</span>
                <input type="number" name="imeiCel" class="form-control"
                placeholder="imei" aria-describedby="basic-addon1" value="<?php
                if (isset($_GET['a'])) {
           echo  $_GET['a'];
          }?>"required readonly='true'>

        </div>
          <br>

          <div class="input-group">
                    <span class="input-group-addon" id="txtMarca">Marca:</span>
                       <select name="idMarca" class="form-control">
                         <?php
                          if(isset($_GET['b'])){

                             echo '<option value="'.$_GET['c'].'">'.$_GET['b'].'</option>';

                         }
                          ?>
                            <option value="0">Seleccione:</option>
                         <?php
                            require'../Modelo/class.conexion.php';
                         $modelo1 = new Conexion();
                         $conexion1 = $modelo1->get_conexion();
                         $sql = ("call ListMarca");
                         $statement1 = $conexion1->prepare($sql);
                           $statement1->execute();
                           while ($row1 = $statement1->fetch()) {
                             echo '<option value="'.$row1['idMarca'].'">'.$row1['Nombre'].'</option>';
                           }
                         ?>
                       </select>
          </div>
          <br>
          <div class="input-group">
                    <span class="input-group-addon" id="txtModelo">Modelo</span>
                       <select name="idModelo" class="form-control">
                         <?php
                         if(isset($_GET['e'])){
                           echo '<option value="'. $_GET['e'].'">'. $_GET['d'].'</option>';
                         }
                          ?>
                            <option value="<?php echo  $_GET['c'];  ?>">Seleccione:</option>
                         <?php

                         $modelo1 = new Conexion();
                         $conexion1 = $modelo1->get_conexion();
                         $sql = ("call ListModelo");
                         $statement1 = $conexion1->prepare($sql);
                           $statement1->execute();
                           while ($row1 = $statement1->fetch()) {
                             echo '<option value="'.$row1['idModelo'].'">'.$row1['nombreModelo'].'</option>';
                           }
                         ?>
                       </select>
          </div>
          <br>
            <div class="input-group">
                  <span class="input-group-addon" id="txtColor">Color</span>
                  <input type="text" name="color"class="form-control" placeholder="Color" aria-describedby="basic-addon1"required value="<?php echo  $_GET['f'];?>">
          </div>


      </div>
      <!-- se aplican margenes para las columnas-->
      <div class="col-xs-12 col-sm8 col-md-5">
        <br>
        <div class="input-group">
            <span class="input-group-addon" id="txtVenta">Precio Venta</span>
            <input type="number"  step="0.01" name="pVenta"class="form-control" placeholder="Precio de Venta" aria-describedby="basic-addon1"required value="<?php echo  $_GET['g'];?>" >
        </div>
        <br>
        <div class="input-group">
    <span class="input-group-addon" id="txtfecha">Fecha de Venta</span>
    <input type="date" name="FechaVenta" class="form-control" placeholder="Fecha" aria-describedby="basic-addon1"required value="<?php echo date("Y-m-d");?>">
  </div>

<br>
  <div class="input-group">
<input type="hidden" name="fechaIngreso" class="form-control" placeholder="Fecha" aria-describedby="basic-addon1"  value="<?php echo $_GET['h'];?>" >
</div>

<br>
<div class="input-group">

    <input type="hidden"  step="0.01" name="pCompra"class="form-control" placeholder="Precio de Compra" aria-describedby="basic-addon1"required value="<?php echo  $_GET['i'];?>" >
</div>


          <br>
          <div >
                <input type="submit"  class="btn btn-primary" role="button" value="Vender"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
          </div>
          <br>

          <br>
          <br>
          <br>
      </form>
        </div>
      </section>
      </div>
  </body>
</html>
