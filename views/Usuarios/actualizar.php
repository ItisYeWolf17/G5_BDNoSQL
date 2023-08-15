<?php
    include '../layout/admin_header.php';
    require_once "../../includes/database.php";
    require_once "../../controllers/Usuarios/usuario_controller.php";

    $user = new UsuarioController();

    $id = $_POST['id'];


    $usuario = $user->search($id);

    $_id = $usuario -> _id;


?>
    <h2 class="titulo-crud">ACTUALIZAR USUARIO</h2>

    <div class="formulario-crear">
        <form action="../../controllers/Usuarios/actualizar.php" method="POST">
            <input type="text" hidden value="<?php echo $_id?>" name="id" id="name">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required value="<?php echo $usuario->nombre?>">

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" required value="<?php echo $usuario->apellidos?>">

            <label for="cedula">Cedula</label>
            <input type="text" name="cedula" id="cedula" required value="<?php echo $usuario->cedula?>">

            <label for="email">Correo</label>
            <input type="text" name="email" id="email" required value="<?php echo $usuario->email?>">

            <label for="password">Password</label>
            <input type="text" name="password" id="password" required value="<?php echo $usuario->password?>">

            <label for="token">Rol</label>
            <input type="number" name="token" id="token" required value="<?php echo $usuario->token?>">

            <button>
                Actualizar
            </button>
        </form>
    </div>

<?php
    include '../layout/admin_scripts.php';
?>