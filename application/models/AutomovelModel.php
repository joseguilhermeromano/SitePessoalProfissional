<?php

class AutomovelModel extends CI_Model{
	function AutomovelModel(){
		parent::__construct('Automovel Model');
                $this->load->model('dao/AutomovelDAO');
                $this->load->helper('url_helper');
	}
	
	function Consulta($placa){
            return $this->AutomovelDAO->ConsultarPorPlaca($placa);
	}
}
