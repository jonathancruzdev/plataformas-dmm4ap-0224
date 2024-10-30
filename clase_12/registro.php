<?php
    require_once('datos.php');
    require_once('html/header.php');
    require_once('html/nav.php');
?>

<main class="container">
    <div class="row mt-4">
        <div class="col"></div>
        <div class="col">
            <form action="acciones/usuarioRegistrar.php" method="POST" class="card p-4">
                <h2 class="text-center"> Registrarme</h2>

                <div class="mb-2">
                    <label for="nombre">Nombre</label>
                    <input name="nombre" class="form-control" type="text" required>
                </div>

                <div class="mb-2">
                    <label for="email">Email</label>
                    <input name="email" class="form-control" type="email" required>
                </div>

                <div class="mb-2">
                    <label for="clave">Contraseña</label>
                    <input name="clave" class="form-control" type="password" required>
                </div>

                <button class="btn btn-success" type="submit"> Registrarme</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
</main>
<?php
    require_once('html/footer.php');
?>