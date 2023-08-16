<?php
    include '../layout/header_init.php';
?>
        <h2>Iniciar Sesión</h2>

        <div class="container">
            <?php 
                if(isset($error)){
                    echo "<p>$error</p>";
                }
            ?>
            <form class="login-form" method="post" action="../../Controllers/Usuarios/validar_login.php">
                <label for="email">Correo Electronico</label>
                <input type="text" id="email" name="email" placeholder="correo@example.com">

                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Contraseña">

                <button type="submit">Ingresar</button>
                <a href="./register.php" class="create-user-btn">Crear Cuenta</a>
            </form>
        </div>

<?php
    include '../layout/scrips_init.php';
?>