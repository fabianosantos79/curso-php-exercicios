<?php

    require_once 'animal.php';

    class Reptil extends Animal{

    //Atributos
    private $corEscama;

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
    
    function getCorEscama(){
        return $corEscama;
    }
    function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }

    //metodos
    function locomover(){
        echo "Rastejando <br />";
    }

    function alimentar(){
        echo "Comendo Vegetais <br />";
    }

    function emitirSom(){
        echo "Som de réptil <br />";
    }

}

?>