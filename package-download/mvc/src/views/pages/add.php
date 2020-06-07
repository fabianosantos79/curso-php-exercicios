<?php  $render('header'); ?>

<h2>Adicionar um novo usuário</h2>

<form method="POST" action="<?= $base; ?>/add">

    <label>
        Nome<br />
        <input type="text" name="nome" /><br /><br />
    </label>
    <label>
        E-mail<br />
        <input type="email" name="email" /><br /><br />
    </label>
    <input type="submit" value="Adicionar" />

</form>

<?php $render('footer') ?>