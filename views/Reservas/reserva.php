<?php
    include '../layout/admin_header.php';
    require_once '../../controllers/Reservas/reserva_controller.php';

    $funcion = new ReservaController();
    $datos = $funcion->listar();
?>

<section>
        <div>
        <h2 class="titulo-crud">
            Modulo Reservas
        </h2>
        </div>
        <div class="contenedor">
            <div class="incremental">
                <div class="contenedor-btn">
                    <a href="./crear.php" class="add">
                        Agregar Reserva
                    </a>
                </div>
                <div>
                    <table id="data">
                        <thead>
                            <th>Cliente</th>
                            <th>Funcion</th>
                            <th>Entradas</th>
                            <th>Total</th>
                            <th></th>
                            <th></th>


                        </thead>
                        <tbody>
                            <?php
                                foreach($datos as $item){
                                    $kids = $item->kids;
                                    $adult = $item->adult;
                                    $older = $item->older;

                                    $totalEntradas = $kids + $adult + $older;
                            ?>
                            <tr>
                                <td><?php echo $item->usuario?></td>
                                <td><?php echo $item->funcion?></td>
                                <td><?php echo $totalEntradas?></td>
                                <td><?php echo $item->total?></td>

                                <td>                                    
                                    <form action="./actualizar.php" method="post">
                                        <input type="text" hidden value="<?php echo $item->_id;?>" name="id"/>
                                        <button>
                                            Editar
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="../../controllers/Reservas/delete.php" method="post">
                                        <input type="text" hidden value="<?php echo $item->_id;?>" name="id"/>
                                        <button>
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table> 
                </div>

            </div>
        </div>
    </section>


<?php
    include '../layout/admin_scripts.php';
?>