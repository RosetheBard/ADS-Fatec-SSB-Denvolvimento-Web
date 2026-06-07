<?php

define("HOST", "localhost");
define("USUARIO", "root");
define("SENHA", "");
define("BANCO", "portifolio");

$mysqli = new mysqli(HOST, USUARIO, SENHA, BANCO);

if ($mysqli){
    setcookie("bancoOn","Sim",time() + 120);
}