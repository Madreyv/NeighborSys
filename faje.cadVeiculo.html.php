<!DOCTYPE HTML>
<html>
<head>
	
	<title>Cadastro Veiculo</title>
</head>
<body>
	<form action="faje.php?chave=veiculo&action=inserir" method="post">
		<fieldset>
			<div class="form-group ">
				<legend>Cadastro Veículo</legend>
				<label for="placa">Placa:</label>
				<input class="form-control" type="text" name="placaVeiculo">

				<label for="modelo">Modelo:</label>
				<input class="form-control" type="text" name="modeloVeiculo">

				<label for="tipo">Tipo:</label>
				<input class="form-control" type="text" name="tipoVeiculo">

				<button type="button" class="btn btn-primary">
					<input type="submit" value="SALVAR" class="btn btn-primary">
				</button>
			</div>
		</fieldset>
	</form>
		
		


</body>
</html>