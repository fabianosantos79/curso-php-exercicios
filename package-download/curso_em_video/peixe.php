<?php

    require_once 'animal.php';

    class Peixe extends Animal{

    //atributos
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
        echo "Nadando <br />";
    }

    function alimentar(){
        echo "Comendo Substâncias <br />";
    }

    function emitirSom(){
        echo "Peixe não emite som <br />";
    }

    function soltarBolha(){
        echo "Soltou uma bolha <br />";
    }



}

?>