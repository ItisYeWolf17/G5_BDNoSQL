<?php
    include '../layout/admin_header.php';
    require_once '../../controllers/Peliculas/pelicula_controller.php';

    $movie = new PeliculaController();
    $datos = $movie->listar();
?>

<section>
        <div>
        <h2 class="titulo-crud">
            Modulo Peliculas
        </h2>
        </div>
        <div class="contenedor">
            <div class="incremental">
                <div class="contenedor-btn">
                    <a href="./crear.php" class="add">
                        Agregar Pelicula
                    </a>
                </div>
                <div>
                    <table id="data">
                        <thead>
                            <th>Titulo</th>
                            <th>Director</th>
                            <th>Genero</th>
                            <th>Duracion</th>
                            <th>Estreno</th>
                            <th></th>
                            <th></th>


                        </thead>
                        <tbody>
                            <?php
                                foreach($datos as $item){
                            ?>
                            <tr>
                                <td><?php echo $item->titulo?></td>
                                <td><?php echo $item->director?></td>
                                <td><?php echo $item->genero?></td>
                                <td><?php echo $item->duracion?></td>
                                <td><?php echo $item->estreno?></td>

                                <td>                                    
                                    <form action="./actualizar.php" method="post">
                                        <input type="text" hidden value="<?php echo $item->_id;?>" name="id"/>
                                        <button>
                                            Editar
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="../../controllers/Peliculas/delete.php" method="post">
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