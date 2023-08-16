<?php
    require_once '../../includes/database.php';

    require_once "./usuario_controller.php";

    $usuario = new UsuarioController();

    $id = $usuario->obtenerCantidad();

    $id = $id + 1;

    $token = 2;

    $datos = array(
        "_id" => $id,
        "nombre" => $_POST['nombre'],
        "apellidos" => $_POST['apellidos'],
        "cedula" => $_POST['cedula'],
        "email" => $_POST['email'],
        "password" => $_POST['password'],
        "token" => $token,

    );

    $respuesta = $usuario->insertarDatos($datos);

    if($respuesta->getInsertedId() > 0){
        header("location:../../views/Usuarios/login.php");
    }else{
        print_r($respuesta);
    }
