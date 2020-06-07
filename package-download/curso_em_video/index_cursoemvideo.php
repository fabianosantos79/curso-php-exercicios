<?php
    require_once 'objeto_cursoemvideo.php';
    

    $c1 = new Caneta;
    $c1->cor = 'azul';
    $c1->ponta = 0.5;
    $c1->tampada = false;
    $c1->destampar();
    $c1->rabiscar();

    echo"<br />";

    print_r ($c1);

    $c2 = new Caneta;
    $c2->cor = 'vermelha';
    $c2->carga = 1.2;
    $c2->tampar();

    echo"<br />";

    print_r ($c2);

    echo"<hr />";


?>