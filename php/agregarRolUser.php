<?php
include './conexion.php';
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
            VALUES ('$nombre_completo','$correo','$usuario', '$contrasena')";

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
    <script>
    alert("Este correo ya esta registrado, intenta con otro diferente");
    window.location = "../agregar.php";
    </script>
    ';
    exit();
}

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
    <script>
    alert("Este usuario ya esta registrado, intenta con otro diferente");
    window.location = "../agregar.php";
    </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);
if ($ejecutar) {
    echo '
    <script>
    alert("Usuario registrado exitosamente");
    window.location = "../agregar.php";
    </script>
    ';
} else {
    echo '
    <script>
    alert("Intentalo de nuevo, usuario no almacenado");
    window.location = "../agregar.php";
    </script>
    ';
}

    /*
if ($nombre_completo != null || $correo != null || $usuario != null || $contrasena != null) {
    $sql="insert into usuarios(nombre,correo,usuario,contrasena) values('".$nombre_completo."','".$correo."','".$usuario."','".$contrasena."')";
    mysqli_query($conexion, $sql);
    if ($nombre_completo=1){
        header("location:mostrarusuario.php");
    }
}*/
