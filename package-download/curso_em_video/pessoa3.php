<?php
    abstract class Pessoa{
        
        //atributos
        protected $nome;
        protected $idade;
        protected $sexo;

        //GET e SET
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

        //metodos
        final function fazerNiver(){
            $this->idade ++;
        } 
    }
?>