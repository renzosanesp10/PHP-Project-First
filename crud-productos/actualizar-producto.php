<?php
include("/xamp/htdocs/PaginaWeb/php/conexion.php");

$id_producto = $_GET['id_producto'];

$sql = "SELECT * FROM productos WHERE id_producto='$id_producto'";
$query = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/estilos.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <header class="main-header">
        <div class="container container--flex">
            <div class="main-header__container">
                <h1 class="main-header__title">BAZAR ESPEJO</h1>
                <span class="icon-menu" id="btn-menu"><i class="fas fa-bars"></i></span>
                <nav class="main-nav" id="main-nav">
                    <ul class="menu">
                        <li class="menu__item"><a href="../admi.php" class="menu__link">Inicio</a></li>
                        <li class="menu__item"><a href="../crud-productos/producto.php" class="menu__link">Productos</a></li>
                        <li class="menu__item"><a href="../crud-usuarios/usuario.php" class="menu__link">Usuarios</a></li>

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
    <div class="container mt-5">
        <h1>Actualizar Datos del Producto</h1>
        <form action="../crud-productos/producto.php" class="menu__link" method="POST">

            <input type="hidden" name="id_producto" value="<?php echo $row['id_producto']  ?>">

            <input type="text" class="form-control mb-3" name="nombre_producto" placeholder="Nombre del Producto" value="<?php echo $row['nombre_producto']  ?>">
            <div class="mb-3">
                <textarea class="form-control mb-3" name="desc_producto" id="exampleFormControlTextarea1" rows="3" placeholder="Descripcion del Producto" value="<?php echo $row['descripcion_producto']  ?>" ></textarea>
            </div>
            <input type="text" class="form-control mb-3" name="talla_producto" placeholder="Talla del Producto" value="<?php echo $row['talla_producto']  ?>">
            <input type="text" class="form-control mb-3" name="Precio_producto" placeholder="Precio" value="<?php echo $row['precio_producto']  ?>">
            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

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
<script src="../js/slider.js"></script>
<script src="../js/slider.js"></script>
<script src="../js/login.js"></script>


</html>