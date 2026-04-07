<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07 de abril de 2026</title>
</head>
<body>
    <form action="" method="post">
        email
        <input type="email" name="email" id="">
        senha
        <input type="text" name="senha" id="">
        <input type="submit" value="login" name="enviar">
    </form>
</body>
</html>

<?php
    
define("HOST", "localhost");
define("USUARIO", "root");
define("SENHA", "");
define("BANCO", "rsemarry");

$mysqli = new mysqli(HOST, USUARIO, SENHA, BANCO);

if(isset($_POST['enviar'])){
   $email = $_POST['email'];
   $senha = $_POST['senha'];

   $query = "SELECT * FROM usuarios WHERE EMAIL = '$email' AND SENHA = '$senha'"; 
   $puxa = $mysqli->query($query);

   if($puxa->num_rows == 1){

        setcookie("Logado","Sim",time() + 120);
        session_start();

        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header("location:win.php");
   }else{
    echo "dados errados";
    }
}

?>