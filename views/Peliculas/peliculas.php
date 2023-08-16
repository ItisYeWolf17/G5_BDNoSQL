<?php
session_start();

require_once '../../Controllers/Peliculas/pelicula_controller.php';
require_once '../../Controllers/Funciones/funcion_controller.php';

$id = $_POST['id'];

$movie = new PeliculaController();

$pelicula = $movie -> search($id);

$funcion = new FuncionController();

$normal = $funcion->listar2D($id);

$especial = $funcion ->listar3D($id);

$DX = $funcion -> listar4D($id);

$vip = $funcion -> listar5D($id);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Película 1 - CinemaniaX</title>
    <link href="../assets/css/index.css" rel="stylesheet"/>
    <link href="../assets/css/pelicula.css" rel="stylesheet"/> <!-- Agrega el nuevo archivo CSS para esta página -->
</head>
<body>
  <header class="header">
              <nav class="menu">
                  <a href="../index.php">
                      <img src="../assets/img/mainLogo.jpg" alt="Logo CinemaniaX" class="logo">
                  </a>
                  <ul class="navMenu">
                      <li>
                          <a href="../index.php" class="navLink">HOME</a>
                      </li>
                      <li>
                          <a href="../Peliculas/cartelera.php" class="navLink">CARTELERA</a>
                      </li>
                      <li>
                          <a href="../Peliculas/proximamente.php" class="navLink">PRÓXIMAMENTE</a>
                      </li>
                  </ul>
                  <div>
                      <?php if (isset($_SESSION["user"])): ?>
                      <a href="#" class="log">
                          <?php echo $_SESSION["user"];?>
                      </a>
                      <a href="../../Controllers/Usuarios/logout.php" class="log">Cerrar Sesion</a>
                      <?php else: ?>
                      <a href="../Usuarios/login.php" class="log">Iniciar Sesion</a>
                      <?php endif; ?>
                  </div>
              </nav>
      </header>
    
    <!-- Portada -->
    <div class="portada">
    <img src="<?php echo $pelicula->img?>" alt="Portada Película 1">
    </div>

    <div class="recuadro">
      <img src="<?php echo $pelicula->img?>" alt="Portada Película 1">
    </div>

    <div class="descripcion-pelicula">
  <p><?php echo $pelicula->descripcion?></p>
</div>


    <div class="tabla-salas">
  <div class="fila-titulos">
    <div class="columna-titulo">2D</div>
    <div class="columna-titulo">3D</div>
    <div class="columna-titulo">4DX DOB</div>
    <div class="columna-titulo">SALA VIP</div>
  </div>
  <div class="fila-horarios">
    <div class="columna-horario">
      <div class="horario-info">
        <?php
          foreach ($normal as $d){
        ?>
        <button class="boton-amarillo"><?php echo $d->hora?></button>
        <?php
          }
        ?>
      </div>
    </div>
    <div class="columna-horario">
      <div class="horario-info">
        <?php
          foreach ($especial as $d){
          ?>
          <button class="boton-amarillo"><?php echo $d->hora?></button>
          <?php
            }
          ?>
      </div>
    </div>
    <div class="columna-horario">
      <div class="horario-info">
        <?php
          foreach ($DX as $d){
          ?>
            <button class="boton-amarillo"><?php echo $d->hora?></button>
          <?php
            }
          ?>
      </div>
    </div>
    <div class="columna-horario">
    <div class="horario-info">
      <?php
          foreach ($vip as $d){
          ?>
          <button class="boton-amarillo"><?php echo $d->hora?></button>
        <?php
          }
          ?>
      </div>
    </div>
  </div>
</div>


</body>
</html>
