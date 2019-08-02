<!DOCTYPE HTML>
<html>
<head>
	
	<title>Cadastro Empresa</title>
</head>
<body>
	<form action="faje.php?chave=viagem&action=exibir" method="post">
		<div class="row">
			<div class="form-group col">
				<fieldset>
					<legend>Dados Solicitações</legend>
					<?php
					foreach ($resultado as $value){ ?>
					<label for="id"></label>
					<input type="hidden" class="form-control" name="id" value=<?php echo $value['id']  ; ?>>
					<label for="solicitacao_transportes">ST:</label>
					<input type="text" class="form-control" name="solicitacao_transportes" value=<?php echo $value['solicitacao_transportes']; ?>>

					<label for="placa">EMPRESA:</label>
					<select name="empresa" class="custom-select">
						<option><?php echo $value['empresa']; ?></option>
						<?php
						foreach($empresas as $key => $empresa){
							echo "<option>" . $empresa['nome_empresa'] .  "</option>";
						
						} 
						?>
					</select>
					<label for="">Equipamento Solicitado</label>
					<select name="equipamento" class="custom-select">
						<option><?php echo  $value['equipamento']; ?></option>
						<?php
						foreach($veiculos as $key => $veiculo){
							echo "<option>" . $veiculo['TIPO'] .  "</option>";
						
						} 
						?>
					</select>
				</fieldset>
				
			</div>
			<div class="form-group col">
				<fieldset>
					<legend>Dados Viagem</legend>
					<label for="data">DATA:</label>
					<input type="date" class="form-control" name="data" value=<?php echo $value['data']; ?> disabled>
					<label for="hora">HORA:</label>
					<input type="time" class="form-control" name="hora" value=<?php echo $value['hora']; ?>>
					<label for="origem">ORIGEM</label>
					<input type="text" class="form-control" name="origem" value=<?php echo '"' . $value['origem'] . '"'; ?>>
					<label for="destino">DESTINO:</label>
					<input type="text" class="form-control" name="destino" value=<?php echo '"' .  $value['destino'] . '"'; ?>>

					<label for="placa">REBOQUE:</label>
					<select name="placa" class="custom-select">
						<option><?php echo $value['placa']; ?></option>
						<?php
						foreach($veiculos as $key => $veiculo){
							echo "<option>" . $veiculo['PLACA'] . " - "  . $veiculo['TIPO'] .  "</option>";
						
						} 
						?>
					</select>
					<label for="placa">SEMI RBQ:</label>
					<select name="placa_aco" class="custom-select">
						<option><?php echo $value['placa_aco']; ?></option>
						<?php
						foreach($veiculos as $key => $veiculo){
							echo "<option>" . $veiculo['PLACA'] . " - "  . $veiculo['TIPO'] .  "</option>";
						
						} 
						?>
					</select>

					<label for="motorista">MOTORISTA:</label>
					<select name="motorista" class="custom-select">
						<option><?php echo  $value['motorista']; ?></option>
						<?php
						foreach($motorista as $key => $motorista){
							echo "<option>" . $motorista['nome'] . " - "  . $motorista['cpf'] .  "</option>";
						
						} 
						?>
					</select>
				</fieldset>

			</div>

			<div class="form-group col" >
				<fieldset>
					<legend>Documentos</legend>
					<label for="os">ORDEM DE SERVIÇO / CTE</label>
					<input type="text" class="form-control" name="os" value=<?php echo  $value['os']; ?>>
					<label for="faturamento">FATURAMENTO:</label>
					<SELECT class="custom-select" name="faturamento">
						<option><?php echo  $value['faturamento']; ?></option>
						<option>FATURADO</option>
						<option>PENDENTE</option>
					</SELECT>
					<?php
						$date2 = new DateTime();
						?>
					<label for="cte">OBS:</label>
					<input type="text" class="form-control" name="obs" value=<?php echo $value['obs']; ?>>
					<label for="data_alteracao"></label>
					<input type="hidden" name="data_alteracao" value=<?php echo $date2->format('d-m-Y') ; ?>>
				</fieldset>
			</div>
		</div>
		<button type="button" class="btn btn-primary">
			<input type="submit" value="SALVAR" class="btn btn-primary">
		</button>
		
		<?php };?>
	</form>
		
		


</body>
</html>