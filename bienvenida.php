<?php

     session_start();
     if(!isset($_SESSION['usuario'])){
       echo'
           <script>
                 alert("Por favor debes iniciar sesion");
                 window.location = "login.php";
                 </script>
       ';
       session_destroy();
       die();
     }
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida - RenzoSanchez

    </title>
    

</head>
<body>
    <h1>Bienvenidos!!</h1>
    <a href= "php/cerrar_sesion.php">Cerrar Sesion</a>
</body>
</html>