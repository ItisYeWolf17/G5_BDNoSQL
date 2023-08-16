<?php
    require_once '../../includes/database.php';

    require_once "./pelicula_controller.php";

    $peliculas = new PeliculaController();

    $datos = array(
        "_id" => $_POST['_id'],
        "titulo" => $_POST['titulo'],
        "director" => $_POST['director'],
        "descripcion" => $_POST['descripcion'],
        "genero" => $_POST['genero'],
        "duracion" => $_POST['duracion'],
        "estreno" => $_POST['estreno'],
        "img" => $_POST['img'],
        "prox" => $_POST['prox']


    );

    $respuesta = $peliculas->insertarDatos($datos);

    if($respuesta->getInsertedId() > 0){
        header("location:../../views/Peliculas/pelicula.php");
    }else{
        print_r($respuesta);
    }