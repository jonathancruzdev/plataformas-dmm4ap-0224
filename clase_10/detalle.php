<?php
    require_once('datos.php');
    require_once('html/header.php');
    require_once('html/nav.php');
?>

    <main>

        <div class="row ">
            <div class="col-md-6">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/notebook.jpg" class="d-block w-100" alt="...">
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
                <h2> Nompbre de Producto</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur repudiandae iste ex omnis sit necessitatibus cum velit, unde voluptate veniam, impedit quaerat commodi consequatur sed at suscipit pariatur non veritatis?
                </p>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni praesentium aliquam nemo officiis voluptate, nesciunt corrupti iusto quae deleniti. Nihil asperiores ab blanditiis nam dolorem eius autem unde nemo doloribus?
                </p>

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