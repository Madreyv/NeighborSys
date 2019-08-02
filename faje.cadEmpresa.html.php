<!DOCTYPE HTML>
<html>
<head>
	
	<title>Cadastro Empresa</title>
</head>
<body>
	<form action="faje.php?chave=empresa&action=inserir" method="post">
		<fieldset>
			<legend>Cadastro Empresa</legend>
			<label for="cnpj">CNPJ:</label>
			<input class="form-control" type="text" name="cnpj">

			<label for="nome_empresa">NOME:</label>
			<input class="form-control" type="text" name="nome_empresa">

			<button type="button" class="btn btn-primary">
				<input type="submit" value="SALVAR" class="btn btn-primary">
			</button>
		</fieldset>
	</form>
		
		


</body>
</html>