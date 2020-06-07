<?php

    require_once 'acoes_video.php';

    class Video implements AcoesVideo{

    //atributos
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    //construtor
    function __construct($titulo){
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    //GET e SET
    function getTitulo(){
        return $titulo;
    }
    function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    function getAvaliacao(){
        return $avaliacao;
    }
    function setAvaliacao($avaliacao){
        $media = 0;
        $media = ($this->avaliacao + $avaliacao)/$this->views;
        $this->avaliacao = $media;
    }

    function getViews(){
        return $views;
    }
    function setViews($views){
        $this->views = $views;
    }

    function getCurtidas(){
        return $curtidas;
    }
    function setCurtidas($curtidas){
        $this->curtidas = $curtidas;
    }

    function getReproduzindo(){
        return $reproduzindo;
    }
    function setReproduzindo($reproduzindo){
        $this->reproduzindo = $reproduzindo;
    }

    //metodos
    function play(){
        $this->reproduzindo = true;
    }

    function pause(){
        $this->reproduzindo = false;
    }

    function like(){
        $this->curtidas ++;
    }

}

?>