
    <h2>Cabeçalho</h2>
    <?php
        if(Isset($_COOKIE['nome'])){
            $nome = $_COOKIE['nome'];
            echo '<h2>'.$nome.'</h2>';
        }
    ?>
    <hr />