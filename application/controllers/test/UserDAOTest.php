<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . '/controllers/test/MyToast.php');

class UserDAOTest extends MyToast{
	function UserDAOTest(){
		parent::__construct('User DAOTest');
	}
	
	function test_if_user_was_successfully_created(){
		$this->load->model('dao/UserDAO','dao');
		$this->dao->create_table();
		$k=$this->table_exists('user');
		$this->_assert_equals($k, 1,"A Tabela user nao foi criada");
	}
	
	function test_table_has_correct_column_list(){
		$k=$this->table_has_column('user','id');
		$this->_assert_equals($k, 1, "A tabela user nao possui a coluna 'id'.");
		
		$k=$this->table_has_column('user','nome');
		$this->_assert_equals($k, 1, "A tabela user nao possui a coluna 'nome'.");
		
		$k=$this->table_has_column('user','sobrenome');
		$this->_assert_equals($k, 1, "A tabela user nao possui a coluna 'sobrenome'.");
		
		$k=$this->table_has_column('user','email');
		$this->_assert_equals($k, 1, "A tabela user nao possui a coluna 'email'.");
	}
	
	function test_table_has_correct_number_of_columns(){
		$num=$this->table_column_number('user');
		$this->_assert_equals($num, 4, "A quantidade de colunas da tabela user esta errada");
	}
}