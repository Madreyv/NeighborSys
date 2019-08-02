<!DOCTYPE HTML>
<html>
<head>
	
	<title>Cadastro Empresa</title>
</head>
<body>
	<form action="faje.php?chave=empresa&action=exibir" method="post">
		<fieldset>
			<?php
				foreach ($resultado as $value){
			?>
			<legend>Cadastro Empresa</legend>
			<label for="cnpj">CNPJ:</label>
			<input class="form-control" type="text" name="cnpj"  value="<?php echo $value['cnpj'].'  ';?>" disabled>
			<input class="form-control" type="hidden" name="cnpj"  value="<?php echo $value['cnpj'].'  ';?>" >
			<input class="form-control" type="hidden" name="id"  value="<?php echo $value['cnpj'].'  ';?>">

			<label for="nome_empresa">NOME:</label>
			<input class="form-control" type="text" name="nome_empresa" value="<?php echo $value['nome_empresa'].'  ';?>">

		</fieldset>
		<button type="button" class="btn btn-primary">
				<input type="submit" value="SALVAR" class="btn btn-primary">
		</button>
		<?php };?>
	</form>
		
</body>
</html>