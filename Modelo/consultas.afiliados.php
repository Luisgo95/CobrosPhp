<?php

include('class.conexion.php');
class AFiliado{
  public function insertarAfiliado($nombre,$apellido,$telefono,$dpi){
try {
      $modelo = new Conexion();
      $conexion = $modelo->get_conexion();
      $sql = "insert into afiliados(nombre,apellido,telefono,dpi)  value(:nombre,:apellido,:telefono,:dpi)";
      $statement= $conexion->prepare($sql);
      $statement->bindParam(':nombre', $nombre);
      $statement->bindParam(':apellido',$apellido );
      $statement->bindParam(':telefono', $telefono);
      $statement->bindParam(':dpi', $dpi );
      
      if (!$statement) {
        return "Error al crear el registro";
      }else {
          $statement->execute();
        return  "Registro Ingresado";
        echo "Ingresado";
      }
    } catch (Exception $e) {
      echo $e;
    }
    }

     public function BorrarAfiliado($id){

         $modelo = new Conexion();
         $conexion = $modelo->get_conexion();

         $sql = "   delete  from Afiliados where idAfiliado = :id";

         $statement= $conexion->prepare($sql);
         $statement->bindParam(':id', $id);
         if (!$statement) {
           return "Error al crear el registro";
         }else {
             $statement->execute();
           return  "Registro Borrado";
           echo "Ingresado";
         }
       }

       public function editarAfiliado($id,$nombre,$apellido,$telefono,$dpi){
        try {
              $modelo = new Conexion();
              $conexion = $modelo->get_conexion();
              $sql = "
              update afiliados set nombre=:nombre,
              apellido=:apellido,
              telefono=:telefono,
              dpi=:dpi
              where idAfiliado=:id
              ";
              $statement= $conexion->prepare($sql);
              $statement->bindParam(':nombre', $nombre);
              $statement->bindParam(':apellido',$apellido );
              $statement->bindParam(':telefono', $telefono);
              $statement->bindParam(':dpi', $dpi );
              $statement->bindParam(':id', $id );      
              if (!$statement) {
                return "Error al crear el registro";
              }else {
                  $statement->execute();
                return  "Registro Editado";
                echo "Ingresado";
              }
            } catch (Exception $e) {
              echo $e;
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
