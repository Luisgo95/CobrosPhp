<?php

include('class.conexion.php');
class Ventas{
  public function insertarVenta($imeiA,$idModeloA,$idMarcaA,$ColorA,$PcompraA,$PVentaA, $userA,$FechaVenta,$FechaIngreso){
try {
      $modelo = new Conexion();
      $conexion = $modelo->get_conexion();
      $sql = "CALL InsertarTelefonoVendido(:imei,:idModelo,:idMarca,:Color,:Pcompra,:PVenta,:fechaIng,:user,:Fecha)";
      $statement= $conexion->prepare($sql);
      $statement->bindParam(':imei', $imeiA);
      $statement->bindParam(':idModelo',$idModeloA );
      $statement->bindParam(':idMarca', $idMarcaA);
      $statement->bindParam(':Color', $ColorA );
      $statement->bindParam(':Pcompra',$PcompraA );
      $statement->bindParam(':PVenta',$PVentaA );
      $statement->bindParam(':fechaIng',$FechaIngreso );
      $statement->bindParam(':user',$userA );
      $statement->bindParam(':Fecha',$FechaVenta );
      if (!$statement) {
        return "Error al crear el registro";
      }else {
          $statement->execute();
        return  "Registro Ingresado";
        echo "Ingresado";
      }
    } catch (\Exception $e) {
      echo $e;
    }
    }


    public function montoDelAl(){

          $modelo = new Conexion();
          $conexion = $modelo->get_conexion();

          $sql = "select sum(precioVenta)  as TotalDia
          from TelefonosVendidos where
          fechaVenta between :FechaDel and :FechaAl";

          $statement= $conexion->prepare($sql);
          $statement->bindParam(':FechaDel',$_SESSION['fechaDelCel']);
          $statement->bindParam(':FechaAl',$_SESSION['fechaAlCel']);
          if (!$statement) {
            return "Error al crear el registro";
          }else {
              $statement->execute();

              $resultado = $statement -> fetch();
                $_SESSION['MontoSumaDia'] = $resultado['TotalDia'];

            return  "Registro Ingresado";
            echo "Ingresado";
          }
        }

    /**public function updateUsuario($IdUsuario,$Nombre,$Contra){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $Contra2 = hash('sha512', $Contra );
        $sql = "CALL UpdateUsuario(:IdUsu,:Usuario,:Contrase)";
        $statement= $conexion->prepare($sql);
        $statement->bindParam(':IdUsu', $IdUsuario);
        $statement->bindParam(':Usuario', $Nombre);
        $statement->bindParam(':Contrase', $Contra2);

        if (!$statement) {
          return "Error al crear el registro";
        }else {
            $statement->execute();
          return  "Registro Ingresado";
          echo "Ingresado";
        }
      }*/

}
 ?>
