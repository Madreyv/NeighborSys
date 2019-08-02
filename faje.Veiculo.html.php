<!DOCTYPE HTML>
<html>
<head>
	
	<title>Sistema de Controle</title>
</head>
<body>
	
		<table class="tabela">
			<tr>
				<th>Placa</th>
				<th>Tipo</th>
				<th>Modelo</th>
				<th></th>
			</tr>
		<?php
			foreach ($resultado as $value){ ?>
			<tr class="arredondar">
				<td><?php echo $value['PLACA'].'  ';?></td>
				<td><?php echo  $value['TIPO'];?></td>
				<td><?php echo  $value['MODELO'];?></td>
				<td>
					<div class="botao botaoEditar">
						<a href=<?php echo "../faje.php?chave=veiculo&action=editar&id=" . $value['PLACA'] ?>><input type="submit" value="EDITAR"></a>
					</div>

					<!--<div class="botao botaoDelete">
						<a href=<?php echo "../faje.php?chave=veiculo&action=delete&id=" . $value['PLACA'] ?>><input type="submit" value="DELETE"></a>
					</div>-->

					<div class="botao botaoDelete esconder_print" onclick="mostrar('alerta'<?php $link = "../faje.php?chave=veiculo&action=delete&id=" . $value['PLACA'] ;
					  /*echo "'" . "../faje.php?chave=viagem&action=delete&id=" . $value['id'] . "'"*/ ?>)" >		
					</div>
				</td>
			</tr>
		<?php };?>
		</table>
		


</body>
</html>