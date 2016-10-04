<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'My_Controller.php';

class Principal extends My_Controller {
    	

        public function Principal (){
            parent:: __construct();
            $this->load->model('loginModel', 'model');
        }
        public function index() {
            $this->load->view('common/header');
            $this->load->view('common/custom/login');
        }
        public function Home (){
            $dados['objetos'] = $this->model->Pesquisar();
        		$this->load->view('common/header');
        	    $this->load->view('nav/nav_azul');
                $this->load->view('common/custom/home', $dados);
                $this->load->view('common/footer');
        }
}



  

