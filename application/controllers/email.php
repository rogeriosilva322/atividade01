<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'My_Controller.php';

class email extends My_Controller {

    function email(){
        parent:: __construct();
        $this->load->model('emailModel', 'model');
    }


    public function EmailSend(){
        $this->load->library('email');
        $this->load->view('common/header');
        $this->load->view('nav/nav_azul');
        $email['emailContato'] = $this->input->get("emailContato");
        $this->load->view('common/custom/formularioEmail', $email);
    }

    public function EnvioEmail (){
            $this->load->library('email');
            $this->model->le_dados_cadastro_email();
    }
}

?>