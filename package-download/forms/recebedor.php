<?php

    session_start();

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    
    if($nome && $email && $idade){

    //COOKIE só pode ser daclarado antes de qualquer item na tela
    $expirar = time() + (84600 * 30);
    setcookie ('nome', $nome, $expirar);

    echo "Nome: ".$nome."<br />";
    echo "E-mail: ".$email."<br />";
    echo "Idade: ".$idade;

}else{
    $_SESSION['aviso'] = "Preencha os dados corretamente.";
    header ('Location: index.php'); //usar somente se antes não foi publicada nenhuma informação, DEVE VIR ANTES DE TUDO
    exit;
}

?>