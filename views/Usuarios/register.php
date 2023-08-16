<?php
    include '../layout/header_init.php';
?>
    
    <h2>Crear cuenta nueva</h2>

    <div class="container">
        <!-- Contenido de la página de registro aquí -->
        <form method="post" action="../../Controllers/Usuarios/crear_cuenta.php">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre">

                <label for="apellidos">Apellidos</label>
                <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos">

                <label for="cedula">Cedula</label>
                <input type="text" id="cedula" name="cedula" placeholder="Numero de Cedula">
                
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="Correo electrónico">

                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Contraseña">
                
                <button type="submit">Crear Cuenta</button>
        </form>
    </div>

    <?php
    include '../layout/scrips_init.php'
    ?>

