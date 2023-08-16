<?php
    include '../layout/header_init.php';
    require_once '../../Controllers/Peliculas/pelicula_controller.php';

    $peliculas = new PeliculaController();

    $movie = $peliculas->listarCartelera();
?>
 
        <!-- Contenido de la página de cartelera aquí -->
        <div class="cartelera-container">
           

    <!-- Agregar una nueva sección para el título "Cartelera" -->
    <section class="titulo-cartelera">
        <h1>Cartelera</h1>
    </section>
            <ul class="peliculas-lista peliculas-lista-grid"> <!-- Use the new class for grid layout -->
                <?php
                    foreach($movie as $pelicula){
                ?>
                <li>
                    <div class="tarjeta">
                        <a href="#">
                            <input type="text" hidden>
                            <img src="<?php echo $pelicula->img?>" alt="Película 1" class="pelicula-imagen">
                        </a>
                        <div class="contenido-tarjeta">
                            <h3 class="nombre-pelicula"><?php echo $pelicula->titulo?></h3>
                            <p class="descripcion-pelicula"><?php echo $pelicula->duracion;?> | <?php echo $pelicula->genero;?></p>
                        </div>
                        <form method="post" action="./peliculas.php">
                            <input type="text" name="id" id="id" hidden value="<?php echo $pelicula->_id?>">
                            <button type="submit" class="log">
                                Ver Horario
                            </button>
                        </form>
                    </div>
                </li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>
