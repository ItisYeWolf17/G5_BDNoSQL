<?php
    include '../layout/admin_header.php';
    require_once "../../includes/database.php";
    require_once "../../controllers/Funciones/funcion_controller.php";

    $type = new FuncionController();

    $id = $_POST['id'];

    $funcion = $type->search($id);

    $_id = $funcion -> _id;

?>
    <h2 class="titulo-crud">ACTUALIZAR FUNCIONES</h2>

    <div class="formulario-crear">
        <form action="../../controllers/Funciones/actualizar.php" method="POST">
            <input type="text" hidden value="<?php echo $_id?>" name="id" id="name">
            <label for="pelicula">Pelicula</label>
            <input type="text" name="pelicula" id="pelicula" required value="<?php echo $funcion->pelicula?>">

            <label for="sala">Sala</label>
            <input type="text" name="sala" id="sala" required value="<?php echo $funcion->sala?>">

            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha" required value="<?php echo $funcion->fecha?>">

            <label for="hora">Hora</label>
            <input type="text" name="hora" id="hora" required value="<?php echo $funcion->hora?>">

            <label for="precio">Precio</label>
            <input type="text" name="precio" id="precio" required value="<?php echo $funcion->precio?>">

            <button>
                Actualizar
            </button>
        </form>
    </div>

<?php
    include '../layout/admin_scripts.php';
?>