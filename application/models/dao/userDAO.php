<?php

class UserDAO extends CI_Model{
	function UserDAO(){
		parent::_construct('User DAO');
	}
	
	function create_table(){
		$sql="CREATE TABLE IF NOT EXISTS user(
				id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
				nome varchar(40) NOT NULL,
				sobrenome varchar(40) NOT NULL,
				email varchar(40) NOT NULL
		)";
		$this->db->query($sql);
	}
}