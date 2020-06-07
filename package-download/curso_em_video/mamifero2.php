<?php

require_once 'animal2.php';

class Mamifero2 extends Animal2{
    //atributos
    protected $corPelo;

    //GET e SET
    function getCorPelo(){
        return $corPelo;
    }
    function setCorPelo($corPelo){
        $this->corPelo = $corPelo;
    }

    //metodos
    function emitirSom(){
        echo "Som de mamifero<br />";
    }

}


?>