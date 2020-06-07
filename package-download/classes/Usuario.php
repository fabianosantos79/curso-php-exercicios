<?php
    class Usuario{
    
        //Atributos
        private $id;
        private $nome;
        private $email;

        //GET e SET
        function getId(){
            return $this->id;
        }
        function setId($id){
            $this->id = trim($id);
        }

        function getNome(){
            return $this->nome;
        }
        function setNome($nome){
            $this->nome = ucwords(trim($nome));
        }

        function getEmail(){
            return $this->email;
        }
        function setEmail($email){
            $this->email = strtolower(trim($email));
        }

    }
?>