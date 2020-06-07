<?php

    require_once 'pessoas.php';

    class Funcionarios extends Pessoas{

        //atributos
        private $setor; //caractere
        private $trabalhando; //logico

        //GET e SET
        function getSetor(){
            return $this->setor;
        }
        function setSetor($setor){
            $this->setor = $setor;
        }

        function getTrabalhano(){
            return $this->trabalhando;
        }
        function setTrabalhando($trabalhando){
            $this->trabalhando = $trabalhando;
        }

        //metodos
        function mudarTrabalho(){
            $this->trabalhando = ! $this->trabalhando;
        }
    }
?>