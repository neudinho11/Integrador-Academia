<?php
session_start();
include "verificaLogin.php";
$idU = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Treino</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="../css/treino.css">
</head>

<body>

	<?php
	include "menu.php";
	?>

	<div class="container formTrein">
		<form id="form_Treino" action="processarTreino.php" method="POST">
			<legend class="positionElem">
				<h2>TREINO</h2>
			</legend>
			<div class="row">
				<div class="form-group col-md-1"><a class='btn btn-warning btn-xs' href="<?php echo "listaTreino.php?idU=$idU" ?>">Voltar</a></div>
				<div class="form-group col-md-11"></div>
			</div>

			<div class="row">
				<div class="form-group col-md-4">
					<label for="txtDataCri">Data Criação: </label>
					<input id="txtDataCri" name="txtDataCri" type="date" placeholder="Data Criação" class="form-control input-md" required="">
				</div>
				<div class="form-group col-md-4">
					<label for="txtDataVali">Data Validade: </label>
					<input id="txtDataVali" name="txtDataVali" type="date" placeholder="Data Validade" class="form-control input-md" required="">
				</div>
				<div class="form-group col-md-4">
					<label for="txtDiasTr">Dias de Treino: </label>
					<input id="txtDiasTr" name="txtDiasTr" type="text" placeholder="Dias de treino" class="form-control input-md" required="">
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-6">
					<label for="txtObj">Objetivo: </label>
					<textarea id="txtObj" name="txtObj" placeholder="Objetivo" class="form-control" required=""></textarea>
				</div>
				<div class="form-group col-md-6">
					<label for="txtObs">Observações: </label>
					<textarea id="txtObs" name="txtObs" type="text" placeholder="Observações" class="form-control" required=""></textarea>
				</div>
			</div>
			<hr>

			<div class="row" id="divBtn">
				<div class="form-group col-md-11"></div>
				<div class="form-group col-md-1">
					<p class='btn btn-primary' id="btnExerc" name="btnExerc">Exercicio</p>
				</div>
			</div>
			<input type="hidden" id="ttlExerc" name="ttlExerc" value="">

			<hr>
			<div class="positionElem">
				<button id="btnAval" name="btnAval" class="btn btn-success">Cadastrar Treino</button>
			</div>

		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../js/treino.js"></script>
</body>

</html>