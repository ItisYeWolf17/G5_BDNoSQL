<?php

    require_once '../../includes/database.php';
    require_once './sala_controller.php';

    $sala = new SalaController();

    $id = $_POST['id'];

    $respuesta = $sala->delete($id);

    if($respuesta->getDeletedCount() > 0){
        header("location:../../views/Salas/sala.php");
    }else{
        print_r($respuesta);
    }