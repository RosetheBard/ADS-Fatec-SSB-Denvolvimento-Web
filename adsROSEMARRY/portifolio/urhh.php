<?php
require_once('back/dump.php');
require_once('back/userCtrl.php');
require_once('back/projetoCtrl.php');
require_once('back/update.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="esse é um website de portifolio, com o intuito de divulgar meus trabalhos e estudos">

    <!-- linkando com as folhas de estilo -->
    <link rel="shortcut icon" href="img/lua.png" type="img/lua.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/secret.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+GB+J:ital,wght@0,100..400;1,100..400&display=swap"
        rel="stylesheet">


    <title>ADM MODE</title>
</head>

<body class="container-fluid">
    <header class="d-flex row text-center">
        <div class="col-12">
            <img src="img/logo.jpg" alt="..." class="i-sm rounded-circle ">
        </div>
    </header>
    <main class="d-flex row justify-content-center">
        <div class="col-6">

            <div class="shadow-lg rounded-5 p-5 mt-3 ">

                <form action="" method="post">
                    <h1 class="text-center" style="color: white">Alterar dados</h1>

                    <p class="fs-1 border border-2 rounded-3 p-1 bc"> <?php echo $nome; ?> </p>
                    <div class="form-floating mb-3 m-5">
                        <input type="text" class="form-control rounded-4 shadow" name="name">
                        <label for="name">Nome</label>
                    </div>
                    <div class="m-4 text-center">
                        <button class="btn btn-primary btn-lg rounded-4 shadow" type="submit" value="editar_nome"
                            name="editar_nome">Salvar</button>
                    </div>
                </form>
                <form action="" method="post">
                <p class="fs-1 border border-2 rounded-3 p-1 bc"> <?php echo $nickname; ?> </p>
                <div class="form-floating m-5">
                    <input type="text" class="form-control rounded-4 shadow" id="apelido" name="apelido">
                    <label for="apelido">Apelido</label>
                </div>
                <div class="m-4 text-center">
                    <button class="btn btn-primary btn-lg rounded-4 shadow" type="submit" value="editar_apelido"
                        name="editar_apelido">Salvar</button>
                </div>
                </form>
                <form action="" method="post">
                <p class="fs-1 border border-2 rounded-3 p-1 bc text-truncate"> <?php echo $desc; ?> </p>
                <div class="form-floating m-5">
                    <textarea class="form-control rounded-4" name="descript" rows="5"></textarea>
                    <label for="descript">Descrição</label>
                </div>


                <div class="m-4 text-center">
                    <button class="btn btn-primary btn-lg rounded-4 shadow" type="submit" value="editar_descript"
                        name="editar_descript">Salvar</button>
                </div>
                </form>

                <?php

                for ($i = 1; $i <= $repeat; $i++) {
                    $query1 = "SELECT * FROM projetos WHERE ID = '$i'";
                    $puxa1 = $mysqli->query($query1);
                    $mostra = $puxa1->fetch_object();

                    $getnome = $mostra->NOME;

                    echo '<div class="d-flex align-items-center m-3 p-2">';
                    $project = '<div class="card m-3 bc" style="width: 18rem; "><img src="img/pfbanner.jpg" class="card-img-top" alt="..."><div class="card-body bc"><h5 class="card-title">' . $mostra->NOME . '</h5><p class="card-text">' . $mostra->DESCRIPT . '</p><a href="' . $mostra->URL . '" class="btn btn-primary">Veja Agora</a></div></div>';
                    echo $project;

                    $project_form = '

                    <div class="shadow rounded-3 p-2 text-white text-center">
                         <form action="" method="post">
                            <h2>Testando</h2>
                            <div class="form-floating mb-3 m-2">
                                <input type="text" class="form-control rounded-4 shadow" name="name">
                                <label for="name">Nome</label>
                            </div>
                            <div class="form-floating m-2">
                                <textarea class="form-control rounded-4" name="descript" rows="5"></textarea>
                                <label for="descript">Descrição</label>
                            </div>
                            <div class="row g-3 align-items-center m-2">
                                <div class="col-auto">
                                    <label for="datainit" class="col-form-label">Inicio</label>
                                </div>
                                <div class="col-auto">
                                    <input type="date" name="datainit" class="form-control">
                                </div>
                            </div>
                            <div class="row g-3 align-items-center m-2">
                                <div class="col-auto">
                                    <label for="datafim" class="col-form-label">Fim</label>
                                </div>
                                <div class="col-auto">
                                    <input type="date" name="datafim" class="form-control">
                                </div>
                            </div>
                            <div class="m-4 text-center">
                                <button class="btn btn-primary btn-lg rounded-4 shadow" type="submit" value="editar_projeto"
                                name="editar_projeto">Salvar</button>
                            </div>
                         </form>
                    </div>

                    ';
                    echo $project_form;
                    echo '</div>';

                    if (isset($_POST['editar_projeto'])) {

                        $namepj = $_POST['name'];
                        $descript = $_POST['descript'];
                        $datainit = $_POST['datainit'];
                        $datafim = $_POST['datafim'];


                        $atualiza = "UPDATE projetos 
                    SET NOME = '$namepj',
                    DATAINIt = '$descript',
                    DATAFIM = '$datainit', 
                    DESCRIPT = '$datafim', 
                    WHERE 'projeto.NOME' = '$getnome';";

                        if ($mysqli->query($atualiza)) {
                            echo '<p>funcionou</p>';
                        }
                    }

                }

                ?>

            </div>

        </div>
    </main>
    <footer class="d-flex row">
        <small> by Rosemary </small>
    </footer>
</body>

</html>