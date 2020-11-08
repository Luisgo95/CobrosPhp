<?php

include('class.conexion.php');
class Saldos{
  public function ConsultarSaldo($Inicio,$Fin){
try {
      $Recibo = new Conexion();
      $conexion = $Recibo->get_conexion();
      $sql = "select 
      SUM(ingreso.cantidad)-
      SUM(egreso.cantidad)      
       as Saldo
      from egresos egreso,recibos ingreso where ingreso.fecha between :Inicio and :Fin
      and egreso.fecha between :Inicio and :Fin";
      $statement= $conexion->prepare($sql);
      $statement->bindParam(':Inicio',$Inicio );
      $statement->bindParam(':Fin', $Fin);
      if (!$statement) {
        return "Error al crear el registro";
      }else {
        $statement->execute();

        $resultado = $statement -> fetch();
          $_SESSION['Saldo'] = $resultado['Saldo'];

        
         return  $_SESSION['Saldo'];
        // echo "Ingresado";
      }
    } catch (\Exception $e) {
      echo $e;
    }
    }





    public function editarRecibo($Codigo,$Nombre){
  try {
    $Recibo = new Conexion();
    $conexion = $Recibo->get_conexion();

    $sql = "call UpdateRecibo(:IdMod,:nombre);";
    $statement = $conexion->prepare($sql);
    $statement->bindParam(':IdMod', $Codigo);
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
