<?php
    session_start();
    require('header.php');

    if($_SESSION['aviso'])
    {
        echo $_SESSION['aviso'];
        $_SESSION['aviso'] = "";
    }
?>

<a href="apagar.php">Apagar Cookie</a>
<br />

<form method="GET" action="recebedor.php";>

    <label>
        Nome: 
        <br />
        <input type="text" name="nome" />
    </label>

    <label>
    <br /><br />
        E-mail:
        <br />
        <input type="text" name="email" />
    </label>

    <label>
    <br />
    <br />
        Idade: 
        <br />
        <input type="text" name="idade" />
    </label>
    <br />
    <br />
    <input type="submit" value="Enviar" />
</form>