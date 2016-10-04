<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'My_Controller.php';


class Login extends My_Controller {
	public function Login (){
            parent:: __construct();
            $this->load->model('loginModel', 'model');
        }
        public function index() {
            $this->load->view('common/header');
            $this->load->view('common/custom/login');
        }
        public function Home (){
        	$query = $this->model->validalogin();
        	if($query){
        		$this->load->view('common/header');
        	    $this->load->view('nav/nav_azul');
        	    redirect('/Principal/Home/', 'location');
        	}else{
                $this->load->view('common/header');
                ?>
                <script>
                alert('Login ou senha incorretos');
                window.location='http://localhost/atividade01/Login';
                </script>
                <?php
          
        	}
        }
        public function FormularioCadastro(){
        	$this->load->view('common/header');
        	$this->load->view('common/custom/formulario');
        }

        public function Cadastrar(){
            $return = $this->model->Cadastrar();
            if($return == 1){
                $this->load->view('common/header');
                $this->load->view('common/custom/successCadastro');
            }else{
                $this->load->view('common/header');
                $this->load->view('common/custom/erroCadastro');
            }
        }




}