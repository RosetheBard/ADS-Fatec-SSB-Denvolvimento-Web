<?php
require_once("geral.php");
echo "<script>console.log('Foi aaaaaaaaaaa')</script>";

if(isset($_POST['enviar'])){
    if(
        !empty($_POST['nome']) &&
        !empty($_POST['senha'])
    ){
        $nome = trim($_POST['nome']);
        $senha = base64_encode(trim($_POST['senha']));
        $insere = "INSERT INTO usuarios(NOME,SENHA) VALUES('$nome','$senha')";

        if($mysqli->query($insere)){
            echo "funcionou aeeeeeeeee!!!!!!";
        }else{
            echo "deu certo não pai";
        }
    }else{
        echo "preencha tudo vagabundo!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input required="required" type="text" name="nome">
        <input required="required" type="password" name="senha">
        <input type="submit" value="cadastrar" name="enviar">
    </form>
</body>
</html>