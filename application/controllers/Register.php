<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'My_Controller.php';

class Register extends My_Controller {

        public function __construct(){
                parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->model('RegisterModel');
        }
	public function index(){
            $this->RegisterModel->Inserir();
	}
        
        public function exibeform(){
            $data['form_post_url']='register/';
            $this->load->view('common/header');
            $this->load->view('users/register');
            $this->load->view('common/footer');
        }
	
}

