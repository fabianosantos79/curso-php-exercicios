

<form method="POST" action="";> 

    <label>
        <strong>Novo nome</strong>
        <br />
        <input type="text" name="novo_nome" placeholder="Digite o nome" autofocus required />
    </label>
    <input type="submit" value="Adicionar" />

</form>

<h2>Lista de Nomes</h2>


<?php

   $nomes = $_POST['novo_nome'];

   $nomes.= file_put_contents('lista_nomes.txt', '<li>'. $nomes.'</li>', FILE_APPEND);
   $exibir = file_get_contents('lista_nomes.txt');

  
   echo "<hr />".$exibir
  
?>

