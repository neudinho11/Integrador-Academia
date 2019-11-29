<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Cadastro</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="../css/cadastro.css">
</head>

<body>

	<div class="container formCadastro">

		<form id="form_cadastro" action="processarCad.php" method="POST">
			<legend class="positionElem">
				<h2>CADASTRO</h2>
			</legend>
			<div class="row">
				<div class="form-group col-md-6">
					<label for="txtNome">Nome Completo : </label>
					<input id="txtNome" name="txtNome" type="text" placeholder="Nome" class="form-control" required="">
					<div id="vNome" class="noErro"></div>
				</div>
				<div class="form-group col-md-6">
					<label for="txtEmail">E-mail : </label>
					<input id="txtEmail" name="txtEmail" type="email" placeholder="E-mail" class="form-control" required="">
					<div id="vEmail" class="noErro"></div>
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-4">
					<label for="txtMatricula">Matricula : </label>
					<input id="txtMatricula" name="txtMatricula" type="text" placeholder="Matricula" class="form-control" required="">
					<div id="vMat" class="noErro"></div>
				</div>
				<div class="form-group col-md-4">
					<label for="txtSenha">Senha : </label>
					<input id="txtSenha" name="txtSenha" type="password" placeholder="Senha" class="form-control" required="">
					<div id="vSenha" class="noErro"></div>
				</div>
				<div class="form-group col-md-4">
					<label for="txtSenhaConf">Confirme Senha : </label>
					<input id="txtSenhaConf" name="txtSenhaConf" type="password" placeholder="Senha" class="form-control" required="">
					<div id="vSenha2" class="noErro"></div>
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-4">
					<label for="txtDataNasc">Data de Nascimento : </label>
					<input id="txtDataNasc" name="txtDataNasc" type="date" placeholder="Data de Nascimento" class="form-control" required="">
				</div>
				<div class="form-group col-md-4">
					<label>Sexo : </label><br>
					<div class="radio">
						<label>
							<input class="rad" type="radio" name="radSexo" value="M" required> Masculino
						</label>
						<label>
							<input class="rad" type="radio" name="radSexo" value="F" required> Feminino
						</label>
					</div>
				</div>
				<div class="form-group col-md-4">
					<label>Tipo de conta : </label>
					<div class="radio">
						<label>
							<input class="rad" type="radio" name="radTipoConta" value="usuario"> Usuário
						</label>
						<label>
							<input class="rad" type="radio" name="radTipoConta" value="treinador"> Treinador
						</label>
					</div>
				</div>
			</div>

			<hr>
			<div class="positionElem">
				<button id="btnsalvar" name="btnsalvar" class="btn btn-success">Salvar</button>
			</div>
		</form>
		<div class="row">
			<div class="form-group col-md-1"><a class='btn btn-warning' href="index.php">Voltar</a></div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../js/cadastro.js"></script>
</body>

</html>