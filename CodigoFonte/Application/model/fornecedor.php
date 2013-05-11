<?php
include_once "../library/database.php";

class Fornecedor extends Database{
	
	protected $_table = "fornecedor";
	
	
	
	public function busca_fornecedor(){
		
		return $this->select();
		
	}
}