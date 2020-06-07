<?php

function somar(int $n1, int $n2=0, int $n3=0)
{
    $total = $n1 + $n2 + $n3;
    return $total;
}

$somar = somar(10, 5);
echo "TOTAL: ".$somar."<br />";

$x = somar(4, 3);
$y = somar(5, 3, 2);
$w = somar($x, $y);

echo "Soma das variáveis: ".$w;

?>


