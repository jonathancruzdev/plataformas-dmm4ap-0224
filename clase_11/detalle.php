<?php
    require_once('datos.php');
    require_once('html/header.php');
    require_once('html/nav.php');
    require_once('conexion.php');
    // Leemos la variable que pasamos por GET
    $id_producto = $_GET['id_producto'];
    echo("ID: $id_producto");

    $sql = "SELECT productos.nombre, foto, precio, productos.id_categoria, categorias.nombre AS categoria
            FROM productos
            INNER JOIN categorias ON categorias.id_categoria = productos.id_categoria
            WHERE id_producto = $id_producto";
    // 3. Ejecuto la consulta SQL
    $resultado = mysqli_query($conexion, $sql);
    $producto = mysqli_fetch_assoc( $resultado);

    $nombre = $producto['nombre'];
    $foto = $producto['foto'];
    $precio = $producto['precio'];
    $categoria = $producto['categoria'];

    print_r( $producto );

?>

    <main>

        <div class="row ">
            <div class="col-md-6">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo($foto);?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/notebook2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/notebook3.jpg" class="d-block w-100" alt="...">
                        </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                </div>
            </div>
            <div class="col-md-6">
                <h2> <?php echo($nombre); ?></h2>
                <h4> <span class="badge text-bg-success"><?php echo($categoria); ?></span> </h4>
                <p> $ <?php echo($precio); ?></p>

                <hr>

                <h4>Comentarios</h4>

                <ul class="list-group">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">A fourth item</li>
                    <li class="list-group-item">And a fifth one</li>
                </ul>

                <form action="" class="p-3">
                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                    <button type="button" class="btn btn-primary">Publicar</button>
                </form>
            </div>
            
        </div>

    </main>
<?php
    require_once('html/footer.php');
?>