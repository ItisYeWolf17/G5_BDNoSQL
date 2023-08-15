<?php
    require_once './funcion_controller.php';
    require_once '../../includes/database.php';

    $sala = new FuncionController();

    $id = $_POST['id'];

    $datos = array(
        "pelicula" => $_POST['pelicula'],
        "sala" => $_POST['sala'],
        "fecha" => $_POST['fecha'],
        "hora" => $_POST['hora'],
        "precio" => $_POST['precio']

    );

    $respuesta = $sala->update($id,$datos);

    if($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0){
        header("location:../../views/Funciones/funcion.php");
    }else{
        print_r($respuesta);
    }

