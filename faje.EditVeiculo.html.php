<!DOCTYPE HTML>
<html>
<head>
	
	<title>Cadastro Veiculo</title>
</head>
<body>
	<form action="faje.php?chave=veiculo&action=exibir" method="post">
		<fieldset>
			<div class="form-group ">
				<?php
				foreach ($resultado as $value){
				?>
				<legend>Cadastro Veículo</legend>
				<label for="placa">Placa:</label>
				<input type="hidden" class="form-control" name="id" value=<?php echo $value['PLACA']  ; ?>>
				<input class="form-control" type="text" name="placaVeiculo" value="<?php echo $value['PLACA']  ; ?>"disabled>

				<label for="modelo">Modelo:</label>
				<input class="form-control" type="text" name="modeloVeiculo" value="<?php echo$value['MODELO']; ?>">

				<label for="tipo">Tipo:</label>
				<input class="form-control" type="text" name="tipoVeiculo" value="<?php echo $value['TIPO']  ; ?>">

				<button type="button" class="btn btn-primary">
					<input type="submit" value="SALVAR" class="btn btn-primary">
				</button>
			</div>
		</fieldset>
		<?php };?>
	</form>
		
		


</body>
</html>