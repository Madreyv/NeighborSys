<?php

/**
 * Classe para veiculos
 */
class Veiculo{

	public $tabela;
	public $primaryKey;
	public $conexao;
	//pag 328

	public function __construct(PDO $conexao,$table, $primaryKey){
		$this->conexao = $conexao;
		$this->tabela = $table;
		$this->primaryKey = $primaryKey;
		}
	// 
 
	public function query($sql){
		$query = $this->conexao->prepare($sql);
		$query->execute($query);
		return $query;
	}
 
	public function listar(){
		$sql = 'SELECT * FROM ' . $this->tabela;
		$resultado = $this->conexao->query($sql);
		return $resultado->fetchAll();
	}

	public function inserir($veiculo){
		$sql = 'INSERT INTO `' . $this->tabela . '` (';

		foreach ($veiculo as $key => $value) {
			$sql .= '`' . $key . '`,';
		}

		$sql = rtrim($sql, ',');

		$sql .= ') VALUES (';

		foreach ($veiculo as $key) {
			$sql .= "'" . $key . "',";
		}
		$sql = rtrim($sql, ',');
		$sql .= ')';
		//echo $sql;
		$this->conexao->query($sql);
	}

	public function editar($veiculo, $id){
		if ($_SESSION['categoria'] == 'adm') {
			$sql = 'UPDATE `' . $this->tabela . '` SET ';

		foreach($veiculo as $key => $value){
			$sql .= '`' . $key . '` = "' . $value . '",';
		}

		$sql = rtrim($sql, ',');
		$sql .= ' WHERE `' . $this->primaryKey . '` = "' . $id .'"';
		$this->conexao->query($sql);
		}else{
			return "Você não poder realizar essa ação!";
		}	
	}

	public function excluir($id){
		if ($_SESSION['categoria'] == 'adm') {
			$sql = 'DELETE FROM `' . $this->tabela . '` WHERE `' . $this->primaryKey . '` = "' . $id . '"';
			//$this->conexao->query($sql);
			return"Operação Realizada";
		}else{
			return "Você não poder realizar essa ação!";
		} 
	}

	public function pesquisa($id){
		$sql = 'SELECT * FROM `' . $this->tabela . '` WHERE ' . $this->primaryKey . ' = "' . $id . '"';
		//echo $sql;
		$resultado = $this->conexao->query($sql);
		return $resultado->fetchAll();
	}

	public function data($data){
		$sql = 'SELECT * FROM `' . $this->tabela . '` WHERE `data` = "' . $data . '" ORDER BY `data`';
		$resultado = $this->conexao->query($sql);
		return $resultado->fetchAll();
	}

	public function validarUsuario($coluna,$valor){
		$sql = 'SELECT * FROM `' . $this->tabela . '` WHERE `' . $coluna . '` = "' . $valor . '"';
		$resultado = $this->conexao->query($sql);
		return $resultado->fetchAll();
	}

	public function relatorio($acao,$campo,$argumentos){
		$sql = 'SELECT * FROM ' . $this->tabela . ' WHERE `'. $campo .'` = "' . $acao . '"ORDER BY data';
		
		if ($acao == 'relatorioClientes') {
			$sql = 'SELECT * FROM ' . $this->tabela . ' WHERE `'. $campo .'` BETWEEN "' . $argumentos['data_inicial'] . '" AND "' . $argumentos['data_final'] . '" AND `empresa` = "' . $argumentos['empresa'] . '" ORDER BY ' . $campo;
		}
		$resultado = $this->conexao->query($sql);
		return $resultado->fetchAll();
	}

	public function inicio($hoje,$data){
		$sql = 'SELECT * FROM `' . $this->tabela . '` WHERE `data` >= "' . $hoje . '" AND `data` <="' .$data. '" ORDER BY `data`';
		$resultado = $this->conexao->query($sql);
		return $resultado->fetchAll();
		
	}


}
//ver pagina 343;