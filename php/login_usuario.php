<?php

    session_start();

    include 'conexion.php';
    include_once("./helpers.php");

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];


    // $validar_login = mysqli_query($conexion, "select * from usuarios where correo='$correo' and contrasena=$contrasena");
    $validar_login = mysqli_query($conexion, "select rol_id, usuario from usuarios where correo='$correo' and contrasena='$contrasena'");
    $row = mysqli_fetch_array($validar_login, MYSQLI_ASSOC);

    $_SESSION['usuario'] = $row["usuario"];

    switch ($row["rol_id"]) {
        case '1':
            header ("location: ../admi.php");
            break;
        case '2':
            header ("location: ../repartidor.php");
            break;
        case '3':
            header ("location: ../cliente.php");
            break;
        default:
            echo'
            <script>
                alert("Usuario no identificado, por favor registrese");
                window.location = "../login.php";
            </script>
            ';
            break;
    }

    /* if(mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario'] = $correo;
        header("location: ../bienvenida.php");
        exit;
    }else{
        echo '
        <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location =  "../login.php";
        </script>
        ';
        exit;
    } */
