<?php
    require_once 'animal.php';

    class Mamifero extends Animal{

        //atributos
        private $corPelo;

        //GET e SET
        function getPeso(){
            return $peso;
        }
        function setPeso($peso){
            $this->peso = $peso;
        }
        
        function getIdade(){
            return $idade;
        }
        function setIdade($idade){
            $this->idade = $idade;
        }
        
        function getMembros(){
            return $membros;
        }
        function setMembros($membros){
            $this->membros = $membros;
        }
        
        function getCorPelo(){
            return $corPelo;
        }
        function setCorPelo($corPelo){
            $this->corPelo = $corPelo;
        }

        //metodos
        function locomover(){
            echo "Correndo <br />";
        }

        function alimentar(){
            echo "Mamando <br />";
        }

        function emitirSom(){
            echo "Som de mamífero <br />";
        }
    }
?>