<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Avaliação</title>
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
	<link rel="stylesheet" type="text/css" href="../css/avaliacao.css">
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('../images/img1.jpg');">
			<form class="form-horizontal form-avaliacao" action="index.php">
				<legend class="positionElem">
					<h2 >Avaliação</h2>
				</legend>
				<hr>
				<div class="row">
					<div class="form-group col-md-4">
						<label for="txtPressao">Pressão Arterial: </label>
						<input id="txtPressao" name="txtPressao" type="text" placeholder="Pressão" class="form-control input-md" required="">
					</div>
					<div class="form-group col-md-4">
						<label for="txtPeso">Peso: </label>
						<input id="txtPeso" name="txtPeso" type="text" placeholder="Peso" class="form-control input-md" required="">
					</div>
					<div class="form-group col-md-4">
						<label for="txtAltura">Altura: </label>
						<input id="txtAltura" name="txtAltura" type="text" placeholder="Altura" class="form-control input-md" required="">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-4">
						<label for="txtPescoco">Pescoço: </label>
						<input id="txtPescoco" name="txtPescoco" type="text" placeholder="Pescoço" class="form-control input-md" required="">
					</div>
					<div class="form-group col-md-4">
						<label for="txtBicepsD">Biceps Direito: </label>
						<input id="txtBicepsD" name="txtBicepsD" type="text" placeholder="Biceps" class="form-control input-md" required="">
					</div>
					<div class="form-group col-md-4">
						<label for="txtBicepsE">Biceps Esquerdo: </label>
						<input id="txtBicepsE" name="txtBicepsE" type="text" placeholder="Biceps" class="form-control input-md" required="">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-4">
						<label for="txtPeito">Peito: </label>
						<input id="txtPeito" name="txtPeito" type="text" placeholder="Peito" class="form-control input-md" required="">
					</div>
					<div class="form-group col-md-4">
						<label for="txtAntD">Antebraço Direito: </label>
						<input id="txtAntD" name="txtAntD" type="text" placeholder="Antebraço" class="form-control input-md" required="">
					</div>
					<div class="form-group col-md-4">
						<label for="txtAntE">Antebraço Esquerdo: </label>
						<input id="txtAntE" name="txtAntE" type="text" placeholder="Antebraço" class="form-control input-md" required="">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-4">
						<label for="txtCintura">Cintura: </label>
						<input id="txtCintura" name="txtCintura" type="text" placeholder="Cintura" class="form-control input-md" required="">
					</div>
					<div class="form-group col-md-4">
						<label for="txtCoxaD">Coxa Direito: </label>
						<input id="txtCoxaD" name="txtCoxaD" type="text" placeholder="Coxa" class="form-control input-md" required="">
					</div>
					<div class="form-group col-md-4">
						<label for="txtCoxaE">Coxa Esquerda: </label>
						<input id="txtCoxaE" name="txtCoxaE" type="text" placeholder="Coxa" class="form-control input-md" required="">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-4">
						<label for="txtQuadris">Quadris: </label>
						<input id="txtQuadris" name="txtQuadris" type="text" placeholder="Quadris" class="form-control input-md" required="">
					</div>
					<div class="form-group col-md-4">
						<label for="txtPantD">Panturrilha Direito: </label>
						<input id="txtPantD" name="txtPantD" type="text" placeholder="Panturrilha" class="form-control input-md" required="">
					</div>
					<div class="form-group col-md-4">
						<label for="txtPantE">Panturrilha Esquerda: </label>
						<input id="txtPantE" name="txtPantE" type="text" placeholder="Panturrilha" class="form-control input-md" required="">
					</div>
				</div>
				<div class="positionElem">
					<button id="btnAval" name="btnAval" class="btn btn-success">Cadastrar Avaliação</button>
				</div>
				
			</form>
		</div>
	</div>




	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../vendor/select2/select2.min.js"></script>
	<script src="../js/cadastro.js"></script>

</body>

</html>