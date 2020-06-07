<?php
    require_once 'config.php';
    require_once '../classes/UsuarioMySql.php';

    $usuario = new UsuarioMySql($pdo);

    $id = filter_input(INPUT_GET, 'id');

    if($id){
        
        $usuario->deletar($id);

    }
        header('Location: index.php');
        exit;


?>