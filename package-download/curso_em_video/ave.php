<?php
 require_once 'animal.php';

 class Ave extends Animal{
    
    //atributos
    private $corPena;
    
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
    
    function getCorPena(){
        return $corPena;
    }
    function setCorPena($corPena){
        $this->corPena = $corPena;
    }

    //metodos
    function locomover(){
        echo "Voando <br />";
    }

    function alimentar(){
        echo "Comendo Frutas <br />";
    }

    function emitirSom(){
        echo "Som de ave <br />";
    }

    function fazerNinho(){
        echo "Construiu um ninho <br />";
    }
 }
?>