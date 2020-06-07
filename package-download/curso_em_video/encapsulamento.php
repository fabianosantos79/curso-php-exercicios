<?php

    require_once "controlador.php";

    class ControleRemoto implements Controlador{

        private $volume; //inteiro
        private $ligado; //logico
        private $tocando; //logico

        public function __construct(){
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        } 

        private function getVolume(){
            return $this->volume;
        }
        private function setVolume($v){
            $this->volume = $v;
        }

        private function getLigado(){
            return $this->ligado;
        }
        private function setLigado($l){ //logico
            $this->ligado = $l;
        }

        private function getTocando(){
            return $this->tocando;
        }   
        private function setTocando($t){ //logico
            $this->tocando = $t;
        }


        public function ligar(){
            $this->setLigado(true);
        }
        public function desligar(){
            $this->setLigado(false);
        }

        public function abrirMenu(){
            echo "=========   MENU   =========<br /><br />";
            echo "Está ligado? ".($this->getLigado() ? "SIM" : "NÃO");
            echo "<br /> Está tocando? ".($this->getTocando() ? "SIM" : "NÃO");
            echo "<br /> Volume: ".$this->getVolume();
            for($i=0; $i <= $this->getVolume(); $i+=10){
                echo "|";
            }
        }
        public function fecharMenu(){
            echo "Fechando o menu...";
        }

        public function maisVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() + 10);
            }
        }
        public function menosVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() - 10);
            }
        }

        public function ligarMudo(){
            if($this->getLigado() && $this->getVolume() > 0){
                $this->setVolume(0);
            }
        }
        public function desligarMudo(){
            if($this->getLigado() && $this->getVolume() == 0){
                $this->setVolume(50);
        }
    }

        public function play() {
            if($this->getLigado() && !($this->getTocando())){
                $this->setTocando(true);
            }
        }
        public function pause(){
            if($this->getLigado() && $this->getTocando()){
                $this->setTocando(false);
            }
        }

    }

?>