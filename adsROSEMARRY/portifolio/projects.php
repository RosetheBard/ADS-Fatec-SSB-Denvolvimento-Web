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

    <title>Rose-ProjectsPage</title>
</head>

<body>
    <header class="row p-1">
        <nav class="text-center">
            <img src="img/logoLight.jpg" alt="logo do portifolio" class="i-sm ms-4 rounded-circle">
        </nav>
    </header>
    <main class="row">
        <div class="col-3"></div>
        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-2 shadow-lg">
            <div class="flex-column">
                <div class="d-flex-inline p-2 text-center">

                    <h1 class="playwrite-gb-j mb-5 fw-bold">Meus Projetos</h1>

                    <div class="btn-group playwrite-gb-j btn-group-lg" role="group" aria-label="Basic example">

                        <a href="about.php" class="btn btn-outline-dark fs-2">Sobre Mim</a>
                        <a href="index.php" class="btn btn-outline-dark fs-2">Home</a>

                    </div>
                </div>
                <?php
                for ($i = 1; $i <= $repeat; $i++) {
                    $query1 = "SELECT * FROM projetos WHERE ID = '$i'";
                    $puxa1 = $mysqli->query($query1);
                    $mostra = $puxa1->fetch_object();


                    $project = '<div class="card bc m-4" style="max-width: 540px;"><div class="row g-0"><div class="col-md-4"><img src="img/logo.jpg" class="img-fluid rounded" alt="..."></div><div class="col-md-8"><div class="card-body"><h5 class="card-title">' . $mostra->NOME . '</h5><p class="card-text">' . $mostra->DESCRIPT . '.</p><p class="card-text"><small class="text-body-secondary">' . $mostra->DATAINIT . ' --->  ' . $mostra->DATAFIM . '</small></p></div></div></div></div>'
                    ;
                    echo $project;

                }
                ?>
            </div>
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