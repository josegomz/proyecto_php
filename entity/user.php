<?php
  /**
   * Clase usuario
   */
  class User
  {
    private $id;
    private $name;
    private $username;
    private $password;

    function __construct($name,$username,$password)
    {
      // code...
      $this->name=$name;
      $this->username=$username;
      $this->password=$password;
    }
    public function getId(){
      return $this->id;
    }
    public function setId($id){
      $this->id=$id;
    }
    public function getName(){
      return $this->name;
    }
    public function setName($name){
      $this->name=$name;
    }
    public function getUsername(){
      return $this->username;
    }
    public function setUsername($username){
      $this->username=$username;
    }
    public function getPassword(){
      return $this->password;
    }
    public function setPassword($password){
      $this->password=$password;
    }
  }

 ?>
