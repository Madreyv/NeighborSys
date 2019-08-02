<!DOCTYPE HTML>
<html>
<head>
	
	<title>Sistema de Controle</title>
</head>
<body>
	
		<table class="tabela">
			<tr>
				<th></th>
				<th>CNPJ</th>
				<th>NOME</th>
				<th></th>
			</tr>
		<?php
		foreach ($resultado as $value){ ?>
			<tr class="arredondar">
				<td><input type="hidden" name="<?php $value['cnpj']?>"></td>
				<td><?php echo $value['cnpj'].'  ';?></td>
				<td><?php echo $value['nome_empresa'].'  ';?></td>
				<td>
					<div class="botao botaoEditar">
						<a href=<?php echo "../faje.php?chave=empresa&action=editar&id=" . $value['cnpj'] ?>><input type="submit" value="EDITAR"></a>
					</div>

					<div class="botao botaoDelete esconder_print" onclick="mostrar('alerta'<?php $link = "../faje.php?chave=empresa&action=delete&id=" . $value['cnpj'] ;
					  /*echo "'" . "../faje.php?chave=viagem&action=delete&id=" . $value['id'] . "'"*/ ?>)" >		
					</div>
				</td>
			</tr>
		<?php };?>
		</table>
		


</body>
</html>