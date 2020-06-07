<?php

    require_once 'pessoas.php';    

    class Professores extends Pessoas{
        //atributos
        private $especialidade; //caractere
        private $salario; //real

        //GET e SET
        function getEspecialidade(){
            return $this->especialidade;
        }
        function setEspecialidade($especialidade){
            $this->especialidade = $especialidade;
        }

        function getSalario(){
            return $this->salario;
        }
        function setSalario($salario){
            $this->salario = $salario;
        }

        //metodos
        function receberAum(){
            $this->salario++;
        }


    }
?>