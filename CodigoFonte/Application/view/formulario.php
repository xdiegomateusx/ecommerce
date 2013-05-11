<?php

include "../model/marca.php";
include "../model/fornecedor.php";


$marca = new marca();
$fornecedor = new fornecedor();

?>


<form method="get" action="form.php" name="formulario">

Produto:<br>
<input type ="text" name="produto" /><br>


<br>
<br>
Fornecedor <br>
<select name="fornecedor" >
	<option value="">Selecione Uma Opção</option>
	<?php 	
	foreach ($fornecedor-> busca_fornecedor()as $linha){	
	?>
		<option value="<?php echo $linha['idfornecedor']?>" ><?php echo $linha ['tx_nome']?> </option>
	<?php 
	}
	?>
</select>

<br>

Marca <br>
<select name="marca">

<?php 

foreach ($marca->busca_marca()as $linha ){

?>

<option value="<?php echo $linha['idmarca'] ?>" ><?php  echo $linha ['tx_marca']?> </option>	
<?php }?>

</select>
		
<br>
<br>

<input type="submit" value="Cadastrar" />



</form>