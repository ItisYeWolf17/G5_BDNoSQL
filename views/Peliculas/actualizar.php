<?php
    include '../layout/admin_header.php';
    require_once "../../includes/database.php";
    require_once "../../controllers/Peliculas/pelicula_controller.php";

    $movie = new PeliculaController();

    $id = $_POST['id'];


    $pelicula = $movie->search($id);

    $_id = $pelicula -> _id;


?>
    <h2 class="titulo-crud">ACTUALIZAR PELICULA</h2>

    <div class="formulario-crear">
        <form action="../../controllers/Peliculas/actualizar.php" method="POST">
            <input type="text" hidden value="<?php echo $_id?>" name="id" id="name">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" required value="<?php echo $pelicula->titulo?>">

            <label for="director">Director</label>
            <input type="text" name="director" id="director" required value="<?php echo $pelicula->director?>">

            <label for="genero">Genero</label>
            <input type="text" name="genero" id="genero" required value="<?php echo $pelicula->genero?>">

            <label for="duracion">Duracion</label>
            <input type="text" name="duracion" id="duracion" required value="<?php echo $pelicula->duracion?>">

            <label for="estreno">Estreno</label>
            <input type="date" name="estreno" id="estreno" required value="<?php echo $pelicula->estreno?>">

            <label for="img">Imagen</label>
            <input type="text" name="img" id="img" required value="<?php echo $pelicula->img?>">

            <button>
                Actualizar
            </button>
        </form>
    </div>

<?php
    include '../layout/admin_scripts.php';
?>