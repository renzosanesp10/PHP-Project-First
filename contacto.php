<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tienda Online</title>
    <meta name="viewport" content="width=device" , user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0>
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/estilocontacto.css">

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
                        <li class="menu__item"><a href="index.php" class="menu__link">Inicio</a></li>
                        <li class="menu__item"><a href="./productos-index.php" class="menu__link">Productos</a></li>
                        <li class="menu__item"><a href="#" class="menu__link">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="main-header__container">
                <span class="main-header__txt">2021</span>
                <p class="main-header___txt"><i class="fas fa-phone"></i> TEL 415782</p>
            </div>
            <div class="main-header__container">
                <a href="./login.php" class="main-header__link"><i class="fas fa-user"></i></a>
                <a href="" class="main-header__btn">Carrito <i class="fas fa-shopping-cart"></i></a>
                <input type="search" class="main-header__input" placeholder="Buscar productos"><i class="fas fa-search"></i>
            </div>
        </div>
    </header>

    <div id="contenidos-paginas">
        <div id="centro3">
            <h2>
                <em class="encabezados t1">Contacta con Nosotros</em>
            </h2>
            <p class="descripcion-pagina">
            Queremos que tu experiencia comprando en BAZAR ESPEJO sea la mejor, es por eso que ante cualquier duda ponte al contacto con nosotros
            </p>
            <hr>

            <div id="contenido-nosotros">

                <div id="izquierda">
                    <p class="descripcion-pagina texto-contacto">
                    <h2>
                        <em class="encabezados t1">Contactos</em>
                    </h2>

                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> 044 245153</li>
                        <li><i class="fas fa-phone"></i> 95891548</li>
                        <li><i class="fas fa-envelope-open-text"></i> RenzoSanchez@gmail.com</li>
                    </ul>
                    </p>
                </div>

                <div id="derecha">
                    <h2>
                        <em class="encabezados t1">Nuestra redes Sociales</em>
                    </h2>
                    <ul>
                        <li><i class="fab fa-facebook"></i> Bazar Espejo</li>
                        <li><i class="fab fa-instagram"></i> BAZAR_EZPEJO</li>
                        <li><i class="fab fa-twitter"></i>@Bazar Espejo1</li>
                    </ul>

                </div>

                <div id="centro3">
                    <h2>
                        <em class="encabezados t1">Ubicanos</em>
                    </h2>
                </div>

                <div id="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3880.205886558182!2d-88.16743098199365!3d13.461402473858934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x72953df7e0502a9b!2sMetrocentro+San+Miguel!5e0!3m2!1ses-419!2ssv!4v1564899753613!5m2!1ses-419!2ssv" width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>


            </div>


        </div>
    </div>




    <footer class="main-footer">
        <div class="footer__section">
            <h2 class="footer__title">Sobre Nosotros</h2>
            <p class="footer__txt">Somos una empresa dedicada a la venta online de ropa. Nuestro objetivo es ofrecer la moda más actual a los mejores precios.
                Tenemos a su disposición una gran variedad de productos, los cuales son renovados cada temporada.
                Tenemos un equipo que está dedicado a satisfacer tus necesidades y que te contestará a tus dudas con la mayor brevedad posible. </p>
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
        <p class="copy">© 2018 Goggles. All Rights Reserved</p>

    </footer>

    <script src="js/slider.js"></script>
    <script src="./js/menu.js"></script>
    <script src="./js/login.js"></script>

</body>

</html>