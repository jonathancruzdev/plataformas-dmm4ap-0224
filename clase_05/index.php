<?php
    $nombre = "Jonathan";
    $apellido = "Cruz";
    // Las comillas dobles interpretan las variables
    //echo("<h2> Nombre: $nombre </h2>");
    //echo('<h2> Nombre: $nombre </h2>');
    // Para concatenar usamos el punto .
    //echo('<h4>' . $apellido . '</h4>');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <header class="bg-primary text-white">
        <h1> Plataformas de Desarrollo</h1>
    </header>
    <main class="container">
        <div class="card p-3">
            <h4>Nombre: <?php echo($nombre); ?></h4>
            <p>Apellido: <?php echo($apellido); ?></p>
        </div>
    </main>
</body>
</html>