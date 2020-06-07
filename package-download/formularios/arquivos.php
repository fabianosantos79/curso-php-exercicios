<?php

$texto =  file_get_contents('texto.txt');
echo ($texto)."<br /><br />";
$texto = explode("\n", $texto);

echo "Linhas: ".count($texto);

?>