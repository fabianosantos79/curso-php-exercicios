<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuariosController extends Controller {

    public function add() {
        $this->render('add');

}

    public function addAction(){
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');

        if($nome && $email){
            $dados = Usuario::select()->where('email', $email)->execute();

            if(count($dados) === 0){
                Usuario::insert([
                    'nome' => $nome,
                    'email' => $email
                ])->execute();

                $this->redirect('/');
            }
        }
        $this->redirect('/novo');
    }



    public function edit($args){
        $usuarios = Usuario::select()->find($args['id']);

        $this->render('edit', [
            'usuario' => $usuarios
        ]);
    }



    public function editAction($args){
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');

        if ($nome && $email){
            Usuario::update()->set('nome', $nome)->set('email', $email)->where('id', $args['id'])->execute();
            $this->redirect('/');
        }

        $this->redirect('/usuario/'.$args['id'].'/editar');
    }



    public function del($args){
        Usuario::delete()->where('id', $args['id'])->execute();
        
        $this->redirect('/');
    }

}