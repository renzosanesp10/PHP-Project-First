<?php
include '../php/conexion.php';
$nombre_producto = $_POST['nombre_producto'];
$precio_producto = $_POST['precio_producto'];
$descripcion_producto = $_POST['descripcion_producto'];
$imagen_producto = $_FILES['imagen_producto'];
$talla_producto = $_POST['talla_producto'];

$fileName = basename($_FILES["imagen_producto"]["name"]);
$directorio = "/uploads";
$archivo = realpath(dirname(__DIR__) . "$directorio") . "\\$fileName";
$tipoArchivo = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
$checarFile = getimagesize($_FILES['imagen_producto']["tmp_name"]);
$url = "$directorio/$fileName";


if ($checarFile) {
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
}

if (isset($_POST["btnUpdateProducto"])) {
    $id_producto = $_POST['id_producto'];
    $sql = "UPDATE productos SET nombre_producto='$nombre_producto',precio_producto='$precio_producto',descripcion_producto='$descripcion_producto',imagen_producto='$url',talla_producto='$talla_producto' WHERE id_producto='$id_producto'";
    $query = mysqli_query($conexion, $sql);

    if ($query) {
        Header("Location: producto.php");
    }
} else {
    $sql = "INSERT INTO productos(nombre_producto, precio_producto , descripcion_producto, imagen_producto ,talla_producto)
            VALUES ('$nombre_producto','$precio_producto','$descripcion_producto','$url','$talla_producto')";
    $query = mysqli_query($conexion, $sql);

    if ($query) {
        Header("Location: producto.php");
    }
}
