<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'My_Controller.php';

class Busca extends My_Controller {

        public function __construct(){
                parent::__construct();
                $this->load->model('AutomovelModel');
                $this->load->helper('url_helper');
        }
	public function index(){
                $data['form_post_url']='Busca/placa';
		$this->load->view('common/header');
                $this->load->view('test/busca',$data);
		$this->load->view('common/footer');
	}
        
        function placa($placa){
            $data['dados']=$this->AutomovelModel->Consulta($placa);
            if(empty($data['dados'])){
                echo "Resultado não encontrado, tente novamente!!!<br><br>";
                echo "<a href='Busca'>voltar</a>";
            }else{
                $this->load->view('common/header');
                $this->load->view('test/informacoes',$data);
		$this->load->view('common/footer');
            }
        }
	

	
}

