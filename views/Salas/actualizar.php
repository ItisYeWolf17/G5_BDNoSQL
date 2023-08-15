<?php
    include '../layout/admin_header.php';
    require_once "../../includes/database.php";
    require_once "../../controllers/Salas/sala_controller.php";

    $type = new salaController();

    $id = $_POST['id'];


    $sala = $type->search($id);

    $_id = $sala -> _id;


?>
    <h2 class="titulo-crud">ACTUALIZAR SALA</h2>

    <div class="formulario-crear">
        <form action="../../controllers/Salas/actualizar.php" method="POST">
            <input type="text" hidden value="<?php echo $_id?>" name="id" id="name">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required value="<?php echo $sala->nombre?>">

            <label for="capacidad">Capacidad</label>
            <input type="text" name="capacidad" id="capacidad" required value="<?php echo $sala->capacidad?>">

            <label for="tipo_sala">Tipo de Sala</label>
            <input type="text" name="tipo_sala" id="tipo_sala" required value="<?php echo $sala->tipo_sala?>">

            <button>
                Actualizar
            </button>
        </form>
    </div>

<?php
    include '../layout/admin_scripts.php';
?>