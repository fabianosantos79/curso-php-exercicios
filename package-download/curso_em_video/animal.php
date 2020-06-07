<?php

abstract class Animal{

    //atributos
    protected $peso;
    protected $idade;
    protected $membros;

    //metodos
    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();

    }

?>