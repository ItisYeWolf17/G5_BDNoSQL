<?php

    require_once '../../includes/database.php';
    require_once './reserva_controller.php';

    $funcion = new ReservaController();

    $id = $_POST['id'];

    $respuesta = $funcion->delete($id);

    if($respuesta->getDeletedCount() > 0){
        header("location:../../views/Reservas/reserva.php");
    }else{
        print_r($respuesta);
    }