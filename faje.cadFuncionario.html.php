<!DOCTYPE HTML>
<html>
<head>
	
	<title>Cadastro Funcionário</title>
</head>
<body>
	<form action="faje.php?chave=funcionario&action=inserir" method="post">
		<fieldset>
			<legend>Cadastro Funcionário</legend>
			<label for="cpf">CPF:</label>
			<input type="text" class="form-control" name="cpf">

			<label for="nome">NOME:</label>
			<input type="text" class="form-control" name="nome">

			<label for="funcao">FUNÇÃO:</label>
			<input type="text" class="form-control" name="funcao">
			</fieldset>
		

		<button type="button" class="btn btn-primary">
			<input type="submit" value="SALVAR" class="btn btn-primary">
		</button>
	</form>
		
		


</body>
</html>