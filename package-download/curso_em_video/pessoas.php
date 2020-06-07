<?php

    class Pessoas{

    //atributos
    private $nome;
    private $idade;
    private $sexo;
    
    function getNome(){
        return $this->nome;
    }
    function setNome($nome){
        $this->nome = $nome;
    }

    function getIdade(){
        return $this->idade;
    }
    function setIdade($idade){
        $this->idade = $idade;
    }

    function getSexo(){
        return $this->sexo;
    }
    function setSexo($sexo){
        $this->sexo = $sexo;
    }

    //metodos
    function fazerNiver(){
        $this->idade++;
    }

}

?>