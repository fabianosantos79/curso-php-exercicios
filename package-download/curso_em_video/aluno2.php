<?php

    require_once 'pessoa3.php';

    class Aluno extends Pessoa{

        //atributos
        private $matricula;
        private $curso;

        //GET e SET
        function getMatricula(){
            return $matricula;
        }
        function setMatricula($matricula){
            $this->matricula = $matricula;
        }

        function getCurso(){
            return $curso;
        }
        function setCurso($curso){
            $this->curso = $curso;
        }

        //metodos
        function pagarMensalidade(){
            echo "Pagando mensalidade do aluno <br />";
        }

    }
?>