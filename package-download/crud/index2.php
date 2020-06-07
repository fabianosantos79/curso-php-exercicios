<?php
require 'config.php';
require '../dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();
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
        <td><?php $usuario->getId();?></td>
        <td><?php $usuario->getNome();?></td>
        <td><?php $usuario->getEmail();?></td>
        <td>&nbsp;&nbsp;&nbsp;<a href="editar.php?id=<?php echo $usuario->getId();?>"><button>Editar</button></a>&nbsp;&nbsp;&nbsp;<a href="deletar.php?id=<?php echo $usuario->getId();?>" onclick="return confirm('Tem certeza que deseja excluir?')"><button>Deletar</button></a></td>
    </tr>
<?php endforeach ?>

</table>