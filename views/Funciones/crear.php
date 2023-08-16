<?php
    include '../layout/admin_header.php';
?>
    <h2 class="titulo-crud">AGREGAR FUNCION</h2>

    <div class="formulario-crear">
        <form action="../../controllers/Funciones/insert.php" method="POST">

            <label for="_id">ID</label>
            <input type="text" name="_id" id="_id" required>

            <label for="pelicula">Pelicula</label>
            <input type="text" name="pelicula" id="pelicula" required >

            <label for="sala">Sala</label>
            <input type="text" name="sala" id="sala" required >

            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha" required >

            <label for="hora">Hora</label>
            <input type="text" name="hora" id="hora" required >

            <label for="precio">Precio</label>
            <input type="text" name="precio" id="precio" required>

            <button>
                Agregar
            </button>
        </form>
    </div>

<?php
    include '../layout/admin_scripts.php';
?>