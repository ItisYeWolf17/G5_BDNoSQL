<?php
    include '../layout/admin_header.php';
?>
    <h2 class="titulo-crud">AGREGAR PELICULA</h2>

    <div class="formulario-crear">
        <form action="../../controllers/Salas/insert.php" method="POST">

            <label for="_id">ID</label>
            <input type="number" name="_id" id="_id" required>

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required >

            <label for="capacidad">Capacidad</label>
            <input type="text" name="capacidad" id="capacidad" >

            <label for="tipo_sala">Tipo de Sala</label>
            <input type="text" name="tipo_sala" id="tipo_sala">

            <button>
                Agregar
            </button>
        </form>
    </div>

<?php
    include '../layout/admin_scripts.php';
?>