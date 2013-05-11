<?php

include "../library/database.php";
class ProdutoModel extends Database {
	
	protected $_table = 'produto';
	
	public function busca(){
		$resultado = $this->select();
		
		    foreach ($resultado as $linha){
			echo $linha ['idproduto'];
			echo $linha ['fl_preco'];
			echo $linha ['tx_nome'];
			echo "<br>";
		}
	}
	
}

$model = new ProdutoModel();
$model->busca();