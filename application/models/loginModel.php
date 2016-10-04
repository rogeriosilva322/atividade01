<?php
/*
* Class loginModel @autor Rogerio Lucio
*/
class loginModel extends CI_Model {
	 function loginModel() {
        parent::__construct();
    }

    /*
    *   Esta função consulta o banco de dados  com o usuario e senha inseridos pelo usuario e também as armazena em variaveis de sessao
    *
    */
    public function validalogin(){
    session_start();
   	if($this->validate()){
	$data = $this->le_dados_usuario_post();
    $sql = "SELECT * FROM usuarios WHERE cpf = '" . $data['usuario'] . "'
    AND senha= MD5('" .$data['senha'] . "')";
    $res = $this->db->query($sql);

    if($res){
   foreach ($res->result() as $row)
	   {
	      $_SESSION["cpf"] = $row->cpf;
	      $_SESSION["nome"] =  $row->nome;
          $_SESSION["email"] =  $row->email;
	   }
    	return $res->row();
    }else{
    	return 0;
    }
    
	}else{
		return false;
	   }
    }
    /*  
    *   Esta função define as regras de validação dos campos
    *
    */
    public function define_regras_validacao(){
		$this->form_validation->set_error_delimiters('<div class="alert-danger">', '</div><br>');
		$this->form_validation->set_rules('lg_username', 'Usuario', 'trim|required', array('required'=>'Preencha o campo {field}'));
		$this->form_validation->set_rules('lg_password', 'Senha', 'trim|required', array('required'=>'Preencha o campo {field}'));
	}

    /*
    *  Verifica o resultado do define regras validação e retorna
    */
    public function validate(){
            $this->define_regras_validacao();
            return $this->form_validation->run();
    }

     /*
    *  le os dados do usuario enviados via post
    */


     private  function le_dados_usuario_post(){
		$usuario = $this->input->post("lg_username");
		$senha = $this->input->post("lg_password");
		return array('usuario'=>$usuario, 'senha'=>$senha, 
		);
	}

     /*
    *  pesquisa os objetos
    */
    public function pesquisar(){
        $sql = "SELECT * FROM `objetos` LIMIT 5";
        $res = $this->db->query($sql);
        return $res->result_array();
        }   

    /*
    *  Efetua cadasto no banco de dados de um novo usuario
    */

    public function Cadastrar(){


        if($this->validaCadastro()){
        $data = $this->le_dados_usuario_cadastrar();
        $sql="INSERT INTO usuarios SET nome='". $data['usuario'] . "',
        senha=MD5('". $data['senha'] . "'),
        email='". $data['email'] . "',
        cpf='". $data['cpf'] . "'";
        $res = $this->db->query($sql);
        if($res){
            return 1;
        }else{
            return 0;

        }

        }else{
           $this->load->view('common/header');
           $this->load->view('common/custom/formulario');

        }
    }
      /*
    *  Verifica o resultado do define regras validação e retorna
    */

    private function validaCadastro(){
     $this->define_regras_validacao_cadastro();
     return $this->form_validation->run();

    }
    /*
    *  Define a regra de validação do novo cadastro
    */
     Private function define_regras_validacao_cadastro(){
        $this->form_validation->set_error_delimiters('<div class="alert-danger">', '</div><br>');
        $this->form_validation->set_rules('lg_username', 'Usuario', 'trim|required', array('required'=>'Preencha o campo {field}'));
        $this->form_validation->set_rules('lg_password', 'Senha', 'trim|required', array('required'=>'Preencha o campo {field}'));
        $this->form_validation->set_rules('reg_email', 'email', 'trim|required', array('required'=>'Preencha o campo {field}'));
        $this->form_validation->set_rules('cpf', 'CPF', 'trim|required', array('required'=>'Preencha o campo {field}'));
    }

    /*
    *  le os dados do usuario enviados via post
    */


    public function le_dados_usuario_cadastrar(){

        $usuario = $this->input->post("lg_username");
        $senha = $this->input->post("lg_password");
        $email = $this->input->post("reg_email");
        $cpf = $this->input->post("cpf");
        return array(
            'usuario'=>$usuario, 
            'senha'=>$senha,
            'email'=>$email, 
            'cpf'=>$cpf, 
        );

    }
    }


    
