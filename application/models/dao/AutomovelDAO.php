<?php

class AutomovelDAO extends CI_Model{
	function AutomovelDAO(){
            parent::__construct('Automovel DAO');
	}
	
	function ConsultarPorPlaca($placa){
            $this->db->select('*');    
            $this->db->from('automovel');
            $this->db->join('proprietario', 'proprietario.proprietario_automovel = automovel.placa');
            $this->db->where('placa',$placa);
            $query = $this->db->get();
            return $query->row_array();
	}
}

