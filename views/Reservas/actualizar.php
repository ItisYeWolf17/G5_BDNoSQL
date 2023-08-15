<?php
    include '../layout/admin_header.php';
    require_once "../../includes/database.php";
    require_once "../../controllers/Reservas/reserva_controller.php";

    $type = new ReservaController();

    $id = $_POST['id'];

    $reserva = $type->search($id);

    $_id = $reserva -> _id;

?>
    <h2 class="titulo-crud">ACTUALIZAR RESERVA</h2>

    <div class="formulario-crear">
        <form action="../../controllers/Reservas/actualizar.php" method="POST">
            <input type="text" hidden value="<?php echo $_id?>" name="id" id="name">
            <label for="usuario">Cliente</label>
            <input type="number" name="usuario" id="usuario" required value="<?php echo $reserva->usuario?>">

            <label for="funcion">Funcion</label>
            <input type="number" name="funcion" id="funcion" required value="<?php echo $reserva->funcion?>">

            <label for="kids">Niños</label>
            <input type="number" name="kids" id="kids" required value="<?php echo $reserva->kids?>">

            <label for="adult">Adultos</label>
            <input type="number" name="adult" id="adult" required value="<?php echo $reserva->adult?>">

            <label for="older">Adultos Mayores</label>
            <input type="number" name="older" id="older" required value="<?php echo $reserva->older?>">

            <label for="total">Total</label>
            <input type="number" name="total" id="total" required value="<?php echo $reserva->total?>">

            <button>
                Actualizar
            </button>
        </form>
    </div>

<?php
    include '../layout/admin_scripts.php';
?>