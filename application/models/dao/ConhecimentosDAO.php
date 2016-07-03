<?php

class ConhecimentosDAO extends CI_Model{
	function ConhecimentosDAO(){
            parent::__construct('Conhecimentos DAO');
	}
	
        function Inserir($data){
            $this->db->insert('conhe_tecn', $data);
            if($this->db->affected_rows() >0){
                $mensagem= "O Cadastro de Conhecimento foi realizado com sucesso!!!"; 
            }else{
                $mensagem= "Não foi possível realizar o cadastro de uma novo Conhecimento Técnico!!!";
            }
            return $mensagem;
	}
}