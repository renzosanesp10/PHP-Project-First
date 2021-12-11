<?php
include '/xamp/htdocs/PaginaWeb/php/conexion.php';

$nombre_producto =$_POST['nombre_producto'];
$precio_producto =$_POST['precio_producto'];
$descripcion_producto =$_POST['descripcion_producto'];
$imagen_producto = $_FILES['imagen_producto'];
$talla_producto =$_POST['talla_producto'];


$directorio = "uploads/";

$archivo = $directorio . basename($_FILES["imagen_producto"]["name"]);

$tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

$checarFile = getimagesize($_FILES['imagen_producto']["tmp_name"]);

if ($tipoArchivo == "jpg" || $tipoArchivo == "jpeg" || $tipoArchivo == "png") {
    move_uploaded_file($_FILES["imagen_producto"]["tmp_name"], $archivo);
}

/*if ($checarFile) {
    $size = $_FILES['imagen_producto']['size'];
    if ($size > 500000) {
        throw new Error("Tamaño muy grande");
    } else {
        if ($tipoArchivo == "jpg" || $tipoArchivo == "jpeg" || $tipoArchivo == "png") {
            if (move_uploaded_file($_FILES["imagen_producto"]["tmp_name"], $archivo)) {
                echo "Imagen subida";
            } else {
                echo "Archivo no permitido";
            }
        }
    }
} else {
    echo "No existe el archivo";
} */

/* $sql = "INSERT INTO productos(nombre_producto, precio_producto , descripcion_producto, imagen_producto ,talla_producto)
            VALUES ('$nombre_producto','$precio_producto','$descripcion_producto','$imagen_producto','$talla_producto')";
$query= mysqli_query($conexion,$sql); */

/* if($query){
    Header("Location: producto.php");
    
}else {
} */




?>