<?php

class RegisterDAO extends CI_Model{
	function RegisterDAO(){
            parent::__construct('Register DAO');
	}
	
	function Inserir($data){
            $this->db->insert('usuario', $data);
            if($this->db->affected_rows() >0){
                echo "O Cadastro foi realizado com sucesso!!!<br>";
                
            }
	}
}

