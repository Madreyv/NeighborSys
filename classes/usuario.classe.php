<?php

class Usuario{

	private $tabelaUsuario;

	public function __construct(Veiculo $tabelaUsuario){
		$this->tabelaUsuario = $tabelaUsuario;
	}

	public function cadastro($usuario){
		$sucesso = true;
		//$erros = [];

		if (empty($usuario['nome'])) {
			$sucesso = false;
			$erros [] = 'O nome não pode está em branco!';
		}

		if (empty($usuario['senha'])) {
			$sucesso = false;
			$erros[] = "A senha não pode está em branco!";
		}
		$contador = count($this->tabelaUsuario->validarUsuario("nome",$usuario['nome'])); 
		if ($contador > 0){
			$sucesso = false;
			$erros[] = "O usuário ja existe!";
		}

		if ($sucesso == true) {
			//$this->tabelaUsuario->inserir($usuario);
			return $contador;
		}else{
			return $erros;
		}
	}

	public function login($usuario){
		

		if (isset($_SESSION['nome_usuario'])) {
			return true;
		}else{

			$resultado = $this->tabelaUsuario->validarUsuario("nome",strtolower($usuario['nome_usuario']));
			
			if (empty($resultado)) {
				return false;
			}else{
				if (password_verify($usuario['password'], $resultado[0]['senha'])) {
					//session_start();
					$_SESSION['nome_usuario'] = $_POST['nome_usuario'];
					$_SESSION['password'] = $resultado[0]['senha'];
					$_SESSION['identificador'] = $resultado[0]['id'];
					$_SESSION['categoria'] = $resultado[0]['categoria'];
					//var_dump($_SESSION);
					return true;
				}
			}
		}
	}

	public function logado(){

		if (empty($_SESSION['nome_usuario'])) {
			return true;
		}
		$resultado = $this->tabelaUsuario->validarUsuario("nome",strtolower($_SESSION['nome_usuario']));
		var_dump($resultado);
		if (!empty($resultado) && $resultado[0]['senha'] === $_SESSION['password']) {
			return true;	
		}else {
			return false;
		}
	}

	
	
}