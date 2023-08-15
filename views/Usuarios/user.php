<?php
    include '../layout/admin_header.php';
    require_once '../../controllers/Usuarios/usuario_controller.php';

    $user = new UsuarioController();
    $datos = $user->listar();
?>

<section>
        <div>
        <h2 class="titulo-crud">
            Modulo Usuarios
        </h2>
        </div>
        <div class="contenedor">
            <div class="incremental">
                <div class="contenedor-btn">
                    <a href="./crear.php" class="add">
                        Agregar Usuario
                    </a>
                </div>
                <div>
                    <table id="data">
                        <thead>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Cedula</th>
                            <th>Correo Electronico</th>
                            <th>Contraseña</th>
                            <th></th>
                            <th></th>


                        </thead>
                        <tbody>
                            <?php
                                foreach($datos as $item){
                            ?>
                            <tr>
                                <td><?php echo $item->nombre?></td>
                                <td><?php echo $item->apellidos?></td>
                                <td><?php echo $item->cedula?></td>
                                <td><?php echo $item->email?></td>
                                <td><?php echo $item->password?></td>

                                <td>                                    
                                    <form action="./actualizar.php" method="post">
                                        <input type="text" hidden value="<?php echo $item->_id;?>" name="id"/>
                                        <button>
                                            Editar
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="../../controllers/Usuarios/delete.php" method="post">
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