<?php
    
    require_once 'aluno2.php';

    class Bolsista extends Aluno{
        //atributos
        private $bolsa;

        //GET e SET
        function getBolsa(){
            return $bolsa;
        }
        function setBolsa($bolsa){
            $this->bolsa = $bolsa;
        }

        //metodos
        function renovarBolsa(){
            echo "Bolsa renovada";
        }

        function pagarMensalidade(){
            echo "O Aluno ".$this->nome." é bolsista, ele tem desconto na mensalidade<br />";
    }

}


?>