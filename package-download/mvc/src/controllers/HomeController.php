<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class HomeController extends Controller {

    public function index() {
        
        $usuarios = Usuario::select()->execute();

        $this->render('home', [
            'usuarios' => $usuarios 
        ]);
        
        
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        echo "Olá, ".$args['nome']." seja bem vindo.";
    }

    public function fotos(){
       $this->render('fotos');
    }

    public function foto($parametro){
        echo "Acessando a foto: ".$parametro['id'];
     }

}