<?php
include '/xamp/htdocs/PaginaWeb/php/conexion.php';

$nombre_completo =$_POST['nombre_completo'];
$correo =$_POST['correo'];
$usuario =$_POST['usuario'];
$contrasena =$_POST['contrasena'];


$sql = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
            VALUES ('$nombre_completo','$correo','$usuario', '$contrasena')";
$query= mysqli_query($conexion,$sql);

if($query){
    Header("Location: usuario.php");
    
}else {
}




?>