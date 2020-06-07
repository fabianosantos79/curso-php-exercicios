<?php
    require_once '../models/Usuario.php';

    class UsuarioDaoMysql implements UsuarioDAO{

        private $pdo;

        public function __construct(PDO $driver){
            $this->pdo = $driver;
        }

        public function add(Usuario $u){

        }

        public function findAll(){
            $array= [];

            $sql = $this->pdo->query("SELECT * FROM usuarios");
            if($sql->rowCount() > 0){
                $lista = $sql->fetchAll();

                foreach($lista as $item){
                    $u = new Usuario();
                    $u->setId($item['id']);
                    $u->setNome($nome['nome']);
                    $u->setEmail($email['email']);

                    $array[] = $u;
                }
            }

            return $array;
        }

        public function findById($id){
            
        }

        public function update(Usuario $u){
            
        }

        public function delete($id){
            
        }

    } 
?>