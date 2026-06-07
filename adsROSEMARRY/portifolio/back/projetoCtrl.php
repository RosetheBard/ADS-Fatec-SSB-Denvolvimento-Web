<?php
require_once('banco.php');

$query = "SELECT * FROM projetos";
$puxa = $mysqli->query($query);

$repeat = $puxa->num_rows;



?>