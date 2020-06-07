<?php
    require_once 'lobo.php';

    class Cachorro2 extends Lobo{
        
        //metodos
        function emitirSom(){
            echo "Au! Au! Au!<br />";
        }

        function reagirFrase($frase){
            if(($frase == "Toma comida") || ($frase == "Olá")){
                echo "Abanar e Latir<br />";
            }else{
                echo "Rosnar<br />";
            }
        }

        function reagirHora($hora, $min){
            if($hora < 12){
                echo "Abanar<br />";
            }elseif($hora >= 18){
                echo "Ignorar<br />";
            }else{
                echo "Abanar e Latir<br />";
            }

        }

        function reagirDono($dono){
            if($dono == true){
                echo "Abanar<br />";
            }else{
                echo "Rosnar e Latir<br />";
            }

        }

        function reagirIdadePeso($idade, $peso){
            if($idade < 5){
                if($peso < 10){
                    echo "Abanar<br />";
                }else{
                    echo "Latir<br />";
                }
            }else{
                if($peso > 10){
                    echo "Rosnar<br />";
                }else{
                    echo "Ignorar<br />";
                }
            }
        }

    }

?>