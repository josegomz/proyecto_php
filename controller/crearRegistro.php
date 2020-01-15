<?php 
    require_once '../entity/user.php';
    require_once '../model/userModel.php';

    $user= new User();

    $user->setName(filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS));
    $user->setUsername(filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS));
    $user->setPassword(filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS));
    $model = new userModel();
    $model->crearRegistro($user);

?>