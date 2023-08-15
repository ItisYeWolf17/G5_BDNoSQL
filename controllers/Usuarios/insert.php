<?php
    require_once '../../includes/database.php';

    require_once "./usuario_controller.php";

    $usuario = new UsuarioController();

    $datos = array(
        "_id" => $_POST['_id'],
        "nombre" => $_POST['nombre'],
        "apellidos" => $_POST['apellidos'],
        "cedula" => $_POST['cedula'],
        "email" => $_POST['email'],
        "password" => $_POST['password'],
        "token" => $_POST['token'],

    );

    $respuesta = $usuario->insertarDatos($datos);

    if($respuesta->getInsertedId() > 0){
        header("location:../../views/Usuarios/user.php");
    }else{
        print_r($respuesta);
    }