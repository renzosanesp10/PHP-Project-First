<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida - RenzoSanchez

    </title>
    

</head>
<body>
    <h1>Bienvenido Administrador <?php echo $_SESSION["usuario"] ?>!!</h1>
    <a href= "php/cerrar_sesion.php">Cerrar Sesion</a>
</body>
</html>