<?php

include("/xamp/htdocs/PaginaWeb/php/conexion.php");

$id_producto = $_POST['id_producto'];
$nombre_producto = $_POST['nombre_producto'];
$desc_producto=$_POST['desc_producto'];
$talla_producto=$_POST['cantidad_producto'];
$precio_producto=$_POST['precio_producto'];


$sql="UPDATE productos SET  nombre_producto='$nombre_producto',desc_producto='$desc_producto',talla_producto='$talla_producto',precio_producto='$precio_producto' WHERE id_producto='$id_producto'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: crud-usuarios/usuario.php");
    }
?>
