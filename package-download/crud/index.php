<?php
require 'config.php';

$lista= [];
$sql= $pdo->query("SELECT * FROM usuarios");

if ($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>
<h2>CRUD PHP</h2>
<hr /> 
<button ><a href="adicionar.php">ADICIONAR USUÁRIO</a></button>
<br /><br />
<table border="1" width="40%">
    <tr>
        <td bgcolor="yellow"><b>ID</b></td>
        <td bgcolor="yellow"><b>NOME</b></td>
        <td bgcolor="yellow"><b>E-MAIL</b></td>
        <td bgcolor="yellow"><b>AÇÕES</b></td>
    </tr>
    
<?php foreach($lista as $usuario): ?>
    <tr>
        <td><?php echo $usuario['id'];?></td>
        <td><?php echo $usuario['nome']?></td>
        <td><?php echo $usuario['email']?></td>
        <td>&nbsp;&nbsp;&nbsp;<a href="editar.php?id=<?php echo $usuario['id'];?>"><button>Editar</button></a>&nbsp;&nbsp;&nbsp;<a href="deletar.php?id=<?php echo $usuario['id'];?>" onclick="return confirm('Tem certeza que deseja excluir?')"><button>Deletar</button></a></td>
    </tr>
<?php endforeach ?>

</table>