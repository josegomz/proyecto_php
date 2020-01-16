<?php
  include '../db/conexion.php';
  //require
  //require_once

  class UserModel
  {
    
    public function crearRegistro($user)
    {
      // code...
      try{
        $conexion = new Conexion();
        $db = $conexion->getConnection();
        $querySQL = "INSERT INTO user(name, username, password) VALUES(:varName, :varUsername, :varPassword)";
        $statement=$db->prepare($querySQL);

        $varName=$user->getName();
        $varUsername=$user->getUsername();
        $varPassword=$user->getPassword();
        
        $statement->bindParam(':varName',$varName);
        $statement->bindParam(':varUsername',$varUsername);
        $statement->bindParam(':varPassword',$varPassword);
        $statement->execute();
        echo "Insercion exitosa";
      }catch(PDOException $e){
        echo "Error de insercion de datos".$e->getMessage();
        die();
      }
    }
    public function eliminarRegistro($user)
    {
      // code...
      try{
        $conexion = new Conexion();
        $db = $conexion->getConnection();
        $querySQL = "DELETE FROM user WHERE id=:idUser";
        $statement=$db->prepare($querySQL);
        $idUser=$user->getId();
        $statement->bindParam(':idUser',$idUser);
        $statement->execute();
      }catch(PDOException $e){
        echo "Error al eliminar el registro".$e->getMessage();
        die();
      }
      
    }
    public function actualizarRegistro()
    {
      // code...
    }
    public function mostrarRegistro()
    {
      // code...
    }
    public function mostrarRegistros()
    {
      try{
        # code...
        $conexion = new Conexion();
        $db = $conexion->getConnection();
        $querySQL = "SELECT * FROM user";
        $statement=$db->prepare($querySQL);
        $statement->execute();
        while($resultSet = $statement->fetch()){
          $rowResultSet[]=$resultSet;
        }
        return $rowResultSet;
      }catch(PDOException $e){
        echo "error de lectura ".$e->getMessage();
        die();
      }
    } 
  }
 ?>
