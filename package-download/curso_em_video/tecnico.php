<?php
    require_once 'aluno2.php';

    class Tecnico extends Aluno{
        
        //atributos
        private $regProfissional;

        //GET e SET
        function getRegProfissional(){
            return $RegProfissional;
        }
        function setRegProfissional($RegProfissional){
            $this->RegProfissional = $RegProfissional;
        }

        //metodos
        function praticar(){
            echo "Funcionário está praticando<br />";
        }

    }
?>