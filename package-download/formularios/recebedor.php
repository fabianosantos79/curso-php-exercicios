<?php

    session_start();

    $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
    $idade = filter_input(INPUT_GET, 'idade', FILTER_SANITIZE_NUMBER_INT);
    
    if($nome && $email && $idade){

        $expiracao = time() + (86400 *30);
        setCookie('nome', $nome, $expiracao);

        echo 'NOME: '.$nome.'<br />';
        echo 'E-MAIL: '.$email.'<br />';
        echo 'IDADE: '.$idade.'<br />';
    }else{
        $_SESSION['aviso'] = "<strong>Preencha os itens corretamente!</strong><br />";       header("Location: index.php");
        exit;
    }

    // FILTER_VALIDATE_EMAIL
    // FILTER_VALIDATE_INT
    // FILTER_VALIDATE_FLOAT
    // FILTER_VALIDATE_IP
    // FILTER_VALIDATE_URL

    // FILTER_SANITIZE_EMAIL
    // FILTER_SANITIZE_STRING
    // FILTER_SANITIZE_SPECIAL_CHARS
    // FILTER_SANITIZE_URL
    // FILTER_SANITIZE_NUMBER_FLOAT
    // FILTER_SANITIZE_NUMBER_INT

?>