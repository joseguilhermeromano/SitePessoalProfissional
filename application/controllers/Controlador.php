<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'My_Controller.php';

class Controlador extends My_Controller {
    
    public function __construct(){
            parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('admin/NovaExperienciaModel','novaexpe');
        $this->load->model('admin/ConhecimentosModel','conmodel');
        $this->load->model('admin/EscolaridadeModel','escomodel');
    }
    
    public function view($page="home",$data=null){
        if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }

            $data['title'] = ucfirst($page); // Capitalize the first letter

            $this->load->view('common/header');
            $this->load->view('common/menu');
            $this->load->view($page,$data);
            $this->load->view('common/footer');
    }
    
     public function Formacoes($metodo=''){
            
                $data['experiencias']=$this->novaexpe->ConsultarTudo();
                $data['conhecimentos']=$this->conmodel->ConsultarTudo();
                $data['escolaridades']=$this->escomodel->ConsultarTudo();
                //echo "teste";
                $this->view('formacao',$data);
                
        } 
    
}

