<!DOCTYPE HTML>
<html>
<head>
	
	<title>Cadastro Funcionário</title>
</head>
<body>
	<form action="faje.php?chave=funcionario&action=exibir" method="post">
		<fieldset>
			<?php
				foreach ($resultado as $value){
			?>
			<legend>Cadastro Funcionário</legend>
			<label for="cpf">CPF:</label>
			<input type="text" class="form-control" name="cpf" value=<?php echo '"' . $value['cpf'] . '"' ; ?> Disabled>
			<input type="hidden" class="form-control" name="id" value=<?php echo '"' . $value['cpf'] . '"' ; ?>>

			<label for="nome">NOME:</label>
			<input type="text" class="form-control" name="nome" value=<?php echo '"' . $value['nome'] . '"' ; ?>>

			<label for="funcao">FUNÇÃO:</label>
			<input type="text" class="form-control" name="funcao" value=<?php echo '"' . $value['funcao'] . '"' ; ?>>
			</fieldset>
		

		<button type="button" class="btn btn-primary">
			<input type="submit" value="SALVAR" class="btn btn-primary">
		</button>
		<?php };?>

	</form>
		
		


</body>
</html>