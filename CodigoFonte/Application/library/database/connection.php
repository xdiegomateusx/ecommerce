<?php
class Database_Connection{
	
	protected $_db;
	
	public function __construct(){
		$this->conexao();
			}
						
			private function conexao(){
				
				try {
					
					$this->_db = new PDO('mysql:dbname=ecommerce;host=localhost', "root", "");
				
				}catch (PDOException $e){
					
					new Exception("Erro de conexão ao banco de dados: ".$e->getMessage());
				}
			}
}
