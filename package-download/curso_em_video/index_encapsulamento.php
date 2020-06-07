<?php

    require_once "encapsulamento.php";

    echo "<h1> Projeto Controle Remoto </h1>";

    $c = new ControleRemoto();
    $c->ligar();
    $c->play();
    $c->maisVolume();
    $c->ligarMudo();
    $c->desligarMudo();
    $c->maisVolume();
    $c->maisVolume();
    $c->maisVolume();
    $c->maisVolume();
    $c->abrirMenu();
    $c->fecharMenu();
    $c->pause();
    $c->desligar();

?>