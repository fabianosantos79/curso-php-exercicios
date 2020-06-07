<?php
    interface UsuarioInterface{
        
        //metodos para consulta ao banco de dados
        function adicionar($nome);
        function selecionarTudo();
        function selecionarId($id);
        function selecionarEmail($email);
        function alterar($nome);
        function deletar($id);


    }
?>