<h3>Formulário de Cadastro de Produtos:</h3><br>
    <form action="" method="POST">
        <p><b>Digitar o produto:</b></p><br>
            <input type="text" name="produto" id="" placeholder="Cadastro do Produto!" autofocus required><br>
        
                <input type="submit" value="Enviar"><br>
    </form> <hr>
    <?php
        $produto = $_POST['produto'];  
        $produto .= file_put_contents('cadastro.txt', '<LI>'.$produto.' </LI>', FILE_APPEND);  // testar... depois da $var '.' ou ',' para separar os itens
    
        
        echo "<h3>Retorno dos Produtos Cadastrados</h3>";
        echo file_get_contents('cadastro.txt').'</br>';
        
        
    ?>