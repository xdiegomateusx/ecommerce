<?php

include "database".DIRECTORY_SEPARATOR."connection.php";
		
class Database extends Database_Connection {
			
	protected $_table;
	
	protected function select(){
		
		$result = $this->_db->query("SELECT * FROM {$this->_table}");
		
		return $result->fetchAll();
	}
	
	protected function incluir($dados){
		
		foreach($dados as $chave => $conteudo){
			
			
		}
		
		$result = $this->_db->query("INSERT INTO {$this->_table}");
	}

	
	
	
	
		}