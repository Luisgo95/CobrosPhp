<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minumum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/estilos/estilo.css">
    <link rel="stylesheet" href="../css/estilo.css">
    
    <!-- vinculacion con bootstrap -->

    <title>Iniciar Sesión</title>
  </head>
  <body>
    <div class="contenedor">
    <h1 class="titulo">Cobros de Agua potable</h1>
    <h1 class="titulo">Inicia Sesión</h1>
    <hr class="border">
  <form action="../Controlador/login.php" method="post" class="formulario" >
  <div class="form-group">
      <!-- <i class="icono izquierda fa fa-user"></i> -->
     <input type="text" name="usuario" class="usuario" placeholder="Usuario" required="True">
  </div>
<div class="form-group">
    <!-- <i class="icono izquierda fa fa-lock"></i> -->
    <input type="password" name="password" class="usuario" placeholder="Contraseña" required="True">
</div>

<div class="form-group">
    <button  type="submit" class="btn btn-primary" name="login">Iniciar Sesion</button>
</div>

<?php
session_start();
 if (isset($_SESSION['ErrorLogin'])) {?>
  <div ="error">
    <ul>
      <?php echo $_SESSION['ErrorLogin']; ?>
    </ul>
  </div>
<?php } ?>
</div>
</form>

</div>
  </body>
  <footer>
    <h2 class="texto-resgistrate">Derechos Reservados </h2>
    <h2 class="texto-resgistrate">2020 </h2>
  </footer>