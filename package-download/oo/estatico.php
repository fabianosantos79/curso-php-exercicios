<?php
    class Matematica{

        public static string $nome = "Fabiano";

        public static function somar($x, $y){
            return $x + $y;
        }

    }

echo Matematica::somar(35, 58)."<br />"; 

echo Matematica::$nome;

?>