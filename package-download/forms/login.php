<?php
    session_start();
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    
if($nome){
    $expirar = time() + (84600 * 30);
    setcookie('nome', $nome, $expirar);
    
    echo "Olá, ".$nome;
}else{
    header('Location: exercicio1.php');
}

?>
<br /><a href="apagar_cookie.php">Sair</a>