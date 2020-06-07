<?php
    require_once 'config.php';
    require_once '../classes/UsuarioMySql.php';

    $usuario = new UsuarioMySql($pdo);
    $lista = $usuario->selecionarTudo();

    /*
    $lista =[];
    $sql = $pdo->query("SELECT * FROM usuarios");

    if($sql->rowCount() > 0){
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    */
  
?>

<h1>SISTEMA DE CONSULTAS</h1>

<button><a href="adicionar.php">ADICIONAR USUÁRIO</a></button>
<br /><br />

<table border="1" width="100%">
<tr bgcolor="gray">
    <th>ID</th>
    <th>NOME</th>
    <th>E-MAIL</th>
    <th>AÇÕES</th>
</tr>
<?php foreach ($lista as $item): ?>
    <tr>
        <th><?= $item->getId(); ?></th>
        <th><?= $item->getNome(); ?></th>
        <th><?= $item->getEmail(); ?></th>
        <th>
        <button><a href="editar.php?id=<?= $item->getId(); ?>">Editar</a></button>
        <button><a href="deletar.php?id=<?= $item->getId(); ?>" onclick= "return confirm('Tem certeza que deseja excluir?')">Deletar</a></button>
        </th>        
    </tr>
<?php endforeach ?>
</table> 