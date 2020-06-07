<?php

$nome = "fabiano s santos";
$nomeSujo = "    Fabiano    ";
$nomeLimpo = trim($nomeSujo);
$numero = 12923.12;

echo strlen($nomeSujo);
echo"<br />";
echo strlen($nomeLimpo);
echo"<br />";

echo strtoupper ($nome);
echo"<br />";
echo strtolower ($nome);
echo"<br />";
$nomeAlterado = str_replace('Santos','Abraham',$nome);
echo $nomeAlterado;
echo"<br />";
$nomeCompleto = substr($nome, 0, 4);
echo $nomeCompleto;
echo"<br />";
$posicao = strpos($nome, 'ano');
echo $posicao;
echo"<br />";
echo ucfirst($nome);
echo"<br />";
echo ucwords($nome);
echo"<br />";
$nomes = explode(" ", $nome);
print_r($nomes);
echo"<br />";
echo 'R$ '.number_format($numero, 2, ',', '.');
$nomes

?>


