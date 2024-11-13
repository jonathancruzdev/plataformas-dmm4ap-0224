<?php
    require_once('../conexion.php');  // Paso 1. Importamos la conexión

    // Si quiero saber el usuario que dio Like
    //session_start();
    //$id_usuario = $_SESSION['id_usuario'];
    // ------

    $id_producto = $_GET['id_producto'];
    $id_comentario = $_GET['id_comentario'];
    $meGusta = $_GET['meGusta'];

    $meGusta = $meGusta + 1;

    $sql = "UPDATE comentarios
            SET meGusta = $meGusta
            WHERE id_comentario = $id_comentario";
   
    $resultado = mysqli_query($conexion, $sql);
    header("Location: ../detalle.php?id_producto=$id_producto");

?>