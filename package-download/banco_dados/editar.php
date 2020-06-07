<?php
    require_once 'config.php';
    require_once '../classes/UsuarioMySql.php';

    $usuario = new UsuarioMySql($pdo);

    $user = false;
    $id = filter_input(INPUT_GET, 'id');
    
    if($id){
        $user = $usuario->selecionarId($id);
    }

    if($user === false){
        header('Location: index.php');
        exit;
    }

?>

<h1>EDITAR USUÁRIO</h1>
<form method="POST" action="editar_action.php">
<input type="hidden" name="id" value="<?= $user->getId() ?>" />
<label>
    Nome:
    <input type="nome" name="nome" value="<?= $user->getNome() ?>" />
</label><br /><br />
<label>
    E-mail:
    <input type="email" name="email" value="<?= $user->getEmail() ?>" />
</label><br /><br />
<input type="submit" value="Salvar" />
</form>

<?php

?>