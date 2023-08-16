<?php
    require_once './pelicula_controller.php';
    require_once '../../includes/database.php';

    $pelicula = new PeliculaController();

    $id = $_POST['id'];

    $datos = array(
        "titulo" => $_POST['titulo'],
        "director" => $_POST['director'],
        "descripcion" => $_POST['descripcion'],
        "genero" => $_POST['genero'],
        "duracion" => $_POST['duracion'],
        "estreno" => $_POST['estreno'],
        "img" => $_POST['img'],
        "prox" => $_POST['prox']
    );

    $respuesta = $pelicula->update($id,$datos);

    if($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0){
        header("location:../../views/Peliculas/pelicula.php");
    }else{
        print_r($respuesta);
    }

