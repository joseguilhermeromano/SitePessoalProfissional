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
        $this->load->model('admin/DadosPessoaisModel','dadospessoais');
        
//        $this->load->library('uploadimage','','img');
//        $this->img->upload($_FILES['image_field'],'pt_BR');
    }
    
    public function view($page="dadospessoais",$data=null){
        if ( ! file_exists(APPPATH.'/views/admin/'.$page.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }

            $this->load->view('common/header');
            $this->load->view('common/menuadmin');
            if($data==null){
                $data=$this->ConsultarTudo($page);
            }
            $this->load->view('admin/'.$page,$data);
            $this->load->view('common/footer');
    }
    
    public function inserir($page='DadosPessoais'){
        $data= null;
        switch($page){
            case "Experiencias":
                $data['mensagem']=$this->novaexpe->Inserir();
                if ($data['mensagem']==null){
                    $page="NovaExperiencia";
                }else{
                    $page="Formacoes";
                }
                break;
            
            case "Conhecimentos":
                $data['mensagem']=$this->conmodel->Inserir();
                if ($data['mensagem']==null){
                    $page="NovoConhecimento";
                }else{
                    $page="Formacoes";
                }
                break;
            
            case "Escolaridades":
                $data['mensagem']=$this->escomodel->Inserir();
                if ($data['mensagem']==null){
                    $page="NovaEscolaridade";
                }else{
                    $page="Formacoes";
                }
                break;
            
            case "Projetos":
                        
                break;
            
                default:
                    
                break;
        }
        
                $data=$this->ConsultarTudo($page,$data);
                $this->view($page,$data);
                
        }  
        
        
        public function ConsultarTudo($page="DadosPessoais",$data=null){
             switch ($page){
                case "DadosPessoais":
                    $data['dadospessoais']=$this->dadospessoais->ConsultarTudo();
                    break;
                case "Formacoes":
                    $data['experiencias']=$this->novaexpe->ConsultarTudo();
                    $data['conhecimentos']=$this->conmodel->ConsultarTudo();
                    $data['escolaridades']=$this->escomodel->ConsultarTudo();
                    break;
                default:
                    $data=null;
                    break;
            }
            return $data;
        }
    }
 
   


