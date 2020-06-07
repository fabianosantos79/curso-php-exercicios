<?php
    class Pessoa{
        //atributos
        private $nome; //caractere
        private $idade; //inteiro
        private $sexo; //caractere
        
        function getNome(){
            return $this->nome;
        }
        function setNome($nome){
            $this->getNome($nome); 
        }

        function getIdade(){
            return $this->idade;
        }
        function setIdade($idade){
            $this->getIdade($idade);
        }

        function getSexo(){
            return $this->sexo;
        }
        function setSexo($sexo){
            $this->getSexo($sexo);
        }

        //construtor
        function __construct($nome, $idade, $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        //metodos
        function fazerNiver(){
            $this->idade ++;
        } 

        //function mostrar(){
        //    echo "Nome ".$this->getNome()."<br />";
        //    echo "Idade ".$this->getIdade()."<br />";
        //    echo "Nome ".$this->getSexo()."<br />";

        }
?>