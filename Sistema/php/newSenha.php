<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Nova Senha</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/newSenha.css">
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('../images/img1.jpg');">
			<form class="form-horizontal form-senha" action="index.php">
				<legend class="positionElem">
					<h2>Nova Senha</h2>
				</legend>
				<hr>
				<div class="wrap-input100 validate-input m-b-10">
					<label for="txtEmailS">E-mail : </label>
					<input id="txtEmailS" name="txtEmailS" type="email" placeholder="E-mail" class="form-control input-md validacao" required="">
				</div>
				<div class="wrap-input100 validate-input m-b-10">
					<label for="txtMatriculaS">Matricula : </label>
					<input id="txtMatriculaS" name="txtMatriculaS" type="text" placeholder="Matricula" class="form-control input-md validacao" required="">
				</div>
				<div class="wrap-input100 validate-input m-b-10">
					<label for="txtSenhaS">Nova Senha : </label>
					<input id="txtSenhaS" name="txtSenhaS" type="password" placeholder="Senha" class="form-control input-md validacao" required="">
				</div>
				<div class="wrap-input100 validate-input m-b-10">
					<label for="txtConfSenhaS">Confirmação de Senha : </label>
					<input id="txtConfSenhaS" name="txtConfSenhaS" type="password" placeholder="Senha" class="form-control input-md validacao" required="">
				</div>
				<hr>
				<div class="positionElem">
					<button id="btnsalvarS" name="btnsalvarS" class="btn btn-success">Salvar</button>
				</div>
			</form>
		</div>
	</div>




	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../vendor/select2/select2.min.js"></script>
	<script src="../js/newSenha.js"></script>

</body>

</html>