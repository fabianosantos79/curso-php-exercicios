<?php
    $senha = 1234;

    $hash = password_hash($senha, PASSWORD_DEFAULT);

    $encriptada = '$2y$10$XEBgumkoRtvx9wRAcROKLuEpBO0PkrbeOq39zUaVemtBEqha2qOZS';

    echo "Senha original: ".$senha."<br />";
    echo "Senha encriptada: ".$hash."<br />";

    if(password_verify($senha, $encriptada)){
        echo "Senha CORRETA";
    }else{
        echo "SENHA ERRADA";
    }
?>