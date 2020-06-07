<pre>
    <?php
        require_once 'pessoa.php';
        require_once 'alunos.php';
        require_once 'professores.php';
        require_once 'funcionarios.php';

        $p1 = new Pessoas();
        $p2 = new Aluno();
        $p3 = new Professores();
        $p4 = new Funcionarios();

        $p1->setNome("Fabiano");
        $p2->setNome("Viviane");
        $p3->setNome("Fernando");
        $p4->setNome("Marcio");

        $p1->setIdade(40);
        $p2->setCurso("Administração");
        $p3->setEspecialidade(123.50);
        $p4->setSetor("RH");

        $p3->setSexo("M");
        $p2->setIdade(28);
        $p4->mudarTrabalho();
        $p1->setSexo("Masculino");

        $p1->setIdade(52);
        $p2->cancelarMatr(true);
        $p3->receberAum(150);
        $p4->fazerNiver();

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);

    ?>
</pre>