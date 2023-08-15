<?php
    include '../layout/admin_header.php';
?>
    <h2 class="titulo-crud">AGREGAR USUARIO</h2>

    <div class="formulario-crear">
        <form action="../../controllers/Usuarios/insert.php" method="POST">

            <label for="_id">ID</label>
            <input type="number" name="_id" id="_id" required>

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" required>

            <label for="cedula">Cedula</label>
            <input type="text" name="cedula" id="cedula" required>

            <label for="email">Correo</label>
            <input type="text" name="email" id="email" required>

            <label for="password">Password</label>
            <input type="text" name="password" id="password" required>

            <label for="token">Rol</label>
            <input type="number" name="token" id="token" required>

            <button>
                Agregar
            </button>
        </form>
    </div>

<?php
    include '../layout/admin_scripts.php';
?>