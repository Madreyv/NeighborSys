<?php
include __DIR__ . '/../includes/faje.databaseConection.php';
include __DIR__ . '/../classes/veiculo.classe.php';
include __DIR__ . '/../classes/usuario.classe.php';



try {
	$tabelaUsuario = new Veiculo($conexao,'usuarios','id');
	$usuario = new Usuario($tabelaUsuario);
	if (!isset($_SESSION)) {
		session_start();
	}
	if (isset($_SESSION['nome_usuario'])) {
		if (empty($_GET) && empty($_POST)) {
			$tabela = new Veiculo($conexao,'programacao','id');
			$resultado = $tabela->listar();
			ob_start();

			include __DIR__ . '/../templates/faje.Viagem.html.php';
		}

		if (isset($_GET['action']) && $_GET['action'] == 'sair') {
				session_destroy();
				unset($_GET);
				unset($_POST);
				Header('Location: '.$_SERVER['PHP_SELF']);
				ob_start();
				//include __DIR__ . '/../templates/faje.login.html.php';
		}elseif (!empty($_GET)) {
			if ($_GET['chave'] == 'veiculo') {

				$tabela = new Veiculo($conexao, 'veiculo','placa');
				if (isset($_POST['id'])) {
					$objeto = array('tipo' => $_POST['tipoVeiculo'], 'modelo' => $_POST['modeloVeiculo'] );
					//$tabela->editar($objeto,$_POST['id'] );
				}else{
					if (isset($_POST['placaVeiculo']) && $_POST['placaVeiculo'] != null) {
					$objeto = array('placa' => $_POST['placaVeiculo'] , 'tipo' => $_POST['tipoVeiculo'], 'modelo' => $_POST['modeloVeiculo'] );
					}	
				}
				
				$include = 'Veiculo';

			}elseif ($_GET['chave'] == 'viagem') {

				$tabela = new Veiculo($conexao,'programacao','id');
				if (isset($_POST['id'])) {
					$date = new DateTime($_POST['data_alteracao']);
					$objeto = array('hora' => $_POST['hora'] , 'empresa' => $_POST['empresa'],'equipamento' => $_POST['equipamento'] , 'origem' => $_POST['origem'],'destino' => $_POST['destino'] , 'placa' => $_POST['placa'],'placa_aco' => $_POST['placa_aco'],'obs' => $_POST['obs'],'motorista' => $_POST['motorista'] , 'os' => $_POST['os'],'faturamento' => $_POST['faturamento'],'solicitacao_transportes' => $_POST['solicitacao_transportes'] , 'data_alteracao' => $date->format('Y-m-d'));
				}else{
					if (isset($_POST['data_criacao']) && $_POST['data_criacao'] != null) {
					$date = new DateTime($_POST['data_criacao']);
					
					$objeto = array('data' => $_POST['data'],'hora' => $_POST['hora'] , 'empresa' => $_POST['empresa'],'equipamento' => $_POST['equipamento'] , 'origem' => $_POST['origem'],'destino' => $_POST['destino'] , 'placa' => $_POST['placa'], 'placa_aco' => $_POST['placa_aco'],'obs' => $_POST['obs'], 'motorista' => $_POST['motorista'] , 'os' => $_POST['os'], 'faturamento' => $_POST['faturamento'],'solicitacao_transportes' => $_POST['solicitacao_transportes'],'data_criacao' => $date->format('Y-m-d'));
					}
				}
				$include = 'Viagem';

			}elseif ($_GET['chave'] == 'funcionario') {

				$tabela = new Veiculo($conexao,'funcionario','cpf');
				if (isset($_POST['id'])) {
					$objeto = array('nome' => $_POST['nome'],'funcao' => $_POST['funcao']);

				} else {
					if (isset($_POST['cpf']) && $_POST['cpf'] != null){
						$objeto = array('cpf' => $_POST['cpf'] , 'nome' => $_POST['nome'],'funcao' => $_POST['funcao']);	
					}
				}
				
				
				$include = 'Funcionario';
			}elseif ($_GET['chave'] == 'empresa') {

				$tabela = new Veiculo($conexao,'clientes','cnpj');
				if (isset($_POST['id'])) {

					$objeto = array('nome_empresa' => $_POST['nome_empresa']);

				} else {
					if (isset($_POST['cnpj']) && $_POST['cnpj'] != null) {
						$objeto = array('cnpj' => $_POST['cnpj'] , 'nome_empresa' => $_POST['nome_empresa']);
					}
				}
				
				

				$include = 'Empresa';
			}elseif ($_GET['chave'] == 'usuario') {
				if (isset($_POST['nome_usuario'])) {

					if ($_POST['action'] == 'cadastro_usuario') {
						$objeto = array('nome' => strtolower($_POST['nome_usuario']),'senha' =>  password_hash($_POST['password'],PASSWORD_DEFAULT), 'categoria' =>  $_POST['categoria_usuario']);
						//$resultado = $usuario->cadastro($usuarios);

					}
				}
				$include = 'Usuario';
			}else{
				echo "Cheve não Encontrada!";
			}
		}
		

		if (isset($_POST['id'])) {

			$tabela->editar($objeto,$_POST['id'] );
		}
		
		if (isset($_GET['action'])) {
			$acao = $_GET['action'];
			
			if ($acao == 'inserir') {
				$tabela->inserir($objeto);
				$resultado = $tabela->listar();
				ob_start();

				include __DIR__ . '/../templates/faje.' . $include . '.html.php';
			}

			if ($acao == 'exibir') {
				$resultado = $tabela->listar();
				ob_start();

				include __DIR__ . '/../templates/faje.'.$include.'.html.php';

			}

			if ($acao == 'editar') {

				if ($include == 'Viagem') {
					$tabelaVeiculo = new Veiculo($conexao, 'veiculo', 'placa');
					$tabelaEmpresa = new Veiculo($conexao, 'clientes', 'cnpj');
					$tabelaMotorista = new Veiculo($conexao, 'funcionario', 'cpf');
					$veiculos = $tabelaVeiculo->listar();
					$empresas = $tabelaEmpresa->listar();
					$motorista = $tabelaMotorista->listar();
				}
				$resultado = $tabela->pesquisa($_GET['id']);
				ob_start();

				include __DIR__ . '/../templates/faje.Edit'.$include.'.html.php';
			}

			if ($acao == 'cadastro') {

				if ($include == 'Viagem') {
					$tabelaVeiculo = new Veiculo($conexao, 'veiculo', 'placa');
					$tabelaEmpresa = new Veiculo($conexao, 'clientes', 'cnpj');
					$tabelaMotorista = new Veiculo($conexao, 'funcionario', 'cpf');
					$veiculos = $tabelaVeiculo->listar();
					$empresas = $tabelaEmpresa->listar();
					$motorista = $tabelaMotorista->listar();
				}
				ob_start();

				include __DIR__ . '/../templates/faje.cad'.$include.'.html.php';
			}

			if ($acao == 'delete') {
				$mensagem = $tabela->excluir($_GET['id']);
				$resultado = $tabela->listar();
				ob_start();
				include __DIR__ . '/../templates/faje.'.$include.'.html.php';
				
			}

			if ($acao == 'faturado' || $acao == 'pendente') {
				$resultado = $tabela->relatorio($acao, 'faturamento', $_GET);
				$titulo_relatorio = "VIAGENS " . strtoupper($acao);
				ob_start();
				include __DIR__ . '/../templates/faje.'.$include.'.html.php';
			}

			if ($acao == 'relatorioClientes') {
				if (isset($_POST['data_inicial'])) {
					$resultado = $tabela->relatorio('relatorioClientes','data',$_POST);
				}
				$tabelaEmpresas = new Veiculo($conexao,'clientes','cnpj');
				$empresas = $tabelaEmpresas->listar();
				ob_start();
				include __DIR__ . '/../templates/faje.relatorio.html.php';
			}

			if ($acao == 'cadastro_usuario') {

				if (isset($_POST['action']) && $_POST['action'] == 'cadastro_usuario') {
						$resultado = $usuario->cadastro($objeto);
						ob_start();
						if (!is_array($resultado)) {
							echo "<h3> CADASTRO REALIZADO COM SUCESSO<h3>";
						}else{
							foreach ($resultado as $key => $value) {
								echo $value . "</br>";
							}
							
						}
						
					}else{
						ob_start();

						include __DIR__ . '/../templates/faje.cad'.$include.'.html.php';
					}
			}

			if ($acao == 'filtro_data') {
				$resultado = $tabela->data($_POST['data_filtro']);
				ob_start();

				include __DIR__ . '/../templates/faje.'.$include.'.html.php';

			}

			if ($acao == 'exibir_inicio') {
				$date = New DateTime();
				$date2 = New DateTime();
				$hoje = $date->format('Y-m-d');
				$proxima = $date->add(new DateInterval("P6D"))->format('Y-m-d');
				//echo $proxima->format('Y-m-d');
				$resultado = $tabela->inicio($hoje,$proxima);
				//var_dump($resultado);
				//echo $resultado[0]["data"]

				for ($i=0; $i < 7 ; $i++) { 
					$dia[$i] = $date2->format('Y-m-d');
					$date2->add(new DateInterval("P1D"));
					//echo $dia[$i] . "</br>";
				}
				//echo $date2->add(new DateInterval("M1D"))->format('Y-m-d');
				//var_dump($dia);
				//echo count($resultado);
				for ($i=0; $i<count($resultado) ; $i++) { 
					//echo "resultado: " . $resultado[$i]["data"] .  "</br>";
					if ($resultado[$i]["data"] == $dia[0]) {
						//echo "dia 1 " . $dia[0] . "</br>";
						$segunda[$i] = $resultado[$i];
					}elseif ($resultado[$i]["data"] == $dia[1]) {
						//echo "dia 2 " . $dia[1] ."</br>";
						$terca[$i] = $resultado[$i];
					}elseif ($resultado[$i]["data"] == $dia[2]) {
						$quarta[$i] = $resultado[$i];
					}elseif ($resultado[$i]["data"] == $dia[3]) {
						$quinta[$i] = $resultado[$i];
					}elseif ($resultado[$i]["data"] == $dia[4]) {
						$sexta[$i] = $resultado[$i];
					}elseif ($resultado[$i]["data"] == $dia[5]) {
						$sabado[$i] = $resultado[$i];
					}elseif ($resultado[$i]["data"] == $dia[6]) {
						$domingo[$i] = $resultado[$i];
					}else{
						
					}
					
				}
				
				ob_start();
				include __DIR__ . '/../templates/faje.inicio.html.php';
			}
		}
		
	}elseif (isset($_POST['nome_usuario'])) {
		//var_dump($_POST);

		if ($_POST['action'] == 'login') {
			$usuarios = array('nome' => strtolower($_POST['nome_usuario']),'senha' =>  password_hash($_POST['password'],PASSWORD_DEFAULT));
			$resultado = $usuario->login($_POST);
			
			if ($resultado) {
				ob_start();
				header("Refresh: 0");
			}else{
				ob_start();
				echo "Usuário ou senha não cadastrados!";
				include __DIR__ . '/../templates/faje.login.html.php';

			}

			
		}
			
	}else{
		ob_start();
		include __DIR__ . '/../templates/faje.login.html.php';
	}
	
	$output = ob_get_clean();
	
} catch (PDOException $e) {

	$output = 'Database error: ' . $e->getMessage() . ' in' . $e->getFile() . ':' . $e->getLine();
}

include __DIR__ . '/../templates/layout.html.php';
