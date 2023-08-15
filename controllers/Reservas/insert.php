<?php
    require_once '../../includes/database.php';

    require_once "./reserva_controller.php";

    $reserva = new ReservaController();

    $datos = array(
        "_id" => $_POST['_id'],
        "usuario" => $_POST['usuario'],
        "funcion" => $_POST['funcion'],
        "kids" => $_POST['kids'],
        "adult" => $_POST['adult'],
        "older" => $_POST['older'],
        "total" => $_POST['total']

    );

    $respuesta = $reserva->insertarDatos($datos);

    if($respuesta->getInsertedId() > 0){
        header("location:../../views/Reservas/reserva.php");
    }else{
        print_r($respuesta);
    }