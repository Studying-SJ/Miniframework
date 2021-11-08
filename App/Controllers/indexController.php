<?php
  namespace App\Controllers;

  use MF\Controller\Action;

  
    {
    class IndexController extends Action{

            public function index(){
                $this->view->dados = ['Samuel', 'Professor', 'Facilitador'];
                $this->render('index');
            }

            public function sobreNos(){
                $this->view->dados = ['Bonito', 'Diversificado', 'Especial'];
                $this->render('sobreNos');
            }

        } 
    }
    
?>