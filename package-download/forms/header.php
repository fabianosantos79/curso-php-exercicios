<?php
    require_once 'config.php';
?>
<h1>Cabeçalho <?php echo $versao; ?></h1>

<h2><?php 
    if (isset($_COOKIE['nome']))
    {   
        echo $_COOKIE['nome'];
        echo $nome;
    }
?>
<h2>

<hr />