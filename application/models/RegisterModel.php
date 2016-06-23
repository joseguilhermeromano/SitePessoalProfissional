<?php

class RegisterModel extends CI_Model {
    	function RegisterModel(){
		parent::__construct('Register Model');
                $this->load->model('dao/RegisterDAO');
                $this->load->library('form_validation');
                $this->load->helper('url_helper');
	}
        function Inserir(){
                $data['form_post_url']='register/';
                $this->form_validation->set_rules('usr_fname','Nome','trim|required');
                $this->form_validation->set_rules('usr_lname','Sobrenome','trim|required');
                $this->form_validation->set_rules('usr_email','Email','trim|required');
                
		if ($this->form_validation->run() == FALSE)
		{
                    redirect('Register/index');
		}
		else
		{

                    $data=array('nome'=>$this->input->post('usr_fname'),'sobrenome'=>$this->input->post('usr_lname'),'email'=>$this->input->post('usr_email'));
                    
                    $this->RegisterDAO->Inserir($data);
		}
             
	}
}

