<?php

$nome = "Fabiano";
//$sobrenome = " S Santos";


//$nomeCompleto = $nome;
//$nomeCompleto .= isset($sobrenome) ? $sobrenome : "";

//echo $nomeCompleto;

$nomeCompleto2 = $nome ?? "Digite seu nome: ...";
$nomeCompleto2 .= $sobrenome ?? "<br /> (sem sobrenome)";

echo $nomeCompleto2;

?>
