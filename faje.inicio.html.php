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
			}
				$dia = New DateTime();
			?>
			<?php if (isset($mensagem)) {
				echo '<h5 class="fadeIn">'.$mensagem.'</h5>';
		} ?>
		
		<ul class="nav  nav-tabs">
		  <li class="nav-item">
		    <p class="nav-link active abasLink" onclick="abas('.segunda', 0)"><?php echo $dia->format('d-m-Y'); ?></p>
		  </li>
		  <li class="nav-item">
		    <p class="nav-link abasLink" onclick="abas('.terca', 1)"><?php echo $dia->add(new DateInterval("P1D"))->format('d-m-Y'); ?></p>
		  </li>
		  <li class="nav-item">
		    <p class="nav-link abasLink" onclick="abas('.quarta', 2)"><?php echo $dia->add(new DateInterval("P1D"))->format('d-m-Y'); ?></p>
		  </li>
		  <li class="nav-item">
		    <p class="nav-link abasLink" onclick="abas('.quinta', 3)"><?php echo $dia->add(new DateInterval("P1D"))->format('d-m-Y'); ?></p>
		  </li>
		  <li class="nav-item">
		    <p class="nav-link abasLink" onclick="abas('.sexta', 4)"><?php echo $dia->add(new DateInterval("P1D"))->format('d-m-Y'); ?></p>
		  </li>
		  <li class="nav-item">
		    <p class="nav-link abasLink" onclick="abas('.sabado', 5)"><?php echo $dia->add(new DateInterval("P1D"))->format('d-m-Y'); ?></p>
		  </li>
		  <li class="nav-item">
		    <p class="nav-link abasLink" onclick="abas('.domingo', 6)"><?php echo $dia->add(new DateInterval("P1D"))->format('d-m-Y'); ?></p>
		  </li>
		</ul>
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
		if (isset($segunda)) {
			foreach ($segunda as $value) {
				$date = new DateTime($value['data'])

		 ?>
			<tr class="inicio segunda">
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
				<td><?php echo $value['os'].'  ';?></td>
				<td><?php echo $value['faturamento'].'  ';?></td>
				<td><?php echo $value['obs'].'  ';?></td>
				<td>
					
					<div class="botao botaoEditar esconder_print">
						<a href=<?php echo "../faje.php?chave=viagem&action=editar&id=" . $value['id'] ?>><input type="submit" value="EDITAR"></a>
					</div>

					<div class="botao botaoDelete esconder_print">
						<a href=<?php echo "../faje.php?chave=viagem&action=delete&id=" . $value['id'] ?>><input type="submit" value="DELETE"></a>
					</div>					
					
				</td>
			</tr>
		<?php }
		 }?>
		<?php
		if (isset($terca)) {
			foreach ($terca as $value){
				$date = new DateTime($value['data'])

		 ?>
			<tr class="inicio terca">
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
				<td><?php echo $value['os'].'  ';?></td>
				<td><?php echo $value['faturamento'].'  ';?></td>
				<td><?php echo $value['obs'].'  ';?></td>
				<td>
					
					<div class="botao botaoEditar esconder_print">
						<a href=<?php echo "../faje.php?chave=viagem&action=editar&id=" . $value['id'] ?>><input type="submit" value="EDITAR"></a>
					</div>

					<div class="botao botaoDelete esconder_print">
						<a href=<?php echo "../faje.php?chave=viagem&action=delete&id=" . $value['id'] ?>><input type="submit" value="DELETE"></a>
					</div>					
					
				</td>
			</tr>
		<?php };}?>
		<?php
		if (isset($quarta)) {
			foreach ($quarta as $value){
				$date = new DateTime($value['data'])

		 ?>
			<tr class="inicio quarta">
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
				<td><?php echo $value['os'].'  ';?></td>
				<td><?php echo $value['faturamento'].'  ';?></td>
				<td><?php echo $value['obs'].'  ';?></td>
				<td>
					
					<div class="botao botaoEditar esconder_print">
						<a href=<?php echo "../faje.php?chave=viagem&action=editar&id=" . $value['id'] ?>><input type="submit" value="EDITAR"></a>
					</div>

					<div class="botao botaoDelete esconder_print">
						<a href=<?php echo "../faje.php?chave=viagem&action=delete&id=" . $value['id'] ?>><input type="submit" value="DELETE"></a>
					</div>					
					
				</td>
			</tr>
		<?php };}?>
		<?php

		if (isset($quinta)) {
			foreach ($quinta as $value){
				$date = new DateTime($value['data'])

		 ?>
			<tr class="inicio quinta">
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
				<td><?php echo $value['os'].'  ';?></td>
				<td><?php echo $value['faturamento'].'  ';?></td>
				<td><?php echo $value['obs'].'  ';?></td>
				<td>
					
					<div class="botao botaoEditar esconder_print">
						<a href=<?php echo "../faje.php?chave=viagem&action=editar&id=" . $value['id'] ?>><input type="submit" value="EDITAR"></a>
					</div>

					<div class="botao botaoDelete esconder_print">
						<a href=<?php echo "../faje.php?chave=viagem&action=delete&id=" . $value['id'] ?>><input type="submit" value="DELETE"></a>
					</div>					
					
				</td>
			</tr>
		<?php };}?>

		<?php
		if (isset($sexta)) {
			
			foreach ($sexta as $value){
				$date = new DateTime($value['data'])

		 ?>
			<tr class="inicio sexta">
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
				<td><?php echo $value['os'].'  ';?></td>
				<td><?php echo $value['faturamento'].'  ';?></td>
				<td><?php echo $value['obs'].'  ';?></td>
				<td>
					
					<div class="botao botaoEditar esconder_print">
						<a href=<?php echo "../faje.php?chave=viagem&action=editar&id=" . $value['id'] ?>><input type="submit" value="EDITAR"></a>
					</div>

					<div class="botao botaoDelete esconder_print">
						<a href=<?php echo "../faje.php?chave=viagem&action=delete&id=" . $value['id'] ?>><input type="submit" value="DELETE"></a>
					</div>					
					
				</td>
			</tr>
		<?php }};?>

		<?php
		if (isset($sabado)) {
			
			foreach ($sabado as $value){
				$date = new DateTime($value['data'])

		 ?>
			<tr class="inicio sabado">
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
				<td><?php echo $value['os'].'  ';?></td>
				<td><?php echo $value['faturamento'].'  ';?></td>
				<td><?php echo $value['obs'].'  ';?></td>
				<td>
					
					<div class="botao botaoEditar esconder_print">
						<a href=<?php echo "../faje.php?chave=viagem&action=editar&id=" . $value['id'] ?>><input type="submit" value="EDITAR"></a>
					</div>

					<div class="botao botaoDelete esconder_print">
						<a href=<?php echo "../faje.php?chave=viagem&action=delete&id=" . $value['id'] ?>><input type="submit" value="DELETE"></a>
					</div>					
					
				</td>
			</tr>
		<?php };}?>

		<?php
		if (isset($domingo)) {
			
			foreach ($domingo as $value){
				$date = new DateTime($value['data'])

		 ?>
			<tr class="inicio domingo">
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
				<td><?php echo $value['os'].'  ';?></td>
				<td><?php echo $value['faturamento'].'  ';?></td>
				<td><?php echo $value['obs'].'  ';?></td>
					
					<div class="botao botaoEditar esconder_print">
						<a href=<?php echo "../faje.php?chave=viagem&action=editar&id=" . $value['id'] ?>><input type="submit" value="EDITAR"></a>
					</div>

					<div class="botao botaoDelete esconder_print">
						<a href=<?php echo "../faje.php?chave=viagem&action=delete&id=" . $value['id'] ?>><input type="submit" value="DELETE"></a>
					</div>					
					
				</td>
			</tr>
		<?php }};?>
		</table>
		<div class="total">
			<p id="total">TOTAL:</p>
		</div>
		


</body>
</html>