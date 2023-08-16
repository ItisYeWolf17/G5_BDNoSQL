<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CinemaniaX</title>
    <link href="../assets/css/index.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../assets/css/register.css">
    <link rel="stylesheet" href="../assets/css/carteleras.css">


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