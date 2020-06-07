<?php
    session_start();

    $nome = $_POST['nome'];

    $expiracao = time() + (86400 * 30); // data de expiracao do cookie - 30 dias
    setcookie('nome', $nome, $expiracao);

    $_SESSION['aviso'] = 'Digite seu nome corretamente.';

    if($_COOKIE['nome']){
        $nome = $_COOKIE['nome'];
        echo "<h2>Olá ".$nome." seja, bem vindo.</h2>";
    }
?>

<br />
<a href="apagar_sessao.php">Sair</a>