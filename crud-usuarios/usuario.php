<?php

include("../php/conexion.php");

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $sql);
$row = mysqli_fetch_array($resultado);

session_start();
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
<html lang="en">

<head>
    <title>Mostrar Usuarios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/estilos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="icon" type="" href="/img/corbata.jpg">
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
                        <li class="menu__item"><a href="" class="menu__link">Usuarios</a></li>
                    </ul>
                </nav>
            </div>
            <div class="main-header__container">
                <span class="main-header__txt">2021</span>
                <p class="main-header__txt"><i class="fas fa-phone"></i> TEL 415782</p>
            </div>
            <div class="main-header__container">
                <a href="" class="main-header__link"><i class="fas fa-user"><?php echo $_SESSION['usuario'] ?></a></i>
                <a href="../php/cerrar_sesion.php" class="main-header__btn">Cerrar Sesion</a>

            </div>
        </div>
    </header>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>INGRESAR USUARIO</h1>
                <form action="../crud-usuarios/insertar.php" method="POST">

                    <input type="text" class="form-control mb-3" name="nombre_completo" placeholder="Nombre Completo">
                    <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
                    <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuario">
                    <input type="password" class="form-control mb-3" name="contrasena" placeholder="Contraseña">

                    <input type="submit" class="btn btn-primary">
                </form>



            </div>

            <div class="col-md-8">
                <h1>TABLA DE USUARIOS</h1>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Rol</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($resultado)) {
                        ?>
                            <tr>
                                <th><?php echo $row['id'] ?></th>
                                <th><?php echo $row['nombre_completo'] ?></th>
                                <th><?php echo $row['correo'] ?></th>
                                <th><?php echo $row['usuario'] ?></th>
                                <th><?php echo $row['contrasena'] ?></th>
                                <th><?php echo $row['rol_id'] ?></th>
                                <th><a href="./actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="./delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <footer class="main-footer mt-5">
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
</body>

</html>