<?php

require_once 'pessoa_nova.php';

class Gafanhoto extends Pessoa{
    //atributos
    private $login;
    private $totAssistido;

    function __construct($nome, $idade, $sexo, $login){
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }

    //GET e SET
    function getLogin(){
        return $login;
    } 
    function setLogin($login){
        $this->login = $login;
    }

    function getTotAssistido(){
        return $totAssistido;
    }
    function setTotAssistido($totAssistido){
        $this->totAssistido = $totAssistido;
    }

    //metodos
    function viuMaisUm(){
        $this->totAssistido ++;
    }


}

?>