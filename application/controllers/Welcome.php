<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'My_Controller.php';

class Welcome extends My_Controller {

    //O controlador padrão é o que responde ao primeiro request
    public function index() {
        //inclusão do cabeçalho de todas as páginas geradas pelo CI
        $this->load->view('common/custom/conteudo');
        $this->load->view('common/custom/titulo');
        $this->load->view('common/footer');
    }

    public function hello($arg1, $arg2, $arg3, $arg4) {
        echo "<h1>Olá $arg1 de $arg2 do $arg3 - $arg4</h1>";
    }

}
