<pre>
<?php
    require_once 'pessoa.php';
    require_once 'livro.php';

 $p = array(); 
 $p[0] = new Pessoa("Fabiano", 40, "m");
 $p[1] = new Pessoa("Viviane", 41, "f");

 $l = array();
 $l[0] = new Livro("POO em PHP", "Gustavo Guanabara", 235, $p[0]);
 $l[1] = new Livro("A cabana", "Dora Quiteria", 87, $p[1]);
 $l[2] = new Livro("Panelinha", "Gastronomia Senac", 198, $p[1]);

//print_r($l[0]);

$l[0]->abrir();
$l[0]->folhear(115);
$l[0]->avancarPag();
$l[0]->avancarPag();
$l[0]->voltarPag();
$l[0]->detalhes();

$l[2]->detalhes();
?>
</pre>