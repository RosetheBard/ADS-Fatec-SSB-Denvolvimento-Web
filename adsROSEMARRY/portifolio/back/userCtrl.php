<?php
require_once('banco.php');

$query = "SELECT * FROM user";
$puxa = $mysqli->query($query);
$mostra = $puxa->fetch_object();

$nome = $mostra->NOME;

$nickname = $mostra->APELIDO;

$desc = $mostra->ABOUT;