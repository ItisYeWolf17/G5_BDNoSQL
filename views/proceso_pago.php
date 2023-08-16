<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CinemaniaX - Proceso de Pago</title>
    <link href="../../public/css/index.css" rel="stylesheet" />
    <link href="../../public/css/proceso_pago.css" rel="stylesheet" />
</head>

<body>
    <header class="header">
    <body>
    <header class="header">
            <nav class="menu">
                <a href="./index.html">
                    <img src="../../public/img/mainLogo.jpg" alt="Logo CinemaniaX" class="logo">
                </a>
                <ul class="navMenu">
                    <li>
                        <a href="#HOME" class="navLink">HOME</a>
                    </li>
                    <li>
                        <a href="#" class="navLink">CARTELERA</a>
                    </li>
                    <li>
                        <a href="#" class="navLink">PRÓXIMAMENTE</a>
                    </li>
                </ul>
                <div>
                    <a href="#" class="log">Iniciar Sesión</a>
                </div>
            </nav>
    </header>
    </header>

    <main class="main">
        <section class="proceso-pago-container">
            <div class="form-container">
                <h2>Proceso de Pago</h2>
                <form>
                    <div class="form-group">
                        <label for="titular">Titular de la Tarjeta</label>
                        <input type="text" id="titular" required>
                    </div>
                    <div class="form-group">
                        <label for="numero">Número de Tarjeta</label>
                        <input type="text" id="numero" required>
                    </div>
                    <div class="form-group">
                        <label for="cvv">CVV</label>
                        <input type="text" id="cvv" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha-vencimiento">Fecha de Vencimiento</label>
                        <input type="text" id="fecha-vencimiento" placeholder="MM/AA" required>
                    </div>
                    <button type="submit" class="realizar-pago-btn">Realizar Pago</button>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer">
        <!-- Aquí va tu código de pie de página -->
    </footer>

</body>

</html>
