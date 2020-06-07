<?php
    require_once 'config.php';
    require_once '../classes/UsuarioMySql.php';

    $usuario = new UsuarioMySql($pdo);

    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if($nome && $email){
        
        if($usuario->selecionarEmail($email) === false){

            $novoUsuario = new Usuario();
            $novoUsuario->setNome($nome);
            $novoUsuario->setEmail($email);

            $usuario->adicionar($novoUsuario);

            header('Location: index.php');
            exit;
        }
        
        else{
            header('Location: adicionar.php');
            exit;
        }

    }else{
        header('Location: adicionar.php');
        exit;
    }

?>