<?php
    require_once 'Usuario.php';
    require_once 'UsuarioInterface.php';

    //$pdo = new PDO("mysql:dbname=curso_php; host=localhost", "root", "");

    class UsuarioMySql implements UsuarioInterface{

        //atributos
        //private $pdo;

        function __construct($conectar){
            $this->pdo = $conectar;
        }

        

        //metodos
        function adicionar($usuario){

            $sql = $this->pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:nome, :email)");
            $sql->bindValue(':nome', $usuario->getNome());
            $sql->bindValue(':email', $usuario->getEmail());
            $sql->execute();

            $usuario->setId($this->pdo->lastInsertId());
            return $usuario;

        }



        function selecionarTudo(){
            $array = [];

            $sql = $this->pdo->query("SELECT * FROM usuarios");
            if($sql->rowCount() > 0){
                $lista = $sql->fetchAll(PDO::FETCH_ASSOC);

                foreach($lista as $item) {
                    $usuario = new Usuario();
                    $usuario->setId($item['id']);
                    $usuario->setNome($item['nome']);
                    $usuario->setEmail($item['email']);

                    $array[] = $usuario;
                }
            }

            return $array;

        }



        function selecionarId($id){
            $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $dados = $sql->fetch();

            $infoUsuario = new Usuario();
            $infoUsuario->setId($dados['id']);
            $infoUsuario->setNome($dados['nome']);
            $infoUsuario->setEmail($dados['email']);

            return $infoUsuario;

        }else{
            return false;
        }
    }



        function alterar($usuario){
            $sql = $this->pdo->prepare("UPDATE usuarios SET nome=:nome, email=:email WHERE id=:id");
            $sql->bindValue(':nome', $usuario->getNome());
            $sql->bindValue(':email', $usuario->getEmail());
            $sql->bindValue(':id', $usuario->getId());
            $sql->execute();

            return true;
            
        }



        function deletar($id){
            
            $sql = $this->pdo->prepare("DELETE FROM usuarios WHERE id=:id");
            $sql->bindValue(':id', $id);
            $sql->execute();

        }



        function selecionarEmail($email){
            $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
            $sql->bindValue(':email', $email);
            $sql->execute();

            if($sql->rowCount() > 0){
                $dados = $sql->fetch();

            $infoUsuario = new Usuario();
            $infoUsuario->setId($dados['id']);
            $infoUsuario->setNome($dados['nome']);
            $infoUsuario->setEmail($dados['email']);

            return $infoUsuario;

        }else{
            return false;
        }
    }
    }

?>