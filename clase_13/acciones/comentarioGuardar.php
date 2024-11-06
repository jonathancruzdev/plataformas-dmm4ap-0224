<?php
    session_start();
    require_once('../conexion.php');  // Paso 1. Importamos la conexión

    if( isset( $_POST['detalle']) && isset( $_GET['id_producto'])   ) {
  
        $detalle = $_POST['detalle'];
        $id_producto = $_GET['id_producto'];
        $id_usuario = $_SESSION['id_usuario'];
        $meGusta = 0;
        

        // Paso 2. Escribo la consulta SQL
        $sql = "INSERT INTO comentarios( fecha, meGusta, detalle, id_usuario, id_producto)
                VALUES( now() , $meGusta, '$detalle', $id_usuario, $id_producto)";
                
        // Paso 3. Ejecuto la consulta SQL
        $resultado = mysqli_query($conexion, $sql);
        header("Location: ../detalle.php?id_producto=$id_producto");

    } else {
        echo('<h2> Acceso incorrecto</h2>');
    }
?>