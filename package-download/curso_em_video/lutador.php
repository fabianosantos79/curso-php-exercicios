<?php
    
    class Lutador {

        //atributos
        private $nome;
        private $nacionalidade;
        private $idade, $altura, $peso;
        private $categoria, $vitorias, $derrotas, $empates;    

        //construtor
        function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->setPeso($pe);
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empates = $em;
        }
        
        //métodos especiais
        function getNome(){
            return $this->nome;
        }
        function setNome($no){
            $this->nome = $no;
        }

        function getNacionalidade(){
            return $this->nacionalidade;
        }
        function setNacionalidade($na){
            $this->nacionalidade = $na;            
        }

        function getIdade(){
            return $this->idade;
        }
        function setIdade($id){
            $this->idade = $id;
        }

        function getAltura(){
            return $this->altura;
        }
        function setAltura($al){
            $this->altura = $al;
        }

        function getPeso(){
            return $this->peso;
        }
        function setPeso($pe){
            $this->peso = $pe;
            $this->setCategoria();
        }

        function getCategoria(){
            return $this->categoria;
        }
        private function setCategoria(){
            if($this->getPeso() < 52.2){
                $this->categoria = "Inválido";
            }elseif($this->getPeso() <= 70.3){
                $this->categoria = "Leve";
            }elseif($this->getPeso() <= 83.9){
                $this->categoria = "Médio";
            }elseif($this->getPeso() <= 120.2){
                $this->categoria = "Pesado";
            }else{
                $this->categoria = "Inválido";
            }
        }

        function getVitorias(){
            return $this->vitorias;
        }
        function setVitorias($vi){
            $this->vitorias = $vi;
        }

        function getDerrotas(){
            return $this->derrotas;
        }
        function setDerrotas($de){
            $this->derrotas = $de;
        }

        function getEmpates(){
            return $this->empates;
        }
        function setEmpates($em){
            $this->empates = $em;
        }

        //métodos
        function  apresentar(){
            echo "-------  CHEGOU A HORA  -------<br /><br />";
            echo "Lutador: ".$this->getNome()."<br />";
            echo "Origem: ".$this->getNacionalidade()."<br />";
            echo  $this->getIdade()." anos<br />";
            echo  $this->getAltura()." m de altura<br />";
            echo "Pesando: ".$this->getPeso()." Kg<br />";
            echo  $this->getVitorias()." vitórias<br />";
            echo  $this->getDerrotas()." derrotas<br />";
            echo  $this->getEmpates()." empates<br />";
        }
        function status(){
            echo "<br /><br />".$this->getNome()."<br />";
            echo "Peso: ".$this->getCategoria()."<br /><br />";
            echo "<strong>Cartel</strong><br />";
            echo $this->getVitorias()." vitórias.<br />";
            echo $this->getEmpates()." empates.<br />";
            echo $this->getDerrotas()." derrotas";
        }
        function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }
        function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }   
        function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }


    }

?>