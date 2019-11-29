<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Nova Senha</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="../css/newSenha.css">
</head>

<body>
	<div class="container formSenha">
		<form id="form_senha" action="" method="POST">
			<legend class="positionElem">
				<h2>NOVA SENHA</h2>
			</legend>
			<div class="row">
				<div class="form-group col-md-2"></div>
				<div class="form-group col-md-8">
					<label for="txtEmailS">E-mail : </label>
					<input id="txtEmailS" name="txtEmailS" type="email" placeholder="E-mail" class="form-control input-md validacao" required="">
				</div>
				<div class="form-group col-md-2"></div>
			</div>

			<div class="row">
				<div class="form-group col-md-2"></div>
				<div class="form-group col-md-8">
					<label for="txtMatriculaS">Matricula : </label>
					<input id="txtMatriculaS" name="txtMatriculaS" type="text" placeholder="Matricula" class="form-control input-md validacao" required="">
				</div>
				<div class="form-group col-md-2"></div>
			</div>

			<hr>
			<div class="positionElem">
				<button id="btnsalvarS" name="btnsalvarS" class="btn btn-success">Enviar</button>
			</div>
		</form>
		<div class="row">
			<div class="form-group col-md-1"><a class='btn btn-warning' href="index.php">Voltar</a></div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="../js/newSenha.js"></script>

</body>

</html>