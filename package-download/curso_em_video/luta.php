<?php

    class Luta{
        //atributos
        private $desafiado; //abstract
        private $desafiante; //abstract
        private $rounds; //inteiro
        private $aprovada; //lógico

        //métodos especiais
        function setDesafiado($ado){
            $this->getDesafiado($ado); 
        }
        function getDesafiado(){
            return $this->desafiado;
        }

        function setDesafiante($ante){
            $this->getDesafiante($ante);
        }
        function getDesafiante(){
            return $this->desafiante;
        }

        function setRounds($rou){
            $this->getRounds($rou);
        }
        function getRounds(){
            return $this->rounds;
        }

        function setAprovada($apo){
            $this->getAprovada($apo);
        }
        function getAprovada(){
            return $this->aprovada;
        }

        //métodos públicos
        function marcarLuta($l1, $l2){
            if ($l1->getCategoria() === $l2->getCategoria() && $l1->getNome() != $l2->getNome()){
                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
            }else{
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }

        function lutar(){
            if($this->aprovada){
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);
                switch ($vencedor) {
                    case 0: //empate
                        echo "<hr />";
                        echo "<strong>Empate</strong>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case 1: //desafiado vence
                        echo "<hr />";
                        echo "<strong>Ganhou o lutador ".$this->desafiado->getNome()."</strong>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                    break;
                    case 2: //desafiante vence
                        echo "<hr />";
                        echo "<strong>Ganhou o lutador ".$this->desafiante->getNome()."</strong>";
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganharLuta();
                        break;
                }
            }else{
                echo "Luta não pode acontecer";
            }
        }
    }

?>