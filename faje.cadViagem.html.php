 <!DOCTYPE HTML>
<html>
<head>
	
	<title>Cadastro Empresa</title>
</head>
<body>

	<form action="faje.php?chave=viagem&action=inserir" method="post">
		<div class="row">
			<div class="form-group col-md-4">
				<fieldset>
					<legend>Dados Solicitações</legend>
					<label for="solicitacao_transportes">ST:</label>
					<input type="text" class="form-control" name="solicitacao_transportes">

					<label for="placa">EMPRESA:</label>
					<select name="empresa" class="custom-select">
						<option></option>
						<?php
						foreach($empresas as $key => $empresa){
							echo "<option>" . $empresa['nome_empresa'] .  "</option>";
						
						} 
						?>
					</select>
					<label for="">Equipamento Solicitado</label>
					<select name="equipamento" class="custom-select">
						<option></option>
						<?php
						foreach($veiculos as $key => $veiculo){
							echo "<option>" . $veiculo['TIPO'] .  "</option>";
						
						} 
						?>
					</select>
				</fieldset>
				
			</div>
			<div class="form-group col-md-4">
				<fieldset>
					<legend>Dados Viagem</legend>
					<label for="data">DATA:</label>
					<input type="date" class="form-control" name="data">
					<label for="hora">HORA:</label>
					<input type="time" class="form-control" name="hora">
					<label for="origem">ORIGEM</label>
					<input type="text" class="form-control" name="origem">
					<label for="destino">DESTINO:</label>
					<input type="text" class="form-control" name="destino">

					<label for="placa">REBOQUE:</label>
					<select name="placa" class="custom-select">
						<option></option>
						<?php
						foreach($veiculos as $key => $veiculo){
							echo "<option>" . $veiculo['PLACA'] . " - "  . $veiculo['TIPO'] .  "</option>";
						
						} 
						?>
					</select>
					<label for="placa_aco">SEMI REBOQUE:</label>
					<select name="placa_aco" class="custom-select">
						<option></option>
						<?php
						foreach($veiculos as $key => $veiculo){
							echo "<option>" . $veiculo['PLACA'] . " - "  . $veiculo['TIPO'] .  "</option>";
						
						} 
						?>
					</select>

					<label for="motorista">MOTORISTA:</label>
					<select name="motorista" class="custom-select">
						<option></option>
						<?php
						foreach($motorista as $key => $motorista){
							echo "<option>" . $motorista['nome'] . " - "  . $motorista['cpf'] .  "</option>";
						
						} 
						?>
					</select>
				</fieldset>

			</div>

			<div class="form-group col-md-4" >
				<fieldset>
					<legend>Documentos</legend>
					<label for="os">ORDEM DE SERVIÇO / CTE</label>
					<input type="text" class="form-control" name="os">
					<label for="faturamento">FATURAMENTO:</label>
					<SELECT class="custom-select" name="faturamento">
						<option>FATURADO</option>
						<option selected="">PENDENTE</option>
					</SELECT>
					<?php
						$date = new DateTime();
						?>
					<input type="hidden" name="data_criacao" value=<?php echo $date->format('d-m-Y') ; ?> >
					<label for="obs">OBS:</label>
					<input type="text" class="form-control" name="obs" size="50">
				</fieldset>
			</div>
		</div>
		<button type="button" class="btn btn-primary">
			<input type="submit" value="CADASTRAR" class="btn btn-primary">
		</button>
	</form>
	<!--<form action="" method="post">
		<label for="solicitacao_transportes">ST:</label>
		<input type="text" name="solicitacao_transportes">

		<label for="data">DATA:</label>
		<input type="date" name="data">
		<label for="hora">HORA:</label>
		<input type="time" name="hora">

		<label for="placa">EMPRESA:</label>
		<select name="empresa">
			<option></option>
			<?php
			foreach($empresas as $key => $value){
				echo "<option>" . $value['nome_empresa'] .  "</option>";
			
			} 
			?>
		</select>
		<label for="">Equipamento Solicitado</label>
		<select name="equipamento">
			<option></option>
			<?php
			foreach($veiculos as $key => $value){
				echo "<option>" . $value['TIPO'] .  "</option>";
			
			} 
			?>
		</select>

		<label for="origem">ORIGEM</label>
		<input type="text" name="origem">
		<label for="destino">DESTINO:</label>
		<input type="text" name="destino">

		<label for="placa">PLACA:</label>
		<select name="placa">
			<option></option>
			<?php
			foreach($veiculos as $key => $value){
				echo "<option>" . $value['PLACA'] . " - "  . $value['TIPO'] .  "</option>";
			
			} 
			?>
		</select>

		<label for="motorista">MOTORISTA:</label>
		<select name="motorista">
			<option></option>
			<?php
			foreach($motorista as $key => $value){
				echo "<option>" . $value['nome'] . " - "  . $value['cpf'] .  "</option>";
			
			} 
			?>
		</select>

		<label for="os">ORDEM DE SERVIÇO</label>
		<input type="text" name="os">
		<label for="cte">CTE:</label>
		<input type="text" name="cte">
		<label for="faturamento">FATURAMENTO:</label>
		<input type="text" name="faturamento">
		<label for="data_criacao">CRIADO EM:</label>
		<?php
			$date = new DateTime();
			?>
		<input type="text" name="data_criacao" value=<?php echo "'" . $date->format('Y-m-d'). "'"; ?> >

		<input type="submit" value="CADASTRAR">
	</form>-->
		
		


</body>
</html>