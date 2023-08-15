<?php
    require_once '../../includes/database.php';

    require_once "./funcion_controller.php";

    $funcion = new FuncionController();

    $datos = array(
        "_id" => $_POST['_id'],
        "pelicula" => $_POST['pelicula'],
        "sala" => $_POST['sala'],
        "fecha" => $_POST['fecha'],
        "hora" => $_POST['hora'],
        "precio" => $_POST['precio']

    );

    $respuesta = $funcion->insertarDatos($datos);

    if($respuesta->getInsertedId() > 0){
        header("location:../../views/Funciones/funcion.php");
    }else{
        print_r($respuesta);
    }