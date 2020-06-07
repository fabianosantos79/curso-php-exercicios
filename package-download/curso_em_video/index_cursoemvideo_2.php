<?php
    require_once 'exercicio_objeto.php';

    $p1 = new ContaBanco; //Jubileu
    $p2 = new ContaBanco; //Creuza

    $p1->abrirConta("CC");
    $p1->setDono("Jubileu");
    $p1->setNumConta(1111);
    $p1->depositar(300);
    $p1->sacar(250);
    $p1->pagarMensal();
    $p1->sacar(88);
    $p1->fecharConta();

    $p2->abrirConta("CP");
    $p2->setDono("Creuza");
    $p2->setNumConta(2222);
    $p2->depositar(500);
    $p2->sacar(100);
    $p2->pagarMensal();

   

    print_r($p1);
    echo "<br />";
    print_r($p2);

?>