<?php

    require_once '../../includes/database.php';
    require_once './usuario_controller.php';

    $usuario = new UsuarioController();

    $id = $_POST['id'];

    $respuesta = $usuario->delete($id);

    if($respuesta->getDeletedCount() > 0){
        header("location:../../views/Usuarios/user.php");
    }else{
        print_r($respuesta);
    }