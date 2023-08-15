<?php
    include '../layout/admin_header.php';
?>
    <h2 class="titulo-crud">AGREGAR RESERVA</h2>

    <div class="formulario-crear">
        <form action="../../controllers/Reservas/insert.php" method="POST">

            <label for="_id">ID</label>
            <input type="number" name="_id" id="_id" required>

            <label for="usuario">Cliente</label>
            <input type="number" name="usuario" id="usuario" required >

            <label for="funcion">Funcion</label>
            <input type="number" name="funcion" id="funcion" required >

            <label for="kids">Niños</label>
            <input type="number" name="kids" id="kids" required >

            <label for="adult">Adultos</label>
            <input type="number" name="adult" id="adult" required >

            <label for="older">Adultos Mayores</label>
            <input type="number" name="older" id="older" required>

            <label for="total">Total</label>
            <input type="number" name="total" id="total" required>

            <button>
                Agregar
            </button>
        </form>
    </div>

<?php
    include '../layout/admin_scripts.php';
?>