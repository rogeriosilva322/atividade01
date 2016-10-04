<?php
/*
* Class DepartamentosModel @autor Rogerio Lucio
*/
class DepartamentosModel extends CI_Model {
    
     function DepartamentosModel() {
        parent::__construct();
    }
    /*
    *   Esta função pesquisa todos os objetos cadastrados na database e armazena em um array
    */

    function Pesquisar (){
    	$dados = $this->le_dados_pesquisa();
    	if($dados['dados'] != '' ){
    	$sql = "SELECT * FROM objetos WHERE (titulo LIKE('%" . $dados['dados'] . "%')
    	 OR  local LIKE('%" . $dados['dados'] . "%')     ) " ;
    	}else{
    	$sql = "SELECT * FROM objetos ";
    	}
    	$res = $this->db->query($sql);
    	 if($res){

    	 return $res->result_array();
 		    }else{
 		    	echo('ERRO #506-QUERY , favor entre em contato com o suporte tecnico');
 		    	exit;
 		    	
 		    }
		 }

         /*
         * Esta função obtem os dados do campo filtro
         */

     private  function le_dados_pesquisa(){
		$dados = $this->input->post("barraPesquisa");

		if($dados == ''){
			$dados = 0;
		}
		return array(
			'dados'=>$dados
		);
	}
}