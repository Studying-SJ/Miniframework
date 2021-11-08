<?php
  namespace App\Controllers;

  use MF\Controller\Action;
  use App\Connection;
  use App\Models\Produto;


  
    {
    class IndexController extends Action{

            public function index(){
                //$this->view->dados = ['Samuel', 'Professor', 'Facilitador'];

               $conn = Connection::getDb();
               $produto = new Produto($conn);
               $produtos = $produto->getProdutos();

               $this->view->dados = $produtos;

                $this->render('index', 'layout');
            }

            public function sobreNos(){
                $this->view->dados = ['Bonito', 'Diversificado', 'Especial'];
                $this->render('sobreNos', 'layout2');
            }

        } 
    }
    
?>