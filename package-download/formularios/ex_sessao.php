<?php
 session_start();
 if(isset($_SESSION['aviso'])){
     echo $_SESSION['aviso'];
     $_SESSION['aviso']= "";
 }
?>

<form method='POST' action='receber_sessao.php'>
<label>
<b>Qual o Seu nome?</b><br />
<input type ='text' name='nome' autofocus required placeholder = 'Digite seu nome' />
<br /><br />
<input type= 'submit' value='Enviar' />
</label>
</form>

