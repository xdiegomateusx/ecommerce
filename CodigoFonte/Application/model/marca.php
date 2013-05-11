<?php

include_once "../library/database.php";

class Marca extends database{
		
		protected $_table = "marca";
		
			public function busca_marca(){
				
				return $this->select();
			}
	
	
}
