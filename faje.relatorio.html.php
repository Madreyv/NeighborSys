<!DOCTYPE HTML>
<html>
<head>
	
	<title>Sistema de Controle</title>
</head>
<body>	
		<form action="faje.php?chave=viagem&action=relatorioClientes" method="post">
			<label for="placa_aco">Empresas:</label>
			<select name="empresa" class="custom-select elementoPesquisa ">
				<option></option>
				<?php
				foreach($empresas as $key => $empresa){
					echo "<option>" . $empresa['nome_empresa'] .  "</option>";
				
				} 
				?>
			</select>
			<label for="data_inicial">Data Inicial:</label>
			<input type="date"  name="data_inicial" class=" form-control elementoPesquisa">

			<label for="data_final">Data Final:</label>
			<input type="date"  name="data_final" class=" form-control elementoPesquisa">

			<input type="submit" value="FILTRAR" class="btn btn-primary">
		</form></br>
		
		<?php
		if (isset($resultado)) {
			include __DIR__ . '/../templates/faje.tabela.html.php';
		}
		?>

		<!--<table class="tabela">
			<tr>
				<th>ST</th>
				<th>DATA</th>
				<th>HORA</th>
				<th>EMPRESA</th>
				<th>EQUIPAMENTO</th>
				<th>ORIGEM</th>
				<th>DESTINO</th>
				<th>REBOQUE</th>
				<th>SEMI RBQ</th>
				<th>MOTORISTA</th>
				<th>OS/CTE</th>
				<th>FATURAMENTO</th>
				<th>OBS</th>
				<th></th>
				
			</tr>
		<?php
		
		foreach ($resultado as $value){
			$date = new DateTime($value['data'])

		 ?>
			<tr class="arredondar">
				<td><?php echo $value['solicitacao_transportes'].'  ';?>
					<input type="hidden" name=<?php echo "'" . $value['id'] . "'"?>>
				</td>
				<td><?php echo $date->format('d-m-y').'  ';?></td>
				<td><?php echo $value['hora'].'  ';?></td>
				<td><?php echo $value['empresa'].'  ';?></td>
				<td><?php echo $value['equipamento'].'  ';?></td>
				<td><?php echo $value['origem'].'  ';?></td>
				<td><?php echo $value['destino'].'  ';?></td>
				<td><?php echo $value['placa'].'  ';?></td>
				<td><?php echo $value['placa_aco'].'  ';?></td>
				<td><?php echo $value['motorista'].'  ';?></td>
				<td><?php echo $value['cte'].'  ';?></td>
				<td><?php echo $value['faturamento'].'  ';?></td>
				<td><?php echo $value['obs'].'  ';?></td>
				<td>
					
					<div class="botao botaoEditar esconder_print">
						<a href=<?php echo  "../faje.php?chave=viagem&action=editar&id=" . $value['id'] ?>><input type="submit" value="EDITAR"></a>
					</div>

					<div class="botao botaoDelete esconder_print" onclick="mostrar('alerta',<?php $link = "../faje.php?chave=viagem&action=delete&id=" . $value['id'] ;
					  /*echo "'" . "../faje.php?chave=viagem&action=delete&id=" . $value['id'] . "'"*/ ?>)" >		
					</div>					
					
				</td>
			</tr>
		<?php };?>
		</table>-->

		
		


</body>
</html>