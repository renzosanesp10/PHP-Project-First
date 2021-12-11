<?php
include_once 'php/conexion.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mostrar Usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="icon" type="" href="img/corbata.jpg">
</head>

<body>
    <header class="main-header">
        <div class="container container--flex">
            <div class="main-header__container">
                <h1 class="main-header__title">BAZAR ESPEJO</h1>
                <span class="icon-menu" id="btn-menu"><i class="fas fa-bars"></i></span>
                <nav class="main-nav" id="main-nav">
                    <ul class="menu">
                        <li class="menu__item"><a href="./admi.php" class="menu__link">Productos</a></li>
                        <li class="menu__item"><a href="./mostrarusuario.php" class="menu__link">Usuarios</a></li>
                        <li class="menu__item"><a href="" class="menu__link">Agregar</a></li>
                    </ul>
                </nav>
            </div>
            <div class="main-header__container">
                <span class="main-header__txt">2021</span>
                <p class="main-header__txt"><i class="fas fa-phone"></i> TEL 415782</p>
            </div>
            <div class="main-header__container">
                <a href="bienvenida.php" class="main-header__link"><i class="fas fa-user"></i></a> -->
                <a href="" class="main-header__btn">Carrito <i class="fas fa-shopping-cart "></i></a>
                <input type="search" class="main-header__input" placeholder="Buscar productos"><i class="fas fa-search"></i>
            </div>
        </div>
    </header>

    <?php
    $sql = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conexion, $sql);
    ?>


    <div class="container">
        <a href="agregar.php">Nuevo</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Completo</th>
                    <th>Correo</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($filas = mysqli_fetch_assoc($resultado)) {

                ?>
                    <tr>
                        <td><?php echo $filas['id'] ?></td>
                        <td><?php echo $filas['nombre_completo'] ?></td>
                        <td><?php echo $filas['correo'] ?></td>
                        <td><?php echo $filas['usuario'] ?></td>
                        <td><?php echo $filas['contrasena'] ?></td>
                        <td><?php echo $filas['rol_id'] ?></td>
                        <td>
                            <a href="editar-usuario.php?id=<?php echo $filas['id'] ?>">Editar</a>
                            <a href="">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>


            </tbody>
        </table>

    </div>
</body>
<footer class="main-footer">
    <div class="footer__section">
        <h2 class="footer__title">Sobre Nosotros</h2>
        <p class="footer__txt">Somos una empresa dedicada a la venta online de ropa. Nuestro objetivo es ofrecer la moda más actual a los mejores precios.
            Tenemos a su disposición una gran variedad de productos, los cuales son renovados cada temporada.
            Tenemos un equipo que está dedicado a satisfacer tus necesidades y que te contestará a tus dudas con la mayor brevedad posible.</p>
    </div>
    <div class="footer__section">
        <h2 class="footer__title">Ubicacion</h2>
        <p class="footer__txt">Trujillo, Peru</p>
        <h2 class="footer__title">Contacto</h2>
        <p class="footer__txt">Celular: 999999942</p>
        <p class="footer__txt">Correo: renzosanesp@hotmail.com</p>
    </div>
    <div class="footer__section">
        <h2 class="footer__title">Quick Links</h2>
        <a href="" class="footer__link">Home</a>
        <a href="" class="footer__link">Shop</a>
        <a href="" class="footer__link">Contact Us</a>
    </div>
    <div class="footer__section">
        <h2 class="footer__title">Suscribete para recibir ofertas</h2>
        <p class="footer__txt">Al suscribirse a nuestra lista de correo, siempre recibirá nuestras últimas noticias y actualizaciones.</p>
        <input type="email" class="footer__input" placeholder="Ingresa tu email">
    </div>
    <p class="copy">© 2021 BAZAR ESPEJO. All Rights Reserved</p>

</footer>
<script src="js/slider.js"></script>
<script src="./js/menu.js"></script>
<script src="./js/login.js"></script>

</html>