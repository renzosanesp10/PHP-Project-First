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
                    <li class="menu__item"><a href="" class="menu__link">Productos</a></li>
                    <li class="menu__item"><a href="./contacto-cliente.php" class="menu__link">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div class="main-header__container">
            <span class="main-header__txt">2021</span>
            <p class="main-header__txt"><i class="fas fa-phone"></i> TEL 415782</p>
        </div>
        <div class="main-header__container">
            <a href="" class="main-header__link"><i class="fas fa-user"></i><?php echo $_SESSION['usuario'] ?></a>
            <a href="mostrarcarrito.php" class="main-header__btn">Carrito( <?php echo(empty($_SESSION['carrito']))?0:count($_SESSION['carrito']);  ?>) <i class="fas fa-shopping-cart "></i></a>
            <a href="php/cerrar_sesion.php" class="main-header__btn">Cerrar Sesion</a>
        </div>
    </div>
</header>


<div class="container">
    <br>
    <?php if($mensaje!=""){?>
    <div class="alert alert-success">
        <?php echo $mensaje;?>
        
        <a href="mostrarcarrito.php" class=" badge badge-success">Ver Carrito </a>
    </div>
    <?php  }?> 
    <?php 
    $sql = "SELECT * FROM productos";
    $resultado = mysqli_query($conexion, $sql);
    $filas = mysqli_fetch_all($resultado);
    ?>

    <div class="row">
        <?php
        foreach ($filas as $value) { ?>
            <div class="col-3">
                <div class="card mb-4" style="max-height: 100%;">
                    <img class="card-img-top" src="<?php echo $value[4]?>" alt="<?php echo $value[1]?>"  height="317px">
                    <div class="card-body">
                        <span><?php echo $value[1] ?></span>
                        <h5 class="card-title">S/. <?php echo $value[2] ?></h5>
                        <p class="card-text"><?php echo $value[3]?></p>
                        <form action="" method="POST">
                            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($value[0],COD,KEY);  ?>">
                            <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($value[1],COD,KEY)?> ">
                            <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($value[2],COD,KEY)?> ">
                            <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY)?>  ">
                            <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>

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