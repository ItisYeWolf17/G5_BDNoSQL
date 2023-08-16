<?php

    require_once './usuario_controller.php';

    $usuario = new UsuarioController();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["email"];
        $password = $_POST["password"];

        $user = $usuario->validarUsuario($username,$password);

        if($user){
            session_start();
            $_SESSION["user"] = $user->nombre . " " .$user->apellidos;
            if($user->token == 1){
                header("location: ../../views/admin/main_menu.php");
            }else{
                header("location: ../../views/index.php");
            }
            exit();
        }else{
            $error = "Correo o contraseña incorrectos!";
        }
    }