<?php  $render('header'); ?>
<br />
<button><a href= "<?= $base; ?>/novo">Novo Usuário</a></button>
<br />

<table border='1' width=65%>
    <tr bgcolor="gray">
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?= $usuario['id']; ?></td>
            <td><?= $usuario['nome']; ?></td>
            <td><?= $usuario['email']; ?></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar"><img width="30" src="<?= $base; ?>/assets/images/document.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <a href= "<?=$base;?>/usuario/<?=$usuario['id'];?>/deletar" onclick= "return confirm('Tem certeza que desja excluir?')"><img width="30" src="<?= $base; ?>/assets/images/trash.png" /></a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer') ?>