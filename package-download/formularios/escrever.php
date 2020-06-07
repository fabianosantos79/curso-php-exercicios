<?php

$texto = "Autor: Fabiano da Silva Santos <br />";

$texto .= "<br />Arquivo criado com sucesso!";

file_put_contents('nome.txt', $texto);

echo "$texto";



?>