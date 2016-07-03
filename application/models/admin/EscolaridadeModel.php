<?php

class EscolaridadeModel extends CI_Model{
	function EscolaridadeModel(){
		parent::__construct('Escolaridade Model');
                $this->load->model('dao/EscolaridadeDAO','escolaridade');
                $this->load->helper('url_helper');
	}
	
	function Inserir(){
                $data['form_post_url']='registro/Formacoes/';
                $this->form_validation->set_rules('nomeinstituicao','Nome da Instituição','trim|required');
                $this->form_validation->set_rules('nomecurso','Nome do Curso','trim|required');
                $this->form_validation->set_rules('duracao','Duracao','trim|required');
                $this->form_validation->set_rules('datainicial','Data Inicial','trim|required');
                $this->form_validation->set_rules('datafinal','Data Final','trim|required');
                $this->form_validation->set_rules('descricaocurso','Descrição do Curso','trim|required');
                
		if ($this->form_validation->run() == FALSE)
		{
                    redirect('admin/novaescolaridade');
		}
		else
		{

                    $data=array('esco_inst_nm'=>$this->input->post('nomeinstituicao'),
                        'esco_curso_nm'=>$this->input->post('nomecurso'),
                        'esco_dura'=>$this->input->post('duracao'),
                        'esco_inic_dt'=>$this->input->post('datainicial'),
                        'esco_final_dt'=>$this->input->post('datafinal'),
                        'esco_ds'=>$this->input->post('descricaocurso'),
                        'esco_usua_cd'=>1);
                    
                    $mensagem=$this->escolaridade->Inserir($data);
                    
                    return $mensagem;
		}
	}
        
        function Alterar(){
            echo "Teste 1 2 3 ....";
	}
        
        function ConsultarTudo(){
             $query=$this->db->get('escolaridade');
             $array=$query->result_array();
             return $array;
            
	}
        
        
        function Excluir(){
            echo "Teste 1 2 3 ....";
	}
}