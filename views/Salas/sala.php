<?php
    include '../layout/admin_header.php';
    require_once '../../controllers/Salas/sala_controller.php';

    $sala = new SalaController();
    $datos = $sala->listar();
?>

<section>
        <div>
        <h2 class="titulo-crud">
            Modulo Salas
        </h2>
        </div>
        <div class="contenedor">
            <div class="incremental">
                <div class="contenedor-btn">
                    <a href="./crear.php" class="add">
                        Agregar Sala
                    </a>
                </div>
                <div>
                    <table id="data">
                        <thead>
                            <th>Nombre</th>
                            <th>Capacidad</th>
                            <th>Tipo de Sala</th>
                            <th></th>
                            <th></th>


                        </thead>
                        <tbody>
                            <?php
                                foreach($datos as $item){
                            ?>
                            <tr>
                                <td><?php echo $item->nombre?></td>
                                <td><?php echo $item->capacidad?></td>
                                <td><?php echo $item->tipo_sala?></td>
                                <td>                                    
                                    <form action="./actualizar.php" method="post">
                                        <input type="text" hidden value="<?php echo $item->_id;?>" name="id"/>
                                        <button>
                                            Editar
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="../../controllers/Salas/delete.php" method="post">
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