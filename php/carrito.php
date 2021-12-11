<?php

$mensaje = "";

if(isset($_POST["btnAccion"])){
    switch($_POST["btnAccion"]){
        case 'Agregar':
            if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY))){
                $id=openssl_decrypt($_POST['id'],COD,KEY);
                $mensaje.= "Ok id correcto".$id."<br/>";
            }else{
                $mensaje.= "Id inconrrecto".$id."<br/>";
            }

            if(is_string( openssl_decrypt($_POST['nombre'],COD,KEY))){
            $NOMBRE= openssl_decrypt($_POST['nombre'],COD,KEY);
            }else{ $mensaje.= "Algo pasa con el nombre"."<br/>" ; break;}
            
            if(is_numeric( openssl_decrypt($_POST['precio'],COD,KEY))){
            $PRECIO= openssl_decrypt($_POST['precio'],COD,KEY);
            }else{ $mensaje.= "Algo pasa con la precio"."<br/>"; break;}

            if(is_numeric( openssl_decrypt($_POST['cantidad'],COD,KEY))){
            $CANTIDAD= openssl_decrypt($_POST['cantidad'],COD,KEY);
            }else{ $mensaje.= "Algo pasa con la cantidad"."<br/>"; break;}

        if(!isset($_SESSION['carrito'])){
            $producto=array(
                'id'=> $id,
                'NOMBRE'=> $NOMBRE,
                'CANTIDAD'=> $CANTIDAD,
                'PRECIO'=> $PRECIO,
            );
            $_SESSION['carrito'][0]=$producto;
            $mensaje="Producto agregado al carrito ";

        }else{
            $idProductos=array_column($_SESSION['carrito'], "id");
            if(in_array($id, $idProductos)){
                echo "<script>alert('El producto ya ha sido seleccionado..');</script>";
                $mensaje = "";
            }else{

            $numeroproductos=count($_SESSION['carrito']);
            $producto=array(
                'id'=> $id,
                'NOMBRE'=> $NOMBRE,
                'CANTIDAD' => $CANTIDAD,
                'PRECIO'=> $PRECIO,
                
            );
            $_SESSION['carrito'][$numeroproductos]=$producto;
            $mensaje="Producto agregado al carrito ";
            } 
        }
        //$mensaje=print_r($_SESSION,true);
        


        break;

        case "Eliminar":
            if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY))){
                $id=openssl_decrypt($_POST['id'],COD,KEY);

                foreach($_SESSION['carrito'] as $indice=>$producto){
                    if($producto['id']==$id){
                        unset($_SESSION['carrito'][$indice]);
                        echo "<script>alert('Elemento Eliminado...')</script>";
                        
                    }

                }
            }else{
                $mensaje.= "Id inconrrecto".$id."<br/>";
            }
            break;
        
        }

    
}
