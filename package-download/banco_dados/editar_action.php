<?php
    require_once 'config.php';
    require_once '../classes/UsuarioMySql.php';

    $usuario = new UsuarioMySql($pdo);

    $id = filter_input(INPUT_POST, 'id');
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if($id && $nome && $email){
        
        $sql = new Usuario();
        $sql->setId($id);
        $sql->setNome($nome);
        $sql->setEmail($email);

        $usuario->alterar($sql);

        header('Location: index.php');
        exit;
    }else{
        header("Location: editar.php?id=".$id);
        exit;
    }

?>