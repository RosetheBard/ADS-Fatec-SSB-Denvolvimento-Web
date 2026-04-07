<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>

<?php 
session_start();
define("HOST", "localhost");
define("USUARIO", "root");
define("SENHA", "");
define("BANCO", "rsemarry");

$mysqli = new mysqli(HOST, USUARIO, SENHA, BANCO);

$email = $_SESSION['email'];
$senha = $_SESSION['senha'];


$query = "SELECT * FROM usuarios WHERE EMAIL = '$email' AND SENHA = '$senha'";
$puxa = $mysqli->query($query);
$mostra = $puxa->fetch_object();

if(isset($mostra->NOME)){
    echo "Olá " . $mostra->NOME;
}
?>