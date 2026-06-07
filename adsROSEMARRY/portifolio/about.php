<?php
require_once('back/userCtrl.php');
require_once('back/projetoCtrl.php');
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- metadados -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="esse é um website de portifolio, com o intuito de divulgar meus trabalhos e estudos">

    <!-- links -->
    <link rel="shortcut icon" href="img/lua.png" type="img/lua.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+GB+J:ital,wght@0,100..400;1,100..400&display=swap"
        rel="stylesheet">

    <title>Rose-AboutPage</title>
</head>

<body>
    <header class="row p-1">
        <nav class="text-center">
            <img src="img/logoLight.jpg" alt="logo do portifolio" class="i-sm ms-4 rounded-circle">
        </nav>
    </header>
    <main class="row d-flex align-items-center p-4">
        <div class="col-12 col-md-6 position-relative top-0">
            <h1 class="playwrite-gb-j fs-1 fw-bold">Quem é <?PHP echo $nickname; ?> ?</h1>
            <p class="playwrite-gb-j fs-3 text-wrap p-4 fw-semibold">
                <?PHP echo $desc; ?>
            </p>

            <div class="btn-group playwrite-gb-j btn-group-lg" role="group" aria-label="Basic example">

                <a href="index.php" class="btn btn-outline-dark fs-2">Home</a>
                <a href="projects.php" class="btn btn-outline-dark fs-2">Projetos</a>

            </div>
        </div>

        <div class="col-12 col-md-6 p-4">
            <img src="img/logoLight.jpg" class="img-fluid rounded float-end me-4" alt="Descrição da imagem">
        </div>
    </main>
    <footer class="row">
        <small>Feito por Rosemarry Munhoz</small>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>