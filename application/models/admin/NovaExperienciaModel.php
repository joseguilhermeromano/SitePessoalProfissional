<?php

class NovaExperienciaModel extends CI_Model{
	function NovaExperienciaModel(){
		parent::__construct('NovaExperiencia Model');
                $this->load->model('dao/NovaExperienciaDAO','novaexpedao');
                $this->load->helper('url_helper');
	}
	
	function Inserir(){
                $data['form_post_url']='admin/registro/NovaExperiencia/';
                $this->form_validation->set_rules('nomeinstituicao','Nome da Instituição','trim|required');
                $this->form_validation->set_rules('tempoexperiencia','Tempo de Experiência','trim|required');
                $this->form_validation->set_rules('descricaofuncoes','Descricao das Funções','trim|required');
                
		if ($this->form_validation->run() == FALSE)
		{
                    redirect('admin/novaexperiencia');
		}
		else
		{

                    $data=array('expe_inst_nm'=>$this->input->post('nomeinstituicao'),
                        'expe_tempo'=>$this->input->post('tempoexperiencia'),
                        'expe_func_ds'=>$this->input->post('descricaofuncoes'),'expe_usua_cd'=>1);
                    
                    $mensagem=$this->novaexpedao->Inserir($data);
                    
                    return $mensagem;
		}
	}
        
        function Alterar(){
            echo "Teste 1 2 3 ....";
	}
        
        function ConsultarTudo(){
             $query=$this->db->get('experiencia');
             $array=$query->result_array();
             return $array;
            
	}
        
        
        function Excluir(){
            echo "Teste 1 2 3 ....";
	}
}

