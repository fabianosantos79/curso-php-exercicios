<?php  $render('header'); ?>

<h2>Editar usuário</h2>

<form method="POST" action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">

    <label>
        Nome<br />
        <input type="text" name="nome" value="<?= $usuario['nome']; ?>"/><br /><br />
    </label>
    <label>
        E-mail<br />
        <input type="email" name="email" value="<?= $usuario['email']; ?>"/><br /><br />
    </label>
    <input type="submit" value="Salvar" />

</form>

<?php $render('footer') ?>