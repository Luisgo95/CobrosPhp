<?php

include('class.conexion.php');
class Egresos{
  public function insertarEgreso($descripcion,$cantidad,$fecha){
  try {
      $modelo = new Conexion();
      $conexion = $modelo->get_conexion();
      $sql = "insert into egresos(descripcion,cantidad,fecha) 
      value(:descripcion,:cantidad,:fecha)";
      $statement= $conexion->prepare($sql);
      $statement->bindParam(':descripcion', $descripcion);
      $statement->bindParam(':cantidad', $cantidad);
      $statement->bindParam(':fecha', $fecha);

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


    public function editarEgresos($IdEgreso,$descripcion,$cantidad,$fecha){
  try {
    $modelo = new Conexion();
    $conexion = $modelo->get_conexion();
    $sql = "update egresos set descripcion=:descripcion,
    cantidad=:cantidad,
    fecha=:fecha
    where idEgresos=:idEgreso;";
    $statement = $conexion->prepare($sql);
    $statement->bindParam(':descripcion', $descripcion);
    $statement->bindParam(':cantidad', $cantidad);
    $statement->bindParam(':fecha', $fecha);
    $statement->bindParam(':idEgreso', $idEgreso);
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

      public function BorrarEgreso($IdMar){

    $modelo = new Conexion();
    $conexion = $modelo->get_conexion();
    $sql = "  delete from Egresos where idEgreso = :IdMar";
    $statement= $conexion->prepare($sql);
    $statement->bindParam(':IdMar', $IdMar);
    if (!$statement) {
      return "Error al crear el registro";
    }else {
        $statement->execute();
      return  "Registro Borrado";
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
