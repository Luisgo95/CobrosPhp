<?php //session_start();
include('class.conexion.php');
class Loguearse{
  public function Validar($User,$contra){
  /**if (isset($_SESSION['usuario'])) {
    header('Location: ../vistas/index.php');
  }*/
  //require_once('class.conexion.php');
  $errores='';
  //if ($_SERVER['REQUEST_METHOD']=='POST') {
      $usuario = $User;
    //  $password = hash('sha512', $contra );
    $password = $contra ;
      try {
      $modelo = new Conexion();
      $conexion = $modelo->get_conexion();
      $statement = $conexion -> prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password');
      $statement -> execute(array( ':usuario' => $usuario, ':password' => $password));
      $resultado = $statement -> fetch();
    }catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
        session_start();
     $errores='Datos Incorrectos';
     $_SESSION['ErrorLogin'] = $errores;
    }
      if ($resultado !== false) {
       session_start();
        $_SESSION['IdUsuarioCel'] = $resultado['idUsuario'];
        $_SESSION['usuarioCel'] = $resultado['usuario'];
        header('Location: ../Vista/Bienvenido.php');
    }else if($resultado == false) {

      session_start();
      $errores='Datos Incorrectos';
      $_SESSION['ErrorLogin'] = $errores;
     header('Location: ../index.php');
    //var_dump($resultado);
      }

  //}
  }
}
 ?>
