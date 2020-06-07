<?php

    require_once 'pessoas.php';

    class Aluno extends Pessoas{
        //atributos
        private $matr;
        private $curso;

        //GET e SET
        function getMatr(){
            return $this->matr;
        }
        function setMatr($matr){
            $this->mat = $matr;
        }

        function getCurso(){
            return $this->curso;
        }
        function setCurso($curso){
            $this->curso = $curso;
        }

        //metodos
        function cancelarMatr(){
            $this->matr = null;
        }

    }
?>