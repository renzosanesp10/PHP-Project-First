<?php

include("../php/conexion.php");

$nombre_producto = $_GET['id_producto'];
$sql = "DELETE FROM productos  WHERE id_producto='$nombre_producto'";

$query = mysqli_query($conexion, $sql);

if ($query) {
    Header("Location: producto.php");
}
