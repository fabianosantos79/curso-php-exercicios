<?php
    class ContaBanco{

        //Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        //GET e SET dos Atributos 
        public function getNumConta(){
            return $this->numConta;
        }
        public function setNumConta($n){
            $this->numConta = $n;
        }

        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($t){
            $this->tipo = $t;
        }

        public function getDono(){
            return $this->dono;
        }
        public function setDono($d){
            $this->dono = $d;
        }

        public function getSaldo(){
            return $this->saldo;
        }
        public function setSaldo($s){
            $this->saldo = $s;
        }

        public function getStatus(){
            return $this->status;
        }
        public function setStatus($sta){
            $this->status = $sta;
        }

        //Construtor
        public function __construct(){
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta criada com sucesso.</p>";
         }

        //Funções
        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus($t);

            if($t == "CC"){
                $this->setSaldo(50);
            }else{
                $this->setSaldo(120);
            }
        }

        public function fecharConta(){
            if($this->getSaldo() > 0){
                echo "Conta com dinheiro não posso fechá-la.";
            }elseif($this->getSaldo() < 0){
                echo "Conta em débito, impossível encerrar.<br /><br />";
            }else{
                $this->setStatus = false;
                echo "Conta encerrada.<br /><br />";
            }   
        }

        public function depositar($v){
            if($this->getSaldo() > 0){
                $this->setSaldo($this->getSaldo() + $v);
                echo"Depósito de R$ ".$v." realizado na conta de ".$this->getDono()."<br /><br />";
            }else{
                echo "Conta fechada, impossível depositar.<br /><br />";
            }
        }

        public function sacar($sac){
            if($this->getStatus()){
                if($this->getSaldo() >= 0){
                    $this->setSaldo($this->getSaldo() - $sac);
                    echo"Saque de R$ ".$sac." realizado com sucesso na conta de ".$this->getDono()."<br /><br />";
                }else{
                    echo "Saldo negativo, impossível sacar.";
                }
            }else{
                echo "Conta inexistente ou fechada.";
            }
        }

        public function pagarMensal(){
            if($this->getTipo = 'CC'){
                $v = 12;
            }elseif($this->getTipo = 'CP'){
                $v = 20;
            }
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo() - $v);
                echo "Mensalidade debitada no valor de R$ ".$v." na conta de ".$this->getDono()."<br /><br />";
            }else{
                echo "Problemas com a conta.";
            }
        }
        
    
    }
?>