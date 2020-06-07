<<?php
    require_once 'pessoa3.php';

    class Professor extends Pessoa{
        //atributos
        private $especialidade;
        private $salario;

        //GET e SET
        function getEspecialidade(){
            return $especialidade;
        }
        function setEspecialidade($especialidade){
                $this->especialidade = $especialidade;
        }

        function getSalario(){
            return $salario;
        }
        function setSalario($salario){
            $this->salario = $salario;
        }

        //metodos
        function receberAumento(){
            echo "<br />O Salario aumentou<br />";
        }
    }
?>