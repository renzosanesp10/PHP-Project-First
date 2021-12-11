<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>

        <h1>Registrar Usuario</h1>

        <form action="./php/agregarRolUser.php" method="POST">
            <label>Nombres: </label><br>
            <input type="text" name="nombre_completo"><br>
            <label>Correo: </label><br>
            <input type="text" name="correo"><br>
            <label>Usuario: </label><br>
            <input type="text" name="usuario"><br>
            <label>Contraseña : </label><br>
            <input type="password" name="contrasena"><br>
            <label>Rol: </label><br>
            <input type="select" name="rol"><br>
            <input type="submit" name="" value="Agregar">
            <a href="mostrarusuario.php">Regresar</a>
        </form>
    </div>
</body>

</html>