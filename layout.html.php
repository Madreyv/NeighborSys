<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--Bootstrap-->  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<nav class="esconder_print ">
		<header>
			<h1>NeighborSys</h1>


			<div class="menu-container">
				<?php 
				if (isset($_SESSION['categoria'])) {
				?>
			    <ul class="menu">
			        <li><a href="../faje.php?chave=viagem&action=exibir_inicio">Inicio</a>
			        </li>
			        <li><a href="#">Cadastro</a>
			            <!-- Nível 1 -->
			            <!-- submenu -->
			            <ul class="sub-menu">
			                <li><a href="../faje.php?chave=veiculo&action=cadastro">VEICULO</a></li>
							<li><a href="../faje.php?chave=empresa&action=cadastro">EMPRESA</a></li>
							<li><a href="../faje.php?chave=funcionario&action=cadastro">FUNCIONÁRIO</a></li>
							<li><a href="../faje.php?chave=viagem&action=cadastro">VIAGEM</a></li>
							<?php
								if ($_SESSION['categoria'] == 'adm') {
									echo '<li><a href="../faje.php?chave=usuario&action=cadastro_usuario">USUÁRIO</a></li>';
								}
								
							?>
			            </ul><!-- submenu -->
			        </li>
			        <li><a href="#">Exibir</a>
			            <!-- Nível 1 -->
			            <!-- submenu -->
			            <ul class="sub-menu">
			                <li><a href="../faje.php?chave=veiculo&action=exibir">VEICULO</a></li>
							<li><a href="../faje.php?chave=empresa&action=exibir">EMPRESA</a></li>
							<li><a href="../faje.php?chave=funcionario&action=exibir">FUNCIONÁRIO</a></li>
							<li><a href="../faje.php?chave=viagem&action=exibir">VIAGEM</a></li>
			            </ul><!-- submenu -->
			        </li>
			        <?php
							echo '<li><a href="#">Relatórios</a>
									<ul class="sub-menu">
						                <li><a href="../faje.php?chave=viagem&action=faturado">Faturados</a></li>
										<li><a href="../faje.php?chave=viagem&action=pendente">Pendentes</a></li>
										<li><a href="../faje.php?chave=viagem&action=relatorioClientes">Clientes</a></li>
						            </ul><!-- submenu -->
						          </li>
							';
			        	}
			        ?>
			    </ul>
			</div>
			<?php 
				if (isset($_SESSION['categoria'])) {
					echo '
						<div class="sair">
							<a href="../faje.php?action=sair">SAIR<img src="img/exit.png"></a>
						</div>
					';
				}
			 ?>
		</header>
		
	</nav>

	<main>
		<?=$output?>
	</main>
	<section class="hide" id="alerta">
		<div class="fundoPreto"></div>
		<div class="quadroAlerta">
			<p>Tem certeza que deseja excluir esse registro?</p>
			<a id="linkDelete" href=<?php echo $link; ?>><input type="submit" value="SIM" class="btn btn-danger"></a>
			<a id="linkDelete" href="#" onclick="mostrar('alerta')"><input type="submit" value="NÃO" class="btn btn-primary"></a>
		</div>
	</section>
	<footer>
		
	</footer>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src='js/main.js'></script>
</body>
</html>