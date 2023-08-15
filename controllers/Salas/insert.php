<?php
    require_once '../../includes/database.php';

    require_once "./sala_controller.php";

    $sala = new SalaController();

    $datos = array(
        "_id" => $_POST['_id'],
        "nombre" => $_POST['nombre'],
        "capacidad" => $_POST['capacidad'],
        "tipo_sala" => $_POST['tipo_sala']
    );

    $respuesta = $sala->insertarDatos($datos);

    if($respuesta->getInsertedId() > 0){
        header("location:../../views/Salas/sala.php");
    }else{
        print_r($respuesta);
    }