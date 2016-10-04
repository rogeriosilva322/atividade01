<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'My_Controller.php';

class Departamentos extends My_Controller {

    function Departamentos(){
        parent:: __construct();
        $this->load->model('DepartamentosModel', 'model');
    }
    public function index() {
        $this->load->view('common/header');
        $this->load->view('nav/nav_azul');
       
        $this->load->view('common/custom/Departamentos');
        $parametro = $this->uri->segment(3);
        if ($parametro != 0){
                $this->pagina($parametro); 
        }else{
                $this->pagina(0); 
        }
    }
    public function pagina($parametro){
      $dados['objetos'] = $this->model->Pesquisar($parametro);
        $this->load->view('common/header');    
        $this->load->view('common/custom/pesquisa', $dados);
        $this->load->view('common/footer');
    }

    public function Pesquisar(){
        $dados['objetos'] = $this->model->Pesquisar();
        $this->load->view('common/header');
        $this->load->view('nav/nav_azul');
        $this->load->view('common/custom/Departamentos');
        $this->load->view('common/custom/pesquisa', $dados);
        $this->load->view('common/footer');
    }
}

?>