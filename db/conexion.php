<?php
  class Conexion
  {  
    private $host="localhost";
    private $user="root";
    private $pwd="";
    private $dbname="phpmvc";
    private $conexion;
    #funcion para la conexion a la base de datos mysql
    function getConnection(){
      try{
        $conexion= new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->user,$this->pwd);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;
      }catch(PDOException $e){
        echo "Error de conexion: ".$e->getMessage();
        die();
      }
    }
  }
?>
