<?php

define("HOST", "mysql.fatecss.com.br");
define("USUARIO", "fatecss03");
define("SENHA", "zAHAANDO0606");
define("BANCO", "fatecss03");

$mysqli = new mysqli(HOST, USUARIO, SENHA, BANCO);

if ($mysqli){
    setcookie("bancoOn","Sim",time() + 120);
}