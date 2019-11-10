<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Perfil</title>
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
	<link rel="stylesheet" type="text/css" href="../css/visualizarPerfil.css">
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('../images/img1.jpg');">
			<div class="principal">
				<legend class="positionElem">
					<h2>Perfil</h2>
				</legend>
				<hr>
				<div class="row">
					<div class="form-group col-md-6">
						<p><strong>Nome : </strong></p>
						<p id="txtNomeV" class="visualizar"></p>
					</div>
					<div class="form-group col-md-6">
						<p><strong>E-mail : </strong></p>
						<p id="txtEmailV" class="visualizar"></p>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-4">
						<p><strong>Matricula : </strong></p>
						<p id="txtMatriculaV" class="visualizar"></p>
					</div>
					<div class="form-group col-md-4">
						<p><strong>Data de Nascimento : </strong></p>
						<p id="txtDataNascV" class="visualizar"></p>
					</div>
					<div class="form-group col-md-4">
						<p><strong>Sexo : </strong></p>
						<p id="txtSexoV" class="visualizar"></p>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-6">
						<p><strong>Cargo : </strong></p>
						<p id="txtCargoV" class="visualizar"></p>
					</div>
					<div class="form-group col-md-6">
						<p><strong>Tipo de conta : </strong></p>
						<p id="txtContaV" class="visualizar"></p>
					</div>
				</div>
				<hr>
				<div class="positionElem">
					<button id="btnEditar" name="btnEditar" class="btn btn-success">Editar</button>
				</div>
			</div>
		</div>
	</div>




	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../vendor/select2/select2.min.js"></script>
	<script src="../js/visualizarPerfil.js"></script>

</body>

</html>