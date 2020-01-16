<?php
    require_once '../entity/user.php';
    require_once '../model/userModel.php';

    $user= new User();

    $user->setId(filter_input(INPUT_GET,'userid',FILTER_SANITIZE_SPECIAL_CHARS));

    echo "".$user->getId();
    $model = new userModel();
    $model->eliminarRegistro($user);
    header('Location: ../view/obtenerRegistros.php');


?>