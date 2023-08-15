<?php
    include '../layout/admin_header.php';
    require_once '../../controllers/Funciones/funcion_controller.php';

    $funcion = new FuncionController();
    $datos = $funcion->listar();
?>

<section>
        <div>
        <h2 class="titulo-crud">
            Modulo Funciones
        </h2>
        </div>
        <div class="contenedor">
            <div class="incremental">
                <div class="contenedor-btn">
                    <a href="./crear.php" class="add">
                        Agregar Funcion
                    </a>
                </div>
                <div>
                    <table id="data">
                        <thead>
                            <th>Pelicula</th>
                            <th>Sala</th>
                            <th>Fecha</th>
                            <th>hora</th>
                            <th>precio</th>
                            <th></th>
                            <th></th>


                        </thead>
                        <tbody>
                            <?php
                                foreach($datos as $item){
                            ?>
                            <tr>
                                <td><?php echo $item->pelicula?></td>
                                <td><?php echo $item->sala?></td>
                                <td><?php echo $item->fecha?></td>
                                <td><?php echo $item->hora?></td>
                                <td><?php echo $item->precio?></td>

                                <td>                                    
                                    <form action="./actualizar.php" method="post">
                                        <input type="text" hidden value="<?php echo $item->_id;?>" name="id"/>
                                        <button>
                                            Editar
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="../../controllers/Funciones/delete.php" method="post">
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