<?php
    class Pessoa2{
        //atributos 
        private $nome;
        private $idade;
        private $sexo;

        //metodos GET e SET
        function getNome(){
            return $this->nome;
        }
        function setNome($nome){
            $this->getNome();
        }

        function getIdade(){
            return $this->idade;
        }
        function setIdade($idade){
            $this->getIdade();
        }

        function getSexo(){
            return $this->sexo;
        }
        function setSexo(){
            $this->getSexo();
        }

        //construtor
        function __construct($nome, $idade, $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        //metodos
        function fazerNiver(){
            $this->idade++;
        }

    }
?>