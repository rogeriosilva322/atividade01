<?php

/*
* Class CadastrarModel @autor Rogerio Lucio
*
*/
class CadastrarModel extends CI_Model {
	 
	 function CadastrarModel() {
        parent::__construct();
    }
/*
*   Esta função verifica se os dados foram digitados corretamente se sim faz os insere no banco de dados
*   Caso contrario chama o formulario novamente
*
*/

 public function validaDados(){
  if($this->validate()){
    $data = $this->le_dados_cadastro_post();
	        $config['upload_path'] = 'imagem/';
            //Tipos suportados
            $config['allowed_types'] = 'gif|jpg|png';
            //Configurando atributos do arquivo imagem que iremos receber
            $config['max_size']     = '1000';
            $config['max_width']  = '10240';
            $config['max_height']  = '7680';
            //Carregando a lib com as configurações feitas
            $this->load->library('upload', $config);
            //Fazendo o upload do arquivo e direcionando para a view de erro ou de sucesso
            if( ! $this->upload->do_upload('arquivo')){
                    $error = array('error' => $this->upload->display_errors());

               	$this->load->view('common/header');
				$this->load->view('common/custom/erro_imagem');
            }else{	
            	$dataUpload = array('upload_data' => $this->upload->data());
            	$nomeImagem = $dataUpload['upload_data']['file_name'];

				$sql = "INSERT INTO objetos SET 
            	titulo='" .$data['titulo'] .  "',
            	nome='" .$data['nome'] .  "',
            	email='" .$data['email'] .  "',
            	local='" .$data['local'] .  "',
            	file='" . $nomeImagem .  "',
            	descricao='" .$data['descricao'] .  "'";
            	$res = $this->db->query($sql); 
            
                if($res > 0){
                    return 1 ;
                }else{
                    return 1;
                }
            }
		}else{
				$this->load->view('common/header');
				$this->load->view('common/custom/Cadastrar');
		}
	}
    /*
    *Esta função define as regras de validação dos campos digitados pelo usuário
    *
    */
    public function define_regras_validacao(){
    $this->form_validation->set_error_delimiters('<div class="alert-danger">', '</div><br>');
    $this->form_validation->set_rules('titulo', 'titulo', 'trim|required', array('required'=>'Preencha o campo {field}'));
    $this->form_validation->set_rules('descricao', 'descricao', 'trim|required', array('required'=>'Preencha o campo {field}'));
    $this->form_validation->set_rules('email', 'email', 'trim|required', array('required'=>'Preencha o campo {field}'));
    $this->form_validation->set_rules('local', 'local', 'trim|required', array('required'=>'Preencha o campo {field}'));
    $this->form_validation->set_rules('nome', 'nome', 'trim|required', array('required'=>'Preencha o campo {field}'));

    }

    public function validate(){
        
            $this->define_regras_validacao();
            return $this->form_validation->run();
    }

    /*
    * Esta função le os dados os usuario via post e armazena em um array
    *
    */
    private  function le_dados_cadastro_post(){
		$nome = $this->input->post("nome");
		$email = $this->input->post("email");
		$local = $this->input->post("local");
		$file = $this->input->post("arquivo");
		$descricao = $this->input->post("descricao");
		$titulo = $this->input->post("titulo");
        $status = ($this->input->post("radio_escolha") == 1 ? '1' : '0');
		return array(
			'nome'=>$nome, 
			'email'=>$email, 
			'local'=>$local, 
			'file'=>$file, 
			'descricao'=>$descricao, 
			'titulo'=>$titulo,
            'status'=> $status
		);
	}
}
 ?>