<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'My_Controller.php';

class Cliente extends My_Controller {

    function Cliente(){
        parent:: __construct();
        $this->load->model('PerfilModel', 'model');
    }
    
    public function index() {
        echo "Página inicial dos clientes";
        
        $data['lista'] = $this->model->listaUsuario();
        $this->load->view('common/header');
        $this->load->view('nav/nav_azul');
        $this->load->view('common/custom/lista_cliente',$data);
    }

    public function login() {
        $this->load->view('common/header');
        $this->load->view('common/custom/titulo');
        $this->load->view('common/custom/conteudo');
        $this->load->view('common/footer');
    }

    function perfil($id) {
        $data = $this->model->getProfileData($id);
        $data['titulo'] = "Exibe o perfil de um usuario";
        $this->load->view('common/header');
        $this->load->view('common/custom/perfil', $data);
    }


    function register(){
        //$this->load->view('common/custom/formulario', $data);
        $this->load->view('common/custom/formulario');
    }


    function insert_user(){
        $this-> form_validation->set_rules('nome', 'Nome do usuario', 'trim|required');
        $this-> form_validation->set_rules('idade', 'Digite sua idade', 'trim|required|numeric');
    $this-> form_validation->set_rules('naturalidade', 'Digita sua naturalidade', 'trim|required');
        $this-> form_validation->set_rules('rua', 'Nome da rua', 'trim|required');
        $this-> form_validation->set_rules('bairro', 'Nome do bairro', 'trim|required');


        if($this->form_validation->run() == TRUE){
            $v = array(
                'nome'=>$this->input->post(nome),
                'idade'=>$this->input->post(idade),
         'naturalidade'=>$this->input->post(naturalidade),
                'rua'=>$this->input->post(rua),
                'bairro'=>$this->input->post(bairro)
                );

            $this->db->insert('usuario', $v);
        }
    }

    

}

?>