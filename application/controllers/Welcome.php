<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'My_Controller.php';

class Welcome extends My_Controller {

    
    
    public function index(){
        $this->load->view('common/header');
        $this->load->view('atividaderesponsiva');
        $this->load->view('common/footer');
    }
    
//	public function index(){
//                $data['form_post_url']='welcome/create';
//		$this->load->view('common/header');
////		$data['nome']='José';
////		$data['sobrenome']='Guilherme';
////		$this->load->view('sample_view',$data);
//                $this->load->view('test/register',$data);
//		$this->load->view('common/footer');
//	}
        
//        function placa($placa){
//            echo "Sua placa &eacute;: $placa";
//        }
//	
//        public function create(){
//            $this->form_validation->set_rules('first_name','Nome','trim|required|min_length[10]|maxlength[15]');
//            $this->form_validation->set_rules('last_name','Sobrenome','trim|required|min_length[10]|max_length[15]');
//            
//            if($this->form_validation->run()==TRUE){
//                echo "ok form validate";
//            }else{
//                $data['form_post_url']='welcome/create';
//		$this->load->view('common/header');
//                $this->load->view('test/register',$data);
//		$this->load->view('common/footer');
//            }
//        }
	
}
