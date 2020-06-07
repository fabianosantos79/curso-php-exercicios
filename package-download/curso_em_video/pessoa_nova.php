<?php

abstract class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }

    function getNome(){
        return $nome;
    }
    function setNome($nome){
        $this->nome = $nome;
    }

    function getIdade(){
        return $idade;
    }
    function setIdade($idade){
        $this->idade = $idade;
    }

    function getSexo(){
        return $sexo;
    }
    function setSexo($sexo){
        $this->sexo = $sexo;  
    }

    function getExperiencia(){
        return $experiencia;
    }
    function setExperiencia($experiencia){
        $this->experiencia = $experiencia;
    }

    protected function ganharExp($n){
        $this->experiencia += $n;
    }

}

?>