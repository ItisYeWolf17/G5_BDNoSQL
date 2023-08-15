<?php
    require_once './reserva_controller.php';
    require_once '../../includes/database.php';

    $reserva = new ReservaController();

    $id = $_POST['id'];

    $datos = array(
        "usuario" => $_POST['usuario'],
        "funcion" => $_POST['funcion'],
        "kids" => $_POST['kids'],
        "adult" => $_POST['adult'],
        "older" => $_POST['older'],
        "total" => $_POST['total']
    );

    $respuesta = $reserva->update($id,$datos);

    if($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0){
        header("location:../../views/Reservas/reserva.php");
    }else{
        print_r($respuesta);
    }

