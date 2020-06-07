<?php

require "config.php";

$info = [];

$id = filter_input(INPUT_GET, 'id');
if($id){
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0 ){

        $info = $sql->fetch(PDO::FETCH_ASSOC);

        
    }else{
        header ("Location: index.php");
        exit;
    }
}
    else{
        header ("Location: index.php");
        exit;
    }

?>



<h2>Editar usuário</h2>
<hr />
<form method="POST" action="editar_action.php">
    <input type = "hidden" name="id" value= "<?php echo $info['id'];?>" />

    <label>
        Nome:<br />
        <input type="text" name="nome" value="<?php echo $info['nome'];?>" />
    </label><br /><br />
    <label>
        E-mail<br />
        <input type="text" name="email" value="<?php echo $info['email'];?>" />
    </label><br /><br />
    <input type="submit" value="Salvar" />
</form>