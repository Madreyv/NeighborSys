<!DOCTYPE HTML>
<html>
<head>
	
	<title>Sistema de Controle</title>
</head>
<body>
	
		<table class="tabela">
			<tr>
				<th>CPF</th>
				<th>NOME</th>
				<th>FUNCAO</th>
				<th></th>
			</tr>
		<?php
		foreach ($resultado as $value){ ?>
			<tr class="arredondar">
				<td><?php echo $value['cpf'].'  ';?><input type="hidden" name="<?php $value['cpf']?>"></td>
				<td><?php echo $value['nome'].'  ';?></td>
				<td><?php echo $value['funcao'].'  ';?></td>
				<td>
					<div class="botao botaoEditar">
						<a href=<?php echo "../faje.php?chave=funcionario&action=editar&id=" . $value['cpf'] ?>><input type="submit" value="EDITAR"></a>
					</div>

					<div class="botao botaoDelete esconder_print" onclick="mostrar('alerta'<?php $link = "../faje.php?chave=empresa&action=delete&id=" . $value['cpf'] ;
					  /*echo "'" . "../faje.php?chave=viagem&action=delete&id=" . $value['id'] . "'"*/ ?>)" >		
					</div>
				</td>
			</tr>
		<?php };?>
		</table>
		


</body>
</html>