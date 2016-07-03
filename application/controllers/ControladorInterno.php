<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'My_Controller.php';

class ControladorInterno extends My_Controller {

    public function __construct(){
            parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('admin/NovaExperienciaModel','novaexpe');
        $this->load->model('admin/ConhecimentosModel','conmodel');
        $this->load->model('admin/EscolaridadeModel','escomodel');
    }
    
    public function view($page="dadospessoais",$data=null){
        if ( ! file_exists(APPPATH.'/views/admin/'.$page.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }

            $this->load->view('common/header');
            $this->load->view('common/menuadmin');
            $this->load->view('admin/'.$page,$data);
            $this->load->view('common/footer');
    }
    
    public function Formacoes($metodo=''){
       
        switch ($metodo){
            case "InserirExperiencia":
                $data['mensagem']=$this->novaexpe->Inserir();
                
                break;
            case "InserirConhecimento":
                $data['mensagem']=$this->conmodel->Inserir();

                break;
            case "InserirEscolaridade":
                $data['mensagem']=$this->escomodel->Inserir();

                break;
        }
            
                $data['experiencias']=$this->novaexpe->ConsultarTudo();
                $data['conhecimentos']=$this->conmodel->ConsultarTudo();
                $data['escolaridades']=$this->escomodel->ConsultarTudo();
                //echo "teste";
                $this->view('formacoes',$data);
                
        }  
    }
 
   


