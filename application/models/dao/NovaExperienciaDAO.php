<?php

class NovaExperienciaDAO extends CI_Model{
	function NovaExperienciaDAO(){
            parent::__construct('NovaExperiencia DAO');
	}
	
        function Inserir($data){
            $this->db->insert('experiencia', $data);
            if($this->db->affected_rows() >0){
                $mensagem= "O Cadastro de experiência foi realizado com sucesso!!!"; 
            }else{
                $mensagem= "Não foi possível realizar o cadastro de uma nova experiência!!!";
            }
            return $mensagem;
	}
        
        function Alterar(){
            
        }
        
        function ConsultarTudo(){
             
        }
        
        function Excluir(){
            
        }
}

