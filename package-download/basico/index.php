<?php

require_once('./template/header.php');


echo"Conteúdo do site";

echo "<br />";

require('config.php');

echo "Nome de usuário: ".$usuario;

echo "<br />";

echo "Senha do usuário: ".$senha;

echo "<hr />";

?>

<a href="paginas/home.php">Home</a>
<a href="paginas/sobre2.php">Sobre</a>