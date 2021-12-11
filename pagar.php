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
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> PayPal Checkout Integration | Responsive Buttons </title>

    <style>
        /* Media query for mobile viewport */
        @media screen and (max-width: 400px) {
            #paypal-button-container {
                width: 100%;
            }
        }

        /* Media query for desktop viewport */
        @media screen and (min-width: 400px) {
            #paypal-button-container {
                width: 250px;
            }
        }
    </style>
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
            <a href="mostrarcarrito.php" class="main-header__btn">Carrito( <?php echo (empty($_SESSION['carrito'])) ? 0 : count($_SESSION['carrito']);  ?>) <i class="fas fa-shopping-cart "></i></a>
            <a href="php/cerrar_sesion.php" class="main-header__btn">Cerrar Sesion</a>
        </div>
    </div>
</header>

<?php
if ($_POST) {
    $total = 0;
    $SID = session_id();
    $Correo = $_POST['email'];

    foreach ($_SESSION['carrito'] as $indice => $producto) {
        $total = $total + ($producto['PRECIO'] * $producto['CANTIDAD']);
    }

    $sql = "INSERT INTO `ventas` (`id`, `clavetransaccion`, `paypaldatos`, `fecha`, `correo`, `total`, `status`) 
    VALUES (NULL, :ClaveTransaccion , '',  NOW() , :Correo , :Total , 'pendiente');";
    $resultado = mysqli_query($conexion, $sql);

    //echo $sql;

    //bind_param(':ClaveTransaccion',$SID);
    //bind_param(':Correo',$Correo);
    //bind_param(':Total',$total);



}
?>
<script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
<div class="container p-5 bg-light text-center" style="margin-bottom: 7.4rem">
    <h1 class="display-4">Paso Final!!</h1>
    <hr class="my-4">
    <p class="lead">Estas a punto de pagar con Paypal la cantidad la cantidad de:
    <h4>S/. <?php echo number_format($total, 2) ?></h4>
    </p>
    <!-- Set up a container element for the button -->
    <div class="d-flex justify-content-center w-100" id="paypal-button-container"></div>
    <p>Los productos le estarian llegando al rededor de 1 dia o 2</br>
        <strong>(Para aclaraciones : renzosanesp@gmail.com)</strong>

    </p>

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
<!-- Include the PayPal JavaScript SDK -->
<script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
<script>
    // Render the PayPal button into #paypal-button-container
    paypal.Buttons().render('#paypal-button-container');
</script>

</body>

</html>