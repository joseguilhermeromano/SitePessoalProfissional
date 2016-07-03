<?php

class DadosPessoaisModel extends CI_Model{
	function DadosPessoaisModel(){
		parent::__construct('NovaExperiencia Model');
                $this->load->model('dao/DadosPessoaisDAO','dadospessoais');
                $this->load->helper('url_helper');
	}
	
        
        function Alterar($codigo=1){
                $data['form_post_url']='admin/DadosPessoais';
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
            $this->dadospessoais->Alterar($data);
	}
        
        function ConsultarTudo(){
             $query=$this->db->get('usuario');
             $array=$query->row_array();
             return $array;
            
	}
        
}

