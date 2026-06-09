<?php
require_once("back/banco.php");

$login_falhou = false;
$errorString = "d-none";

if (isset($_POST['login'])) {
    $nome = $_POST['name'];
    $senha = (trim($_POST['senha']));

    $query = "SELECT * FROM adimin WHERE NOME = '$nome' AND SENHA = '$senha'";
    $puxa = $mysqli->query($query);


    if ($puxa->num_rows == 1) {
        setcookie("Logado", "Sim", time() + 120);
        session_start();

        $_SESSION['nome'] = $nome;
        $_SESSION['senha'] = $senha;

        header("location:urhh.php");

    } else {
        $login_falhou = true;
        $errorString = "d-block";
    }
}