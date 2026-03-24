<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        email
        <input type="email" name="email" id="">
        senha
        <input type="text" name="senha" id="">
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>

</html>

<?php

define("HOST", "localhost");
define("USUARIO", "root");
define("SENHA", "");
define("BANCO", "rosemarry1");

$mysqli = new mysqli(HOST, USUARIO, SENHA, BANCO);

if(!$mysqli->connect_errno){
    echo "ok";
}
// $palavrao = array(
//     'merda',
//     'bosta',
//     'pau'
// );
// $frase = "empresa paulista";

// echo str_replace($palavrao, "***", $frase);

// echo date("D/M/Y - h:i:s");

// if(isset($_POST['enviar'])){
//     echo $_POST['email'];

//     echo sha1($_POST['senha']);
// }


?>