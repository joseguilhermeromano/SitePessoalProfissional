<?php

class DadosPessoaisDAO extends CI_Model{
	function DadosPessoaisDAO(){
            parent::__construct('DadosPessoais DAO');
	}
	
        function Alterar($data){
            $this->db->update("usuario",$data);
            if($this->db->affected_rows() >0){
                $mensagem= "As alterações foram salvas com sucesso!!!"; 
            }else{
                $mensagem= "Não foi possível salvar as alterações!!!";
            }
            return $mensagem;
	}
}

