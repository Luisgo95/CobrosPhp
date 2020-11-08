<?php

include('class.conexion.php');
class Mes{
  public function insertarMes($mes){
  try {
      $modelo = new Conexion();
      $conexion = $modelo->get_conexion();
      $sql = "insert into mes(nombre)  value(:Mes)";
      $statement= $conexion->prepare($sql);
      $statement->bindParam(':Mes', $mes);

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


    public function editarMes($Codigo,$Nombre){
  try {
    $modelo = new Conexion();
    $conexion = $modelo->get_conexion();

    $sql = "update mes set nombre=:nombre
    where id =:codigo";
    $statement = $conexion->prepare($sql);
    $statement->bindParam(':codigo', $Codigo);
    $statement->bindParam(':nombre', $Nombre);

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

      public function BorrarMeses($IdMar){

    $modelo = new Conexion();
    $conexion = $modelo->get_conexion();
    $sql = "  delete from Mesess where idMeses = :IdMar";
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
