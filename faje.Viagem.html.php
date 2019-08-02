<!DOCTYPE HTML>
<html>
<head>
	
	<title>Sistema de Controle</title>
</head>
<body>	
		<?php 
			if (isset($titulo_relatorio)) {
				
				//echo $titulo_relatorio;
				echo "<h3>" . $titulo_relatorio ."S</h3>";

			}else{
				echo'
					<form action="faje.php?chave=viagem&action=filtro_data" method="post">
						<label for="data_filtro">Data:</label>
						<input type="date"  name="data_filtro" class="linha form-control">
						<input type="submit" value="FILTRAR" class="btn btn-primary">
					</form></br>
				' ;
			}

			?>
			<?php if (isset($mensagem)) {
				echo '<h5 class="fadeIn">'.$mensagem.'</h5>';
		} ?>
		
		
		<table class="tabela">
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
		</table>

		
		


</body>
</html>