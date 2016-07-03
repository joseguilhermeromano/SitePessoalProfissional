<?php

class ConhecimentosModel extends CI_Model{
	function ConhecimentosModel(){
		parent::__construct('Conhecimentos Model');
                $this->load->model('dao/ConhecimentosDAO','condao');
                $this->load->helper('url_helper');
	}
	
	function Inserir(){
                $data['form_post_url']='registro/Formacoes';
                $this->form_validation->set_rules('conhecimento','Ling./Sist./Ferram.','trim|required');
                $this->form_validation->set_rules('nivelconhecimento','Nível de Conhecimento','trim|required');
                $this->form_validation->set_rules('descricaoconhecimento','Descrição do Conhecimento','trim|required');
                
		if ($this->form_validation->run() == FALSE)
		{
                    redirect('admin/novoconhecimento');
		}
		else
		{

                    $data=array('cote_nm'=>$this->input->post('conhecimento'),
                        'cote_nico'=>$this->input->post('nivelconhecimento'),
                        'cote_ds'=>$this->input->post('descricaoconhecimento'),'cote_usua_cd'=>1);
                    
                    $mensagem=$this->condao->Inserir($data);
                    
                    return $mensagem;
		}
	}
        
        function Alterar(){
            echo "Teste 1 2 3 ....";
	}
        
        function ConsultarTudo(){
             $query=$this->db->get('conhe_tecn');
             $array=$query->result_array();
             return $array;
            
	}
        
        
        function Excluir(){
            echo "Teste 1 2 3 ....";
	}
}

