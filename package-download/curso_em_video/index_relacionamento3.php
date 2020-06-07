<pre>
<?php

    require_once 'pessoa2.php';
    require_once 'livro2.php';

    $p = array();
    $p[0] = new Pessoa2("Fernando", 0, "m");
    $p[1] = new Pessoa2("Marcio", 11, "m");

    $l = array();
    $l[0] = new Livro2("Livro Java", "Neri Neitzke", 453, $p[0]->getNome());
    $l[1] = new Livro2("PHP com OO", "Maujor", 270, $p[1]->getNome());
    $l[2] = new Livro2("HTML 5", "Bonieky", 87, $p[0]->getNome());

    $p[0]->fazerNiver();

    print_r($l[2]);
    print_r($p[0]);

    echo $l[0]->detalhes();
    
    

?>
</pre>