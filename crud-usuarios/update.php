<?php

include("/xamp/htdocs/PaginaWeb/php/conexion.php");

$id = $_POST['id'];
$nombre_completo=$_POST['nombre_completo'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];


$sql="UPDATE usuarios SET  nombre_completo='$nombre_completo',correo='$correo',usuario='$usuario' WHERE id='$id'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: crud-usuarios/usuario.php");
    }
?>
D:\xamp\htdocs\PaginaWeb\crud-usuarios\usuario.php