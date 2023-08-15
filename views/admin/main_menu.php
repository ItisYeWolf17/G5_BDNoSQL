<?php
    include '../layout/admin_header.php';

?>

<h2 class="titulo-servicios">servicios</h2>

<section class="container-menu">

    <article class="card-servicio">
        <a href="../Usuarios/user.php" class="link">
            <div class="img-servicio">
                <img src="../assets/img/user.png" alt="">
            </div>
            <div class="info-servicio">
                <h4>Usuarios</h4>
            </div>
        </a>
    </article>

    <article class="card-servicio">
        <a href="../Peliculas/pelicula.php" class="link">
            <div class="img-servicio">
                <img src="../assets/img/Peliculas.jpg" alt="">
            </div>
            <div class="info-servicio">
                <h4>Peliculas</h4>
            </div>
        </a>
    </article>

    <article class="card-servicio">
        <a href="../Salas/sala.php" class="link">
            <div class="img-servicio">
                <img src="../assets/img/Salas.jpg" alt="">
            </div>
            <div class="info-servicio">
                <h4>Salas</h4>
            </div>
        </a>
    </article>

    <article class="card-servicio">
        <a href="./Ventas/ventas.php" class="link">
            <div class="img-servicio">
                <img src="./assets/img/ventas.avif" alt="">
            </div>
            <div class="info-servicio">
                <h4>Funciones</h4>
            </div>
        </a>
    </article>

    <article class="card-servicio">
        <a href="./Inventario/inventario.php" class="link">
            <div class="img-servicio">
                <img src="./assets/img/inventario.webp" alt="">
            </div>
            <div class="info-servicio">
                <h4>Reservas</h4>
            </div>
        </a>
    </article>

</section>

<?php
    include '../layout/admin_scripts.php';
?>
