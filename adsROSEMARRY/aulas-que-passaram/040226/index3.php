<?php
session_start();

define("HOST", "localhost");
define("USUARIO", "root");
define("SENHA", "");
define("BANCO", "rsemarry");

$mysqli = new mysqli(HOST, USUARIO, SENHA, BANCO);

$email = $_SESSION['email'];
$senha = $_SESSION['senha'];


$query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$puxa = $mysqli->query($query);
$mostra = $puxa->fetch_object();

echo "olá" ; //$mostra->nome;
?>