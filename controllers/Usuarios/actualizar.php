<?php
    require_once './usuario_controller.php';
    require_once '../../includes/database.php';

    $usuario = new UsuarioController();

    $id = $_POST['id'];

    $datos = array(
        "nombre" => $_POST['nombre'],
        "apellidos" => $_POST['apellidos'],
        "cedula" => $_POST['cedula'],
        "email" => $_POST['email'],
        "password" => $_POST['password'],
        "token" => $_POST['token'],

    );

    $respuesta = $usuario->update($id,$datos);

    if($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0){
        header("location:../../views/Usuarios/user.php");
    }else{
        print_r($respuesta);
    }

