<?php

/*
* Class emailModel @autor Rogerio Lucio
*/
class emailModel extends CI_Model {
	 
	 function emailModel() {
        parent::__construct();
    }

/*
*	Esta função le os dados inseridos pelo usuario e armazena os em um array enviando para a função EnviaEmail
*
*/

    public  function le_dados_cadastro_email(){
		$nome = $this->input->post("nome");
		$assunto = $this->input->post("assunto");
		$mensagem = $this->input->post("mensagem");
		$emailPessoal = $this->input->post("emailPessoal");
        $emailContato = $this->input->post("emailContato");
		$dados =  array(
			'nome'=>$nome, 
			'assunto'=>$assunto, 
			'mensagem'=>$mensagem, 
			'emailPessoal'=>$emailPessoal,
            'emailContato' => $emailContato
		);
        $this->EnviaEmail($dados);
	}


	/*
	*
	*	Envia um E-mail de contato com a mensagem da qual o usuario insere 
	*
	*/
public function EnviaEmail($dados){
$this->email->from($dados['emailPessoal'], $dados['nome']);
$this->email->subject($dados['assunto']);
$this->email->reply_to($dados['emailPessoal']);
$this->email->to($dados['emailContato']); 
/*$this->email->cc('email_copia@dominio.com');
$this->email->bcc('email_copia_oculta@dominio.com');*/
$this->email->message($dados['mensagem']);
$status = $this->email->send();
$status = 1;
    print_r($status);

    if($status == 1){
        $this->load->view('common/header');
        $this->load->view('common/custom/successEmail.php');
    }
    }
}
 ?>