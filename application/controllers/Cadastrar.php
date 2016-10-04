<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'My_Controller.php';

class Cadastrar extends My_Controller {

    function Cadastrar(){
        parent:: __construct();
        $this->load->model('CadastrarModel', 'model');
    }
    function index (){
        $this->load->view('common/header');
        $this->load->view('nav/nav_azul');
        $this->load->view('common/custom/cadastrar');
        $this->load->view('common/footer');
    }

    function EnvioDados (){
    $query = $this->model->validaDados(); 
    if($query == 1){
         $this->load->view('common/header');
         $this->load->view('nav/nav_azul');
         $this->load->view('common/custom/success');
    }else{
        $this->load->view('common/header');
    }
    }
}

?>