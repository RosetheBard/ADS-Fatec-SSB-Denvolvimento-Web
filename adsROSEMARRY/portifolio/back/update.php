<?php
require_once("back/banco.php");

if (isset($_POST['editar_nome'])) {

    $novoNome = $_POST['name'];
    
    $atualiza = "UPDATE `user` SET `NOME` = '$novoNome' WHERE `user`.`ID` = 1;";
    
    if($mysqli->query($atualiza)){
            setcookie("atualizouDados", "Sim", time() + 120);
        }
}

if (isset($_POST['editar_apelido'])) {

    $novoApelido = $_POST['apelido'];

    $atualiza = "UPDATE `user` SET `APELIDO` = '$novoApelido' WHERE `user`.`ID` = 1;";
    
    if($mysqli->query($atualiza)){
            setcookie("atualizouDados", "Sim", time() + 120);
        }
}

if (isset($_POST['editar_descript'])) {

    $novaDesc = $_POST['descript'];

    $atualiza = "UPDATE `user` SET `ABOUT` = '$novaDesc' WHERE `user`.`ID` = 1;";
    
    if($mysqli->query($atualiza)){
            setcookie("atualizouDados", "Sim", time() + 120);
        }
}