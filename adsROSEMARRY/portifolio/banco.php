<?php

define("HOST", "ftp.fatecss.com.br");
define("USUARIO", "fatecss");
define("SENHA", "Bynqed-Hikre1-xycr*b");
define("BANCO", "portifolio");

$mysqli = new mysqli(HOST, USUARIO, SENHA, BANCO);

if ($mysqli){
    setcookie("bancoOn","Sim",time() + 120);
}