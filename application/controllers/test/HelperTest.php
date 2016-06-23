<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . '/controllers/test/MyToast.php');

class HelperTest extends MyToast{
    function HelperTest(){
        parent::__construct('Helper Test');
        $this->load->helper('escola');
    }
    
    //queremos criar uma função que verifica se um aluno foi aprovado com base na sua nota 
    
    function test_verifica_aprovacao_reprova_corretamente(){
        $k=verifica_aprovacao(5.99);
        $this->_assert_false_strict($k,"Com a nota 5.99 o aluno deveria ser reprovado.");
        
        $k=verifica_aprovacao(0);
        $this->_assert_false_strict($k,"Com a nota 0 o aluno deveria ser reprovado.");
    }
    
    function test_verifica_aprovacao_aprova_corretamente(){
        $k=verifica_aprovacao(6);
        $this->_assert_true_strict($k,"Com a nota 6 o aluno deveria ser aprovado.");
        
        $k=verifica_aprovacao(10);
        $this->_assert_true_strict($k,"Com a nota 10 o aluno deveria ser aprovado.");
    }
    
    function test_verifica_aprovacao_rejeita_valores_numericos_invalidos_corretamente(){
        $k=verifica_aprovacao(-0.01);
        $this->_assert_equals($k,null,"Não existe nota menor que zero.");
        
        $k=verifica_aprovacao(10.01);
        $this->_assert_equals($k,null,"Não existe nota maior que dez.");
    }
    
     function test_verifica_aprovacao_rejeita_valores_nao_numericos_corretamente(){
        $k=verifica_aprovacao(array(5));
        $this->_assert_equals($k,null,"Não existe nota menor que zero.");
        
        $k=verifica_aprovacao('string');
        $this->_assert_equals($k,null,"Não existe nota maior que dez.");
    }
}

