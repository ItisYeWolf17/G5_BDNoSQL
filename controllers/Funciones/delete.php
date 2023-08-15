<?php

    require_once '../../includes/database.php';
    require_once './funcion_controller.php';

    $funcion = new FuncionController();

    $id = $_POST['id'];

    $respuesta = $funcion->delete($id);

    if($respuesta->getDeletedCount() > 0){
        header("location:../../views/Funciones/funcion.php");
    }else{
        print_r($respuesta);
    }