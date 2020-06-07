<?php   

    require_once 'publicacao.php';

    class Livro implements Publicacao{

        //atributos
        private $titulo; //caractere
        private $autor; //caractere
        private $totPaginas; //inteiro
        private $pagAtual; //inteiro
        private $aberto; //logico
        private $leitor; //abstrato

        function getTitulo(){
            return $this->titulo;
        }
        function setTitulo($titulo){
            $this->getTitulo($titulo);
        }

        function getAutor(){
            return $this->autor;
        }
        function setAutor($autor){
            $this->getAutor($autor);
        }

        function getTotPaginas(){
            return $this->totPaginas;
        }
        function setTotPaginas($totPaginas){
            $this->getTotPaginas($totPaginas);
        }

        function getPagAtual(){
            return $this->pagAtual;
        }
        function setPagAtual($pagAtual){
            $this-> getPagAtual($pagAtual);
        }

        function getAberto(){
            return $this->aberto;
        }
        function setAberto($aberto){
            $this->getAberto($aberto);
        }

        function getLeitor(){
            return $this->leitor;
        }
        function setLeitor($leitor){
            $this->getLeitor($leitor);
        }

        //construtor
        function __construct($titulo, $autor, $totPaginas, $leitor){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->aberto = false;
            $this->pagAtual = 0;
            $this->leitor = $leitor;
        }


        //metodos
        function detalhes(){
           echo "<hr />";
           echo "Livro: ".$this->titulo." escrito por ".$this->autor;
           echo "<br />Qtde de páginas: ".$this->totPaginas.", estamos atualmente na página ".$this->pagAtual;
           echo "<br />Sendo lido nesse momento por ".$this->leitor->getNome();
        }


    function abrir(){
            $this->aberto = true;
        }

        public function fechar(){
            $this->aberto = false;
        }

    function folhear($p){
            if($p > $this->totPaginas){
                $this->pagAtual = 0;
            }else{
                $this->pagAtual = $p;
            }
        }

    function avancarPag(){
            if($this->pagAtual < $this->totPaginas){
            $this->pagAtual++;
        }else{
            $this->pagAtual = 0;
        }
    }

    function voltarPag(){
            if($this->pagAtual == 0){
            $this->pagAtual = 0;
        }else{
            $this->pagAtual--;
        }
    }
}
?>