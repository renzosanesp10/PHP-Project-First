<?php

include("/xamp/htdocs/PaginaWeb/php/conexion.php");


$nombre_completo=$_GET['id'];

$sql="DELETE FROM usuarios  WHERE id='$nombre_completo'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>