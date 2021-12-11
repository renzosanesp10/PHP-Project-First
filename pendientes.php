<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Tienda Online</title>
  <meta name="viewport" content="width=device" , user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0>
  <link rel="stylesheet" href="css/estilos.css">

  <Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link rel="icon" type="" href="img/repartidor.png">
</head>

<body>
  <header class="main-header">
    <div class="container container--flex">
      <div class="main-header__container">
        <h1 class="main-header__title">BAZAR ESPEJO</h1>
        <span class="icon-menu" id="btn-menu"><i class="fas fa-bars"></i></span>
        <nav class="main-nav" id="main-nav">
          <ul class="menu">
            <li class="menu__item"><a href="./repartidor.php" class="menu__link">Inicio</a></li>
            <li class="menu__item"><a href="" class="menu__link">Pendientes</a></li>

          </ul>
        </nav>
      </div>
      <div class="main-header__container">
        <span class="main-header__txt">2021</span>
        <p class="main-header__txt"><i class="fas fa-phone"></i> TEL 415782</p>
      </div>
      <div class="main-header__container">
        <a href="" class="main-header__link"><i class="fas fa-user"></i><?php echo $_SESSION['usuario'] ?></a>
        <a href="" class="main-header__btn">Pedidos <i class="fas fa-motorcycle "></i></a>
        <a href= "php/cerrar_sesion.php"   class="main-header__btn">Cerrar Sesion</a>      </div>
    </div>
  </header>

  <main class="main">
    <div class="container">
      <h2 class="main-title">Productos Pendientes</h2>
      <section class="container-products">
        <div class="product">
          <img src="./img/imagen6.jpg" alt="" class="product__img">
          <div class="product__description">
            <h2 class="product__tittle">Ternos</h2>
            <span class="product__price">Pendientes</span>
          </div>

          <a href="" class="btn-pendiente">Ver Mas</a>
        </div>
        <div class="product">
          <img src="./img/polo.jpg" alt="" class="product__img">
          <div class="product__description">
            <h2 class="product__tittle">Polos</h2>
            <span class="product__price">Pendientes</span>
          </div>

          <a href="" class="btn-pendiente">Ver Mas</a>
        </div>
        <div class="product">
          <img src="./img/polera.jpg" alt="" class="product__img">
          <div class="product__description">
            <h2 class="product__tittle">Poleras</h2>
            <span class="product__price">Pendientes</span>
          </div>

          <a href="" class="btn-pendiente">Ver Mas</a>
        </div>
        <div class="product">
          <img src="./img/saco.jpg" alt="" class="product__img">
          <div class="product__description">
            <h2 class="product__tittle">Sacos</h2>
            <span class="product__price">Pendientes</span>
          </div>

          <a href="" class="btn-pendiente">Ver Mas</a>
        </div>
        <div class="product">
          <img src="./img/camisa.jpg" alt="" class="product__img">
          <div class="product__description">
            <h2 class="product__tittle">Camisas</h2>
            <span class="product__price">Pendientes</span>
          </div>

          <a href="" class="btn-pendiente">Ver Mas</a>
        </div>
        <div class="product">
          <img src="./img/pantalon.jpg" alt="" class="product__img">
          <div class="product__description">
            <h2 class="product__tittle">Pantalones</h2>
            <span class="product__price">Pendientes</span>
          </div>

          <a href="" class="btn-pendiente">Ver Mas</a>
        </div>
        <div class="product">
          <img src="img/medias.jpg" alt="" class="product__img">
          <div class="product__description">
            <h2 class="product__tittle">Medias</h2>
            <span class="product__price">Pendientes</span>
          </div>

          <a href="" class="btn-pendiente">Ver Mas</a>
        </div>
        <div class="product">
          <img src="./img/corbata.jpg" alt="" class="product__img">
          <div class="product__description">
            <h2 class="product__tittle">Corbatas</h2>
            <span class="product__price">Pendientes</span>
          </div>

          <a href="" class="btn-pendiente">Ver Mas</a>
        </div>
      </section>


      <h2 class="main-title">Pasos a seguir</h2>
      <section class="container-tips">
        <div class="tip">

          <i class="fas fa-box"></i>
          <h2 class="tip__title">Recojo de Producto en Tienda</h2>
          <p class="tip__txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aut sequi voluptatibus ab totam velit explicabo corrupti sed doloremque natus, eligendi saepe. Quaerat nulla odit quibusdam, placeat unde voluptas est </p>

        </div>
        <div class="tip">
          <i class="fas fa-shipping-fast"></i>
          <h2 class="tip__title">Envio de Producto</h2>
          <p class="tip__txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aut sequi voluptatibus ab totam velit explicabo corrupti sed doloremque natus, eligendi saepe. Quaerat nulla odit quibusdam, placeat unde voluptas est.</p>

        </div>
        <div class="tip">
          <i class="fas fa-truck-loading"></i>
          <h2 class="tip__title">Entrega a Domicilio</h2>
          <p class="tip__txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aut sequi voluptatibus ab totam velit explicabo corrupti sed doloremque natus, eligendi saepe. Quaerat nulla odit quibusdam, placeat unde voluptas est.</p>

        </div>
      </section>
    </div>
  </main>
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