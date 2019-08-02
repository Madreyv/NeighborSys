<!DOCTYPE HTML>
<html>
<head>
	
	<title>Cadastro Usuário</title>
</head>
<body>
	<form action="" method="post" class="cadastro">
		<fieldset>
			<legend>Cadastro Usuário</legend>
			<label for="nome_usuario">NOME:</label>
			<input class="form-control" type="text" name="nome_usuario">
			<input class="form-control" type="hidden" name="action" value="cadastro_usuario">

			<label for="nome_empresa">SENHA:</label>
			<input class="form-control" type="password" name="password">

			<label for="nome_usuario">CATEGORIA:</label>
			<SELECT name="categoria_usuario" class="custom-select">
				<option>adm</option>
				<option>slp</option>	
			</SELECT>
			

			<button type="button" class="btn btn-primary">
				<input type="submit" value="CADASTRAR" class="btn btn-primary">
			</button>
		</fieldset>
	</form>
		
		


</body>
</html>