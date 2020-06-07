<?php
    abstract class Animal2{
        //atributos
        protected $peso;
        protected $idade;
        protected $membros;

        //GET e SET
        function getPeso(){
            return $this->peso;
        }
        function setPeso($peso){
            $this->peso = $peso;
        }

        function getIdade(){
            return $this->idade;
        }
        function setIdade(){
            $this->idade = $idade;
        }

        function getMembros(){
            return $this->membros;
        }
        function setMembros(){
            $this->membros = $membros;
        }

        //metodos
        abstract function emitirSom();

    }
?>