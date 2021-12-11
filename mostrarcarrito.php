<?php
session_start();
include_once("./php/conexion.php");
include_once("./php/confi.php");
include_once './php/carrito.php';

if (!isset($_SESSION['usuario'])) {
    echo '
        <script>
                alert("Por favor debes iniciar sesion");
                window.location = "login.php";
                </script>
    ';
    session_destroy();
    die();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tienda Online</title>
    <meta name="viewport" content="width=device" , user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0>
    <link rel="stylesheet" href="css/estilos.css">

    <Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="" href="img/corbata.jpg">
</head>

<header class="main-header">
    <div class="container container--flex">
        <div class="main-header__container">
            <h1 class="main-header__title">BAZAR ESPEJO</h1>
            <span class="icon-menu" id="btn-menu"><i class="fas fa-bars"></i></span>
            <nav class="main-nav" id="main-nav">
                <ul class="menu">
                    <li class="menu__item"><a href="./cliente.php" class="menu__link">Inicio</a></li>
                    <li class="menu__item"><a href="./productos-cliente.php" class="menu__link">Productos</a></li>
                    <li class="menu__item"><a href="./contacto-cliente.php" class="menu__link">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div class="main-header__container">
            <span class="main-header__txt">2021</span>
            <p class="main-header__txt"><i class="fas fa-phone"></i> TEL 415782</p>
        </div>
        <div class="main-header__container">
            <a href="bienvenida.php" class="main-header__link"><i class="fas fa-user"></i><?php echo $_SESSION['usuario'] ?></a>
            <a href="" class="main-header__btn">Carrito( <?php echo(empty($_SESSION['carrito']))?0:count($_SESSION['carrito']);  ?>) <i class="fas fa-shopping-cart "></i></a>
            <a href="php/cerrar_sesion.php" class="main-header__btn">Cerrar Sesion</a>
        </div>
    </div>
</header>
<br>
<div class="container">
    <?php if (!empty($_SESSION['carrito'])) { ?>
        <h3>LISTA DE PRODUCTOS</h3>

        <table class="table table-light table-bordered">
            <tbody>
                <tr>
                    <th width="40%">Nombre</th>
                    <th width="15%" class="text-center">Cantidad</th>
                    <th width="20%" class="text-center">Precio</th>
                    <th width="20%" class="text-center">Total</th>
                    <th width="5%">--</th>
                </tr>
                <?php $total = 0; ?>
                <?php foreach ($_SESSION['carrito'] as $indice => $producto) { ?>
                    <tr>
                        <td width="40%"><?php echo $producto['NOMBRE'] ?></td>
                        <td width="15%" class="text-center"><?php echo $producto['CANTIDAD'] ?></td>
                        <td width="20%" class="text-center"><?php echo $producto['PRECIO'] ?></td>
                        <td width="20%" class="text-center"><?php echo number_format($producto['PRECIO'] * $producto['CANTIDAD'], 2); ?></td>
                        <td width="5%">
                            <form action="" method="post">
                                <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'], COD, KEY); ?>">
                                <button class="btn btn-danger" type="submit" name="btnAccion" value="Eliminar">Eliminar</button>
                        </td>
                        </form>
                    </tr>
                    <?php $total = $total + ($producto['PRECIO'] * $producto['CANTIDAD']); ?>
                <?php } ?>

                <tr>
                    <td colspan="3" align="right">
                        <h3>Total</h3>
                    </td>
                    <td align="right">
                        <h3><?php echo number_format($total, 2); ?></h3>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="5">
                        <form action="pagar.php" method="post">
                            <div class="alert alert-success">
                                <div class="form-group">
                                    <label for="my-input">Correo de contacto: </label>
                                    <input id="email" class="form-control" type="email" name="email" placeholder="Por favor escribe tu correo" required>
                                </div>
                                <small id="emailHelp" class="form-text text-muted">La confirmacion de la compra se enviara a este correo</small>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block" type="submit" name="btnAccion" value="proceder">Proceder a Pagar</button>

                        </form>

                    </td>
                </tr>
            </tbody>
        </table>
    <?php } else {  ?>
        <div class="alert alert-success">
            No hay productos en el carrito...
        </div>
    <?php } ?>
</div>
<br>








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


</body>

</html>