<?php

$nome= $_POST[""];
$email= $_POST[""];
$login= $_POST[""];
$senha= $_POST[""];

//$nome= "Ryan";
//$email= "ryangabriel142@gmail.com";
//$login= "ryangabriel142";
//$senha= "ryan";

include("tarefa1.php");

$usuario = new Usuario();

$usuario-> addusuario($nome, $email, $login, $senha);

print_r($usuario)

?>