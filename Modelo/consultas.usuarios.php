<?php

include('class.conexion.php');
class Usuario{
  public function InsertarUsuario($Nombre,$Contra){

      $modelo = new Conexion();
      $conexion = $modelo->get_conexion();

    //  $Contra2 = hash('sha512', $Contra );

      $sql = "insert into usuarios(usuario,password)  value(:Nombre,:Contrase)";

      $statement= $conexion->prepare($sql);
      $statement->bindParam(':Nombre', $Nombre);
      $statement->bindParam(':Contrase', $Contra);
      if (!$statement) {
        return "Error al crear el registro";
      }else {
          $statement->execute();
        return  "Registro Ingresado";
        echo "Ingresado";
      }
    }

    public function updateUsuario($IdUsuario,$Nombre,$Contra){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
      //  $Contra2 = hash('sha512', $Contra );
        $sql = "CALL UpdateUser(:IdUsu,:Usuario,:Contrase)";
        $statement= $conexion->prepare($sql);
        $statement->bindParam(':IdUsu', $IdUsuario);
        $statement->bindParam(':Usuario', $Nombre);
        $statement->bindParam(':Contrase', $Contra);

        if (!$statement) {
          return "Error al crear el registro";
        }else {
            $statement->execute();
          return  "Registro Ingresado";
          echo "Ingresado";
        }
      }

}
 ?>
