<?php
    require_once('../conexion.php');  // Paso 1. Importamos la conexión
    // Validamos que los datos se pasaron por medio de un formulario
    if( isset( $_POST['nombre']) && isset( $_POST['email']) && isset( $_POST['clave'])   ) {
        // Recibimos los datos del formulario por medio del array globla $_POST[]
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $clave = $_POST['clave'];
        $id_rol = 2;
        // Hacemos un hash de la clave
        $clave = md5($clave);

        // Paso 2. Escribo la consulta SQL
        $sql = "INSERT INTO usuarios( id_rol, nombre, email, clave)
                VALUES($id_rol, '$nombre', '$email', '$clave')";
                
        // Paso 3. Ejecuto la consulta SQL
        $resultado = mysqli_query($conexion, $sql);
        header('Location: ../login.php');

    } else {
        echo('<h2> Acceso incorrecto</h2>');
    }
?>