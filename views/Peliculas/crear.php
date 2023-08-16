<?php
    include '../layout/admin_header.php';
?>
    <h2 class="titulo-crud">AGREGAR PELICULA</h2>

    <div class="formulario-crear">
        <form action="../../controllers/Peliculas/insert.php" method="POST">

            <label for="_id">ID</label>
            <input type="number" name="_id" id="_id" required>

            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" required >

            <label for="director">Director</label>
            <input type="text" name="director" id="director" required >

            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" required >

            <label for="genero">Genero</label>
            <input type="text" name="genero" id="genero" required >

            <label for="duracion">Duracion</label>
            <input type="text" name="duracion" id="duracion" required >

            <label for="estreno">Estreno</label>
            <input type="date" name="estreno" id="estreno" required >

            <label for="img">Imagen</label>
            <input type="text" name="img" id="img" required >

            <label for="prox">Proximamente</label>
            <input type="number" name="prox" id="prox" required >

            <button>
                Agregar
            </button>
        </form>
    </div>

<?php
    include '../layout/admin_scripts.php';
?>