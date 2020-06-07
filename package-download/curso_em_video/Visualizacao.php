<?php

    require_once 'video.php';
    require_once 'gafanhoto.php';

    class Visualizacao{
        //atributos
        private $espectador;
        private $filme;

        //construtor
        function __construct($espectador, $filme){
            $this->espectador = $espectador;
            $this->filme = $filme;
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        }

        //GET e SET
        function getEspectador(){
            return $espectador;
        }
        function setEspectador($espectador){
            $this->espectador = $espectador;
        }

        function getFilme(){
            return $filme;
        }
        function setFilme(){
            $this->filme = $filme;
        }

        //metodos
        function avaliar(){
            $this->filme->setAvaliacao(5);
        }

        function avaliarNota($nota){
            $this->filme->setAvaliacao($nota);
        }

        function avaliarPorc($porc){
            $nova = 0;
            if($porc <= 20){
                $nova = 3; 
            }elseif($porc <= 50){
                $nova = 5;
            }elseif($porc <= 90){
                $nova = 8;
            }else{
                $nova = 10;
            }

        }
    }

?>