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
    public function editarEgreso($IdEgreso,$descripcion,$cantidad,$fecha){


    try {
        $Recibo = new Conexion();
        $conexion = $Recibo->get_conexion();

        $sql = "
        update egresos set descripcion=:descripcion,
        cantidad=:cantidad,
        fecha=:fecha
        where idEgresos=:id;
        ";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id', $IdEgreso);
        $statement->bindParam(':descripcion', $descripcion);
        $statement->bindParam(':cantidad', $cantidad);

        $statement->bindParam(':fecha',$fecha );


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



      public function Borrar($Id){

    $modelo = new Conexion();
    $conexion = $modelo->get_conexion();
    $sql = "delete from Egresos where idEgresos = :IdMar";
    $statement= $conexion->prepare($sql);
    $statement->bindParam(':IdMar', $Id);
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
