<?php

    session_start();
    require 'header.php';

    if($_SESSION['aviso']){
        echo $_SESSION['aviso'];
        $_SESSION['aviso'] = "";
    }
    

?>
<a href="apagar_cookie.php">Apagar Cookie</a>
<br /><br />
<form method="POST" action="recebedor.php">
    <label>
        Nome:<br />
        <input type="text" name="nome" placeholder="Digite seu nome" />
    </label>
    <br />
    <br />

    <label>
        E-mail:<br />
        <input type="text" name="email" placeholder="Coloque seu e-mail" />
    </label>
    <br />
    <br />

    <label>
        Idade:<br />
        <input type="text" name="idade" placeholder="Somente números" />
    </label>
    <br />
    <br />
    <input type="submit" value="Enviar" />

</form>