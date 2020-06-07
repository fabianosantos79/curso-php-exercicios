<?php

$lista1 = ['viviane','fabiano','fernando'];
$lista2 = ['maria','ricardo','marcio','nicole'];
$lista3 = [...$lista1, 'fulano', ...$lista2];

//echo print_r($lista3);


$cafe = [
    'pó',
    'água'
];
$cafeAdocado = [
    ...$cafe,
     'açucar'
    ];
echo $cafeAdocado[2];