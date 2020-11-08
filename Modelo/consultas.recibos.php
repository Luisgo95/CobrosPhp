<?php

include('class.conexion.php');
class Recibos{
  public function insertarRecibo($idAfiliado,$afiliado,$descripcion,$cantidad,$idMes,$fecha){
try {
      $Recibo = new Conexion();
      $conexion = $Recibo->get_conexion();
      $sql = "insert into recibos(descripcion,cantidad,idMes,fecha,idAfiliado) value(:descripcion,:cantidad,:idMes,:fecha,:idAfiliado)";
      $statement= $conexion->prepare($sql);
      $statement->bindParam(':descripcion',$descripcion );
      $statement->bindParam(':cantidad', $cantidad);
      $statement->bindParam(':idMes', $idMes );
      $statement->bindParam(':fecha', $fecha );
      $statement->bindParam(':idAfiliado', $idAfiliado);

      if (!$statement) {
        return "Error al crear el registro";
      }else {
          $statement->execute();
        
         return  "Registro Ingresado";
        // echo "Ingresado";
      }
    } catch (\Exception $e) {
      echo $e;
    }
    }





    public function editarRecibo($descripcion,$cantidad,$idMes,$fecha,$idAfiliado,$idRecibo){
  try {
    $Recibo = new Conexion();
    $conexion = $Recibo->get_conexion();

    $sql = "
    update recibos set descripcion=:descripcion,
        cantidad=:cantidad,
        idMes=:idMes,
        fecha=:fecha,
        idAfiliado =:idAfiliado
        where idRecibo=:idRecibo;
    ";
    $statement = $conexion->prepare($sql);
    $statement->bindParam(':descripcion', $descripcion);
    $statement->bindParam(':cantidad', $cantidad);
    $statement->bindParam(':idMes', $idMes);
    $statement->bindParam(':fecha',$fecha );
    $statement->bindParam(':idAfiliado', $idAfiliado);
    $statement->bindParam(':idRecibo', $idRecibo );

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



      public function BorrarRecibo($IdMo){

    $Recibo = new Conexion();
    $conexion = $Recibo->get_conexion();
    $sql = " delete  from Recibo where idRecibo = :IdMod";
    $statement= $conexion->prepare($sql);
    $statement->bindParam(':IdMod', $IdMo);
    if (!$statement) {
      return "Error al crear el registro";
    }else {
        $statement->execute();
      return  "Registro Borrado";
      echo "Ingresado";
    }
  }



    /**public function updateUsuario($IdUsuario,$Nombre,$Contra){
        $Recibo = new Conexion();
        $conexion = $Recibo->get_conexion();
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
