<pre>
<?php
    require_once 'visitante.php';
    require_once 'aluno2.php';
    require_once 'bolsista.php';
    require_once 'tecnico.php';
    require_once 'professor.php';

    /*
    $v1 = new Visitante();
    $v1->setNome("Juvenal");
    $v1->setIdade(33);
    $v1->setSexo( "M");
    print_r($v1);
    */

    $al = new Aluno();
    $al->setNome("Fabiano");
    $al->setIdade(40);
    $al->setCurso("Computação");
    $al->setMatricula(1111);
    $al->pagarMensalidade();

    print_r($al);

    $bo = new Bolsista();
    $bo->setNome("Ricardo");
    $bo->setMatricula(2222);
    $bo->setBolsa(12.5);
    $bo->setIdade(35);
    $bo->setSexo("M");
    $bo->pagarMensalidade();
    
    print_r($bo);

    $te = new Tecnico();
    $te->setNome("Fulana");
    $te->setRegProfissional(786);
    $te->setIdade(45);
    $te->setCurso("Publicidade");
    $te->setSexo("F"); 
    $te->pagarMensalidade();
    $te->praticar();
    

    print_r($te);

    $pro = new Professor();
    $pro->setNome("Pardal");
    $pro->setEspecialidade("História");
    $pro->setSalario(1200);
    $pro->setIdade(53);
    $pro->receberAumento();

    print_r($pro);

?>
</pre>