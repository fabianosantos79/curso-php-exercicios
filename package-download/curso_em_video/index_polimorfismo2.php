<?php
    require_once 'animal2.php';
    require_once 'cachorro2.php';
    require_once 'mamifero2.php';
    require_once 'lobo.php';

    $m = new Mamifero2();
    $c = new Cachorro2();
    $l = new Lobo();

    $m->emitirSom();
    $l->emitirSom();
    $c->emitirSom();

    $c->reagirFrase("");
    $c->reagirHora(19, 00);
    $c->reagirDono(false);
    $c->reagirIdadePeso(4, 12);

?>