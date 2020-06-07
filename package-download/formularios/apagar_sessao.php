<?php
    setcookie('nome', '', time() -3600);

    header("Location: ex_sessao.php");
    exit;
    
?>