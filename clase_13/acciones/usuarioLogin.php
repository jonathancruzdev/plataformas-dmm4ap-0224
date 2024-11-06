<?php
    session_start();  // Inciamos el trabajo con sesiónes
    require_once('../conexion.php');  // Paso 1. Importamos la conexión
    // Validamos que los datos se pasaron por medio de un formulario
    if( isset( $_POST['email']) && isset( $_POST['clave'])   ) {
        // Recibimos los datos del formulario por medio del array globla $_POST[]
        $email = $_POST['email'];
        $clave = $_POST['clave'];
        // Hacemos un hash de la clave
        $clave = md5($clave);

        // Paso 2. Escribo la consulta SQL
        $sql = "SELECT id_usuario, id_rol, nombre, clave
                FROM usuarios
                WHERE email = '$email' AND clave = '$clave' ";

        // Paso 3. Ejecuto la consulta SQL
        $resultado = mysqli_query($conexion, $sql);
        $usuario = mysqli_fetch_assoc( $resultado);
        if( $usuario){
            $nombre = $usuario['nombre'];
            $id_usuario = $usuario['id_usuario'];
            $id_rol = $usuario['id_rol'];
            // Guardamos los datos el usuario logueado en la session
            $_SESSION['id_usuario'] = $id_usuario;
            $_SESSION['nombre'] = $nombre;

            echo("<h2> Bienvenido $nombre </h2>");
            header('Location: ../index.php');
        } else{
            echo("<h2> Credenciales incorrectas </h2>");

        }
        //header('Location: ../login.php');

    } else {
        echo('<h2> Acceso incorrecto</h2>');
    }



?>