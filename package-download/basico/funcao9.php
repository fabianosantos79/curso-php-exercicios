<?php

$lista = [
    'nome1',
    'nome2',
    'nome3',
    'nome4',
    'nome5'
];

echo count($lista);
echo "<br />";

$listaProva =[
    'fabiano',
    'viviane',
    'fernando',
    'marcio',
    'ricardo',
    'nicole',
    'maria',
    'jose'
];

$listaAprovados = [
    'fabiano',
    'fernando',
    'marcio',
    'maria'
];

$listaReprovados = array_diff($listaProva, $listaAprovados);
print_r($listaReprovados);
echo "<br />";
echo count($listaReprovados);
echo "<br />";
echo "<br />";


$numeros = [
    45,
    24,
    17,
    9,
    96,
    11,
    2
];

$filtrados = array_filter($numeros, function($item){
    if ($item < 20){
        return true;
    }else{
        return false;
    }
});

print_r($filtrados);

echo "<br />";

$dobrados = array_map(function($item){
    return $item *2;
}, $numeros);

print_r($dobrados);

echo "<br />";

$excluirUltimo = array_pop($numeros);
print_r($numeros);
echo "<br />";

$excluirPrimeiro = array_shift($numeros);
print_r($numeros);
echo "<br />";

if (in_array('fabiano', $listaProva))
{
    echo "Existe";
}else{
    echo "Não existe";
};
echo "<br />";
$posi = array_search('maria', $listaProva);
echo $posi;
echo "<br />";

sort($numeros);
print_r($numeros); 
echo "<br />";
rsort($numeros);
print_r($numeros);
echo "<br />";
asort($numeros);
print_r($numeros);
echo "<br />";
arsort($numeros);
print_r($numeros);
echo "<br />";

$nomes = [
    'Fabiano',
    'da',
    'Silva',
    'Santos'
];

$nomes = implode(' ', $nomes);

echo $nomes;

?>

