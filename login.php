<?php

   session_start();
   
   if(isset($_SESSION['usuario'])){
     header("location: bienvenida.php");
   }
   


/*
   if(isset($_SESSION['rol'])){
       switch($_SESSION['rol']){
           case 1:
               header('location: admi.php');
            break;

            case 2:
                header('location: repartidor.php');
            break;

            case 3:
                header('location: cliente.php');
            break;
            
            default: 
        }
   }

    if(isset($_POST['usuario']) && isset($_POST['contrasena'])){
       $correo = $_POST['correo'];
       $contrasena = $_POST['contrasena'];

       $db = new Database();
       $query = $db->connect()->prepare('SELECT*FROM usuarios WHERE correo = :correo AND contrasena = :contrasena');
       $query->excute(['correo' => $correo, 'contrasena' => $contrasena]);

       $row = $query->fetch(PD0::FETCH_NUM);
       if($row == true){
           //validar rol
           $rol = $row[3];
           $_SESSION['rol'] = $rol;

           switch($_SESSION['rol']){
            case 1:
                header('location: admi.php');
             break;
 
             case 2:
                 header('location: repartidor.php');
             break;
 
             case 3:
                 header('location: cliente.php');
             break;
             
             default: 
         }
       }else{
           //no existe el usuario
           echo "El usuario o contraseña son incorrectos"
       }
   }
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>
    <link rel="icon" type="" href="img/corbata.jpg">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>


                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_usuario.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button type="submit">Entrar</button>
                        <!-- <a href="index.html"><button>Entrar</button></a> -->
                    </form>


                    <form action="php/registro_usuario.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>
        </main>

        <script src="./js/login.js"></script>
</body>
</html>