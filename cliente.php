<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tienda Online</title>
    <meta name="viewport" content="width=device" , user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0>
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
                        <li class="menu__item"><a href="index.html" class="menu__link">Inicio</a></li>
                        <li class="menu__item"><a href="" class="menu__link">Nosotros</a></li>
                        <li class="menu__item"><a href="" class="menu__link">Productos</a></li>
                        <li class="menu__item"><a href="" class="menu__link">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="main-header__container">
                <span class="main-header__txt">2021</span>
                <p class="main-header__txt"><i class="fas fa-phone"></i> TEL 415782</p>
            </div>
            <div class="main-header__container">
                <a href="login.php" class="main-header__link"><i class="fas fa-user"></i></a>
                <a href="" class="main-header__btn">Carrito <i class="fas fa-shopping-cart"></i></a>
                <input type="search" class="main-header__input" placeholder="Buscar productos"><i class="fas fa-search"></i>
            </div>
        </div>
    </header>
    <div class="container-slider">
        <div class="slider" id="slider">
            <div class="slider__section">
                <img src="img/bazarespejo.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Bazar Espejo</h2>
                    <p class="slider__txt">¡El bazar de la elegancia y los mejores precios! </p>

                </div>
            </div>
            <div class="slider__section">
                <img src="img/slider3.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Bazar Espejo</h2>
                    <p class="slider__txt">¡En esta etapa digital... conectate con tu bazar!</p>

                </div>
            </div>
            <div class="slider__section">
                <img src="img/slider2.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Bazar Espejo</h2>
                    <p class="slider__txt">Viste a la moda en Bazar Espejo</p>

                </div>
            </div>
            <div class="slider__section">
                <img src="img/afiliaciones.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Bazar Espejo</h2>
                    <p class="slider__txt">Ropa de la mejor marca y al mejor precio</p>
                </div>
            </div>
        </div>
        <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
        <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
    </div>


    <main class="main">
        <div class="container">
            <h2 class="main-title">Nuestros productos</h2>
            <section class="container-products">
                <div class="product">
                    <img src="./img/camisa.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__tittle">Camisa Baronet</h3>
                        <span class="product__price">S/. 80</span>
                    </div>
                    <a href="" class="product__icon fas fa-cart-plus"></a>
                </div>
                <div class="product">
                    <img src="./img/pantalon.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__tittle">Pantalon Jhon Holden</h3>
                        <span class="product__price">S/. 150</span>
                    </div>
                    <a href="" class="product__icon fas fa-cart-plus"></a>
                </div>
                <div class="product">
                    <img src="img/medias.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__tittle">Medias Baronet</h3>
                        <span class="product__price">S/. 25</span>
                    </div>
                    <a href="" class="product__icon fas fa-cart-plus"></a>
                </div>
                <div class="product">
                    <img src="./img/corbata.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__tittle">Corbata Baronet</h3>
                        <span class="product__price">S/. 35</span>
                    </div>
                    <a href="" class="product__icon fas fa-cart-plus"></a>
                </div>
            </section>

            <div class="container-editor">
                <div class="editor__item">
                    <img src="./img/imagen7.jpg" alt="" class="editor__img">
                    <p class="editor__circle">TERNOS</p>
                </div>
                <div class="editor__item">
                    <img src="./img/imagen6.jpg" alt="" class="editor__img">
                    <p class="editor__circle">TERNOS</p>
                </div>
            </div>

            <section class="container-tips">
                <div class="tip">
                    <i class="far fa-hand-paper"></i>
                    <h2 class="tip__title">Satisfaction Garantizada</h2>
                    <p class="tip__txt">Bazar Espejo lleva </p>
                    <a href="" class="btn-shop">Comprar Ahora</a>
                </div>
                <div class="tip">
                    <i class="fas fa-rocket"></i>
                    <h2 class="tip__title">Fast Shipping</h2>
                    <p class="tip__txt">Entrega Inmediara a domicilio</p>
                    <a href="" class="btn-shop">Comprar Ahora</a>
                </div>
                <div class="tip">
                    <i class="fas fa-cog"></i>
                    <h2 class="tip__title">UV Protection</h2>
                    <p class="tip__txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint aut sequi voluptatibus ab totam velit explicabo corrupti sed doloremque natus, eligendi saepe. Quaerat nulla odit quibusdam, placeat unde voluptas est.</p>
                    <a href="" class="btn-shop">Comprar Ahora</a>
                </div>
            </section>
        </div>
    </main>
    <footer class="main-footer">
        <div class="footer__section">
            <h2 class="footer__title">About Us</h2>
            <p class="footer__txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere unde totam suscipit consequatur repellendus. Quasi adipisci deleniti quae itaque animi fugiat laborum, optio aliquam rerum, magnam omnis enim eum molestias!</p>
        </div>
        <div class="footer__section">
            <h2 class="footer__title">Location</h2>
            <p class="footer__txt">Trujillo, Peru</p>
            <h2 class="footer__title">Contact</h2>
            <p class="footer__txt">Celular: 999999942</p>
            <p class="footer__txt">Correo: renzosanesp@hotmail.com</p>
        </div>
        <div class="footer__section">
            <h2 class="footer__title">Quick Links</h2>
            <a href="" class="footer__link">Home</a>
            <a href="" class="footer__link">About</a>
            <a href="" class="footer__link">Error</a>
            <a href="" class="footer__link">Shop</a>
            <a href="" class="footer__link">Contact Us</a>
        </div>
        <div class="footer__section">
            <h2 class="footer__title">Sign up for your offers</h2>
            <p class="footer__txt">By suscribing to our mailing list you will always get latest news and updates from us.</p>
            <input type="email" class="footer__input" placeholder="Ingresa tu email">
        </div>
        <p class="copy">© 2018 Goggles. All Rights Reserved</p>

    </footer>

    <script src="js/slider.js"></script>
    <script src="./js/menu.js"></script>
    <script src="./js/login.js"></script>

</body>

</html>