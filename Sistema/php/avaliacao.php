<?php
	include "verificaLogin.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Avaliação</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="../css/avaliacao.css">
</head>

<body>

	<?php
		include "menu.php";
	?>

	<div class="container formAvaliacao">
		<form id="form_Avaliac" action="processarAvaliacao.php" method="POST">
			<legend class="positionElem">
				<h2>AVALIAÇÃO</h2>
			</legend>

			<div class="row">
				<div class="form-group col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="txtDataAval">Data Avaliação: </label>
					<input id="txtDataAval" name="txtDataAval" type="date" placeholder="Data Avaliação" class="form-control input-md" required="">
				</div>
				<div class="form-group col-md-4"></div>
			</div>

			<div class="row">
				<div class="form-group col-md-4">
					<label for="txtPressao">Pressão Arterial: </label>
					<input id="txtPressao" name="txtPressao" type="text" placeholder="Pressão" class="form-control input-md" required="">
				</div>
				<div class="form-group col-md-4">
					<label for="txtPeso">Peso: </label>
					<input id="txtPeso" name="txtPeso" type="text" placeholder="Peso" class="form-control input-md num" required="">
				</div>
				<div class="form-group col-md-4">
					<label for="txtAltura">Altura: </label>
					<input id="txtAltura" name="txtAltura" type="text" placeholder="Altura" class="form-control input-md num" required="">
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-4">
					<label for="txtPescoco">Pescoço: </label>
					<input id="txtPescoco" name="txtPescoco" type="text" placeholder="Pescoço" class="form-control input-md num" required="">
				</div>
				<div class="form-group col-md-4">
					<label for="txtBicepsD">Biceps Direito: </label>
					<input id="txtBicepsD" name="txtBicepsD" type="text" placeholder="Biceps" class="form-control input-md num" required="">
				</div>
				<div class="form-group col-md-4">
					<label for="txtBicepsE">Biceps Esquerdo: </label>
					<input id="txtBicepsE" name="txtBicepsE" type="text" placeholder="Biceps" class="form-control input-md num" required="">
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-4">
					<label for="txtPeito">Peito: </label>
					<input id="txtPeito" name="txtPeito" type="text" placeholder="Peito" class="form-control input-md num" required="">
				</div>
				<div class="form-group col-md-4">
					<label for="txtAntD">Antebraço Direito: </label>
					<input id="txtAntD" name="txtAntD" type="text" placeholder="Antebraço" class="form-control input-md num" required="">
				</div>
				<div class="form-group col-md-4">
					<label for="txtAntE">Antebraço Esquerdo: </label>
					<input id="txtAntE" name="txtAntE" type="text" placeholder="Antebraço" class="form-control input-md num" required="">
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-4">
					<label for="txtCintura">Cintura: </label>
					<input id="txtCintura" name="txtCintura" type="text" placeholder="Cintura" class="form-control input-md num" required="">
				</div>
				<div class="form-group col-md-4">
					<label for="txtCoxaD">Coxa Direito: </label>
					<input id="txtCoxaD" name="txtCoxaD" type="text" placeholder="Coxa" class="form-control input-md num" required="">
				</div>
				<div class="form-group col-md-4">
					<label for="txtCoxaE">Coxa Esquerda: </label>
					<input id="txtCoxaE" name="txtCoxaE" type="text" placeholder="Coxa" class="form-control input-md num" required="">
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-4">
					<label for="txtQuadris">Quadris: </label>
					<input id="txtQuadris" name="txtQuadris" type="text" placeholder="Quadris" class="form-control input-md num" required="">
				</div>
				<div class="form-group col-md-4">
					<label for="txtPantD">Panturrilha Direito: </label>
					<input id="txtPantD" name="txtPantD" type="text" placeholder="Panturrilha" class="form-control input-md num" required="">
				</div>
				<div class="form-group col-md-4">
					<label for="txtPantE">Panturrilha Esquerda: </label>
					<input id="txtPantE" name="txtPantE" type="text" placeholder="Panturrilha" class="form-control input-md num" required="">
				</div>
			</div>
			<hr>
			<div class="positionElem">
				<button id="btnAval" name="btnAval" class="btn btn-success">Cadastrar Avaliação</button>
			</div>

		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../js/avaliacao.js"></script>
</body>

</html>