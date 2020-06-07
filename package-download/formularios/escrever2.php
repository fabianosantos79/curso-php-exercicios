<?php

$texto = file_get_contents('nome.txt');

echo $texto."<br />";

$texto.= "o melhor programador PHP";

file_put_contents('nome.txt', $texto);

echo $texto;

?>