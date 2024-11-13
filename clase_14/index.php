<?php
    require_once('datos.php');
    // 1. Realizo la conexión
    require_once('conexion.php');
    require_once('html/header.php');
    require_once('html/nav.php');

    // leemos el valor por GET
    if(  isset($_GET['id_categoria']) ){
        $id_categoria = $_GET['id_categoria'];
        //echo("<h2> $id_categoria </h2>");
        $sql = "SELECT id_producto, productos.nombre, foto, precio, productos.id_categoria, categorias.nombre AS categoria
                FROM productos
                INNER JOIN categorias ON categorias.id_categoria = productos.id_categoria
                WHERE productos.id_categoria = $id_categoria";

    } else {
        //echo("<h2> No se paso el id de la categoría</h2>");
            // 2. Escribo la consulta SQL
        $sql = "SELECT id_producto, productos.nombre, foto, precio, productos.id_categoria, categorias.nombre AS categoria
                FROM productos
                INNER JOIN categorias ON categorias.id_categoria = productos.id_categoria
                LIMIT 4";
    }



    // 3. Ejecuto la consulta SQL
    $resultado = mysqli_query($conexion, $sql);

?>
    <main>
        <div class="row d-flex justify-content-evenly">
            <?php
                while( $producto = mysqli_fetch_assoc( $resultado)) {
                    $id_producto = $producto['id_producto'];
                    $nombre = $producto['nombre'];
                    $precio = $producto['precio'];
                    $foto = $producto['foto'];
                    $id_categoria = $producto['id_categoria'];
                    $categoria = $producto['categoria'];

                    echo("<div class='card col-md-3'>
                            <img src='$foto' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <span class='badge text-bg-secondary'> $categoria </span>
                                <h5 class='card-title'>$nombre</h5>
                                <p class='card-text'>$ $precio</p>
                                <a href='detalle.php?id_producto=$id_producto' class='btn btn-primary'>Ver mas</a>
                            </div>
                        </div>");
                }


            ?>

            <!-- 
            <div class="card col-md-3">
                <img src="images/notebook.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Producto 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="detalle.php" class="btn btn-primary">Ver mas</a>
                </div>
            </div>
            <div class="card col-md-3">
                <img src="images/notebook.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Producto 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="detalle.php" class="btn btn-primary">Ver mas</a>
                </div>
            </div>
            <div class="card col-md-3">
                <img src="images/notebook.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Producto 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="detalle.php" class="btn btn-primary">Ver mas</a>
                </div>
            </div>
-->

        </div>
    </main>
<?php
    require_once('html/footer.php');
?>