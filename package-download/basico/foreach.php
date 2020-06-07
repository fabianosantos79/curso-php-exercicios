<?php

$ingredientes = [
    'açucar',
    'ovo',
    'farinha de trigo',
    'leite',
    'fermento em pó'
];

foreach($ingredientes as $item)
{
    echo "Item: ".$item."<br />";
};

echo "<hr />";

foreach($ingredientes as $chave => $item)
{
    echo "Item ".($chave + 1).": ".$item."<br />";
}

echo "<hr />";
echo"<h2>Ingredientes</h2>";
echo"<ul>";
    foreach($ingredientes as $valor)
    {
        echo "<li>".$valor."</li>";
    }
echo"</ul>";

//print_r($ingredientes);

?>
