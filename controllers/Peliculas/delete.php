<?php

    require_once '../../includes/database.php';
    require_once './pelicula_controller.php';

    $pelicula = new PeliculaController();

    $id = $_POST['id'];

    $respuesta = $pelicula->delete($id);

    if($respuesta->getDeletedCount() > 0){
        header("location:../../views/Peliculas/pelicula.php");
    }else{
        print_r($respuesta);
    }