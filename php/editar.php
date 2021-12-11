<?php
include './conexion.php';
$id = $_POST['id'];
$sql = "select * from usuarios where id= '".$id."'";
$resultado = mysqli_query($conexion,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){


?>
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

<h1>Editar Usuario</h1>

<form>
    <input type="hidden" name="id" value="<?php echo $fila['id']?>">
    <label>Correo: </label><br>
    <input type="text" name="correo" value="<?php echo $fila['correo']?>"><br>
    <label>Usuario: </label><br>
    <input type="text" name="usuario" value="<?php echo $fila['usuario']?>"><br>
    <input type="submit" name="" value="Actualizar">
    <a href="mostrarusuario.php">Regresar</a>
</form>

</div>
<?php
    $idp=$_POST['id'];
    $usuario=$_POST['usuario'];
    $correo=$_POST['correo'];
    if($usuario!=null || $correo!=null){
        $sql2="update usuarios set usuario='".$usuario."', correo='".$correo."' where id='".$idp."'";
        mysqli_query($conexion,$sql2);
        if($usuario=1){
            header("location: mostrarusuario.php");
        }
    }


?>
</body>
</html>