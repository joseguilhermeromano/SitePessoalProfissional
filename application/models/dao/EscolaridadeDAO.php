<?php

class EscolaridadeDAO extends CI_Model{
	function EscolaridadeDAO(){
            parent::__construct('Escolaridade DAO');
	}
	
        function Inserir($data){
            $this->db->insert('escolaridade', $data);
            if($this->db->affected_rows() >0){
                $mensagem= "O Cadastro de Escolaridade foi realizado com sucesso!!!"; 
            }else{
                $mensagem= "Não foi possível realizar o cadastro de uma nova Escolaridade!!!";
            }
            return $mensagem;
	}
}
