<?php
    require_once('datos.php');
    require_once('html/header.php');
    require_once('html/nav.php');
    require_once('conexion.php');
    // Leemos la variable que pasamos por GET
    $id_producto = $_GET['id_producto'];
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

    // Traemos los comentarios del producto
    $sqlComentarios =  "SELECT c.id_comentario, c.fecha, c.meGusta, c.detalle, u.nombre
                        FROM comentarios c
                        INNER JOIN usuarios u ON u.id_usuario = c.id_usuario
                        WHERE c.id_producto = $id_producto";
    $resultadoComentarios = mysqli_query($conexion, $sqlComentarios);
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
                    <?php
                        while( $comentario = mysqli_fetch_assoc( $resultadoComentarios) ) {
                            $id_comentario = $comentario['id_comentario'];
                            $detalle = $comentario['detalle'];
                            $meGusta = $comentario['meGusta'];
                            $nombre = $comentario['nombre'];
                            echo("<li class='list-group-item'>
                                    <strong>$nombre:</strong> $detalle
                                    <span class='badge text-bg-success'>$meGusta</span>
                                    <a href='acciones/darMeGusta.php?id_producto=$id_producto&id_comentario=$id_comentario&meGusta=$meGusta'>
                                        <i class='fa-solid fa-heart text-danger'></i>
                                    </a>   
                                </li>");
                        }
                    ?>
                    
                </ul>
                <?php
                    if( isset( $_SESSION['id_usuario']) ){
                ?>
                    <form action="acciones/comentarioGuardar.php?id_producto=<?php echo($id_producto);?>" method="post" class="p-3">
                        <textarea class="form-control" name="detalle" cols="30" rows="4"></textarea>
                        <button type="submit" class="btn btn-primary">Publicar</button>
                    </form>
                <?php
                    } else {
                ?>
                    <div class="alert alert-danger mt-4">  Para comentar es necesario iniciar session </div>
                <?php
                        }
                ?>
            </div>
            
        </div>

    </main>
<?php
    require_once('html/footer.php');
?>