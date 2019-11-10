<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Visualizar Avaliação</title>
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
	<link rel="stylesheet" type="text/css" href="../css/visualizarAvaliacao.css">
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('../images/img1.jpg');">
			<div class="principal">
				<legend class="positionElem">
					<h2>Visualizar Avaliação</h2>
				</legend>
				<hr>
				<div class="row">
					<div class="form-group col-md-4">
						<p><strong>Pressão Arterial : </strong></p>
						<p id="txtPressaoV" class="visualizar"></p>
					</div>
					<div class="form-group col-md-4">
						<p><strong>Peso : </strong></p>
						<p id="txtPesoV" class="visualizar"></p>
					</div>
					<div class="form-group col-md-4">
						<p><strong>Altura : </strong></p>
						<p id="txtAlturaV" class="visualizar"></p>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-4">
						<p><strong>Pescoço : </strong></p>
						<p id="txtPescocoV" class="visualizar"></p>
					</div>
					<div class="form-group col-md-4">
						<p><strong>Biceps Direito : </strong></p>
						<p id="txtBicepsDV" class="visualizar"></p>
					</div>
					<div class="form-group col-md-4">
						<p><strong>Biceps Esquerdo : </strong></p>
						<p id="txtBicepsEV" class="visualizar"></p>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-4">
						<p><strong>Peito : </strong></p>
						<p id="txtPeitoV" class="visualizar"></p>
					</div>
					<div class="form-group col-md-4">
						<p><strong>Antebraço Direito : </strong></p>
						<p id="txtAntDV" class="visualizar"></p>
					</div>
					<div class="form-group col-md-4">
						<p><strong>Antebraço Esquerdo : </strong></p>
						<p id="txtAntEV" class="visualizar"></p>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-4">
						<p><strong>Cintura : </strong></p>
						<p id="txtCinturaV" class="visualizar"></p>
					</div>
					<div class="form-group col-md-4">
						<p><strong>Coxa Direito : </strong></p>
						<p id="txtCoxaDV" class="visualizar"></p>
					</div>
					<div class="form-group col-md-4">
						<p><strong>Coxa Esquerda : </strong></p>
						<p id="txtCoxaEV" class="visualizar"></p>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-4">
						<p><strong>Quadris : </strong></p>
						<p id="txtQuadrisV" class="visualizar"></p>
					</div>
					<div class="form-group col-md-4">
						<p><strong>Panturrilha Direito : </strong></p>
						<p id="txtPantDV" class="visualizar"></p>
					</div>
					<div class="form-group col-md-4">
						<p><strong>Panturrilha Esquerda : </strong></p>
						<p id="txtPantEV" class="visualizar"></p>
					</div>
				</div>
				<hr>
				<div class="positionElem">
					<button id="btnEditarA" name="btnEditarA" class="btn btn-success">Editar</button>
				</div>

			</div>
		</div>
	</div>




	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../vendor/select2/select2.min.js"></script>
	<script src="../js/visualizarAvaliacao.js"></script>

</body>

</html>