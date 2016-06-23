<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . '/controllers/test/MyToast.php');

class PontoTest extends MyToast{
    
    function PontoTest(){
        parent::__construct('Ponto Test');
        
    }
    
    //nós queremos atribuir valor para as coordenadas de um ponto
    
    function test_ponto_atribui_valores_das_coordenadas_corretamente(){
        $this->load->library('ponto',null,'p1');
        $this->p1->set_x(3);
        $k=$this->p1->get_x();
        $this->_assert_equals($k,3,"O Valor esperado era 3,porém foi retornado o valor $k.");
        
        $this->p1->set_y(4);
        $k=$this->p1->get_y();
        $this->_assert_equals($k,4,"O Valor esperado era 3,porém foi retornado o valor $k.");
    }
    
    //queremos atribuir valores das coordenadas pelo construtor
    
    function test_construtor_ponto_atribui_valores_das_coordenadas_corretamente(){
        $args=array('x'=>8,'y'=>6);
        $this->load->library('ponto',$args,'p2');
        
        $k=$this->p2->get_x();
        $this->_assert_equals($k,8,"O Valor esperado era 8,porém foi retornado o valor $k.");
        
        $k=$this->p2->get_y();
        $this->_assert_equals($k,6,"O Valor esperado era 6,porém foi retornado o valor $k.");
    }
    
    //crie um teste para uma função que faça com que as duas coordenadas de um ponto 
    //tenham sempre op mesmo valor... use o valor da maior coordenada. 
    //Por exemplo: se as coordenadas forem (2,5), o ponto deve passar a ter coordenadas (5,5)
    
    function test_ponto_normaliza_coordenadas_corretamente(){
        $args=array('x'=>2,'y'=>5);
        $this->load->library('ponto',$args,'p3');
        
        $this->p3->normaliza();
        $this->_assert_equals($this->p3->get_x(),5,"O Valor esperado para x era 5,porém foi retornado o valor {$this->p3->get_x()}.");
        $this->_assert_equals($this->p3->get_y(),5,"O Valor esperado para y era 5,porém foi retornado o valor {$this->p3->get_y()}.");
        
        $args=array('x'=>5,'y'=>2);
        $this->load->library('ponto',$args,'p4');
        
        $this->p4->normaliza();
        $this->_assert_equals($this->p4->get_x(),5,"O Valor esperado para x era 5,porém foi retornado o valor {$this->p4->get_x()}.");
        $this->_assert_equals($this->p4->get_y(),5,"O Valor esperado para y era 5,porém foi retornado o valor {$this->p4->get_y()}.");
    }
    
}
