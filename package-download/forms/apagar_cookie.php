<?php
        setcookie('nome', '', time() - 3600);

        header('Location: exercicio1.php');
        exit;
?>