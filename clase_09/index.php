<?php
    require_once('datos.php');
    require_once('html/header.php');
    require_once('html/nav.php');
?>

    <main>
        <div class="row ">

            <?php

                for($i=0; $i<3; $i++){
                    $nombre = $productos[$i]['nombre'];
                    $precio = $productos[$i]['precio'];
                    $foto = $productos[$i]['foto'];

                    echo("<div class='card col-md-3'>
                            <img src='$foto' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>$nombre</h5>
                                <p class='card-text'>$ $precio</p>
                                <a href='detalle.php' class='btn btn-primary'>Ver mas</a>
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