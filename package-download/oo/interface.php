<?php

interface Database{
    public function listarProduto();
    public function adicionarProduto();
    public function alterarProduto();
}

    class MysqlDB implements Database{
        public function listarProduto(){

        }
        public function adicionarProduto(){
            echo "Produto Adicionado Mysql";
        }
        public function alterarProduto(){

        }

    }

    class OracleDB implements Database{
        public function listarProduto(){

        }
        public function adicionarProduto(){
            echo "Produto Adicionado Oracle";
        }
        public function alterarProduto(){

        }

    }

    class NodeDB implements Database{
        public function listarProduto(){

        }

        public function adicionarProduto(){
            echo "Produto Adicionado Node";
        }

        public function alterarProduto(){

        }

    }

    $db = new NodeDB();
    $db->adicionarProduto();
   

?>