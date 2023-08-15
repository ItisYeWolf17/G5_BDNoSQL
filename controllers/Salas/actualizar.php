<?php
    require_once './sala_controller.php';
    require_once '../../includes/database.php';

    $sala = new SalaController();

    $id = $_POST['id'];

    $datos = array(
        "nombre" => $_POST['nombre'],
        "capacidad" => $_POST['capacidad'],
        "tipo_sala" => $_POST['tipo_sala']
    );

    $respuesta = $sala->update($id,$datos);

    if($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0){
        header("location:../../views/Salas/sala.php");
    }else{
        print_r($respuesta);
    }

