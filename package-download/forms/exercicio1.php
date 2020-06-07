
<?php
   session_start();
//    require 'header.php';
?>


<form method="POST" action="login.php">

    <label>
        Qual o seu nome? 
        <input type='text' name='nome' />
    </label><br /><br />
    <input type='submit' value='Salvar' />

</form>