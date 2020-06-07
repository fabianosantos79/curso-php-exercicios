<?php

    require_once 'publicacao.php';

    class Livro2 implements Publicacao{
        
        //atributos 
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        //metodos GET e SET
        function getTitulo(){
            return $this->titulo;
        }
        function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        function getAutor(){
            return $this->autor;
        }
        function setAutor($autor){
            $this->autor = $autor;
        }

        function getTotPaginas(){
            return $this->totPaginas;
        }
        function setTotPaginas($totPaginas){
            $this->totPaginas = $totPaginas;
        }

        function getPagAtual(){
            return $this->pagAtual;
        }
        function setPagAtual($pagAtual){
            $this->pagAtual = $pagAtual;
        }

        function getAberto(){
            return $this->aberto;
        }
        function setAberto($aberto){
            $this->aberto = $aberto;
        }

        function getLeitor(){
            return $this->leitor;
        }
        function setLeitor($leitor){
            $this->leitor = $leitor;
        }

        //construtor
        function __construct($titulo, $autor, $totPaginas, $leitor){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->leitor = $leitor;
        }

        //métodos
        function abrir(){
            $this->aberto = true;
        }

        function fechar(){
            $this->aberto = false;
        }

        function folhear($p){
            if($this->pagAtual < $this->totAtual){
                $this->pagAtual = $p;
            }
        }

        function avancarPag(){
            if($this->pagAtual = $this->totPaginas){
                $this->pagAtual = 0;
            }else{
                $this->pagAtual++;
            }
        }

        function voltarPag(){
            if($this->pagAtual === 0){
                $this->pagAtual = 0;
            }else{
                $this->pagAtual--;
            }
        }

        function detalhes(){
            echo "O livro ".$this->titulo." tem o total de ".$this->totPaginas." e no momento está sendo lido pelo ".$this->leitor;
        }



    }
?>      