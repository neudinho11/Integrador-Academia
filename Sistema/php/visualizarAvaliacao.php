<?php
session_start();
require_once "functions.php";
?>

<?php

$idU = $_SESSION["usuario"];
$idA = $_GET["idA"];

$conexao = conexaoBD();
$sql = "SELECT * FROM avaliacao WHERE id_avaliacao = :id_avaliacao";
$query = $conexao->prepare($sql);
$query->bindParam(":id_avaliacao", $idA);
$query->execute();
$avaliacao = $query->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM trein_usua_aval WHERE id_avaliacao = :id_avaliacao";
$query = $conexao->prepare($sql);
$query->bindParam(":id_avaliacao", $idA);
$query->execute();
$tua = $query->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM medidas WHERE id_avaliacao = :id_avaliacao";
$query = $conexao->prepare($sql);
$query->bindParam(":id_avaliacao", $idA);
$query->execute();
$medidas = $query->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Visualizar Avaliação</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="../css/visualizarAvaliacao.css">
</head>

<body>

	<?php
	include "menu.php";
	?>

	<div class="container principal">
		<legend class="positionElem">
			<h2>VISUALIZAR AVALIAÇÃO</h2>
		</legend>
		<div class="row">
			<div class="form-group col-md-1"><a class='btn btn-warning btn-xs' href="<?php echo "listaAvaliacao.php?idU=$idU" ?>">Voltar</a></div>
			<div class="form-group col-md-11"></div>
		</div>

		<div class="row">
			<div class="form-group col-md-4"></div>
			<div class="form-group col-md-4">
				<p><strong>Data Avaliação : </strong></p>
				<p><input id="txtDataV" class="form-control input-md" type="date" value="<?php echo $tua['data_avaliacao']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4"></div>
		</div>

		<div class="row">
			<div class="form-group col-md-3">
				<p><strong>Pressão Arterial : </strong></p>
				<p><input id="txtPressaoV" class="form-control input-md" type="text" value="<?php echo $avaliacao['pressao_arterial']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-3">
				<p><strong>Peso : </strong></p>
				<p><input id="txtPesoV" class="form-control input-md" type="text" value="<?php echo $avaliacao['peso']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-3">
				<p><strong>Altura : </strong></p>
				<p><input id="txtAlturaV" class="form-control input-md" type="text" value="<?php echo $avaliacao['altura']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-3">
				<p><strong>IMC : </strong></p>
				<p><input id="txtImcV" class="form-control input-md" type="text" value="<?php echo $avaliacao['imc']; ?>" readonly></p>
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-4">
				<p><strong>Pescoço : </strong></p>
				<p><input id="txtPescocoV" class="form-control input-md" type="text" value="<?php echo $medidas['pescoco']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4">
				<p><strong>Biceps Direito : </strong></p>
				<p><input id="txtBicepsDV" class="form-control input-md" type="text" value="<?php echo $medidas['biceps_direito']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4">
				<p><strong>Biceps Esquerdo : </strong></p>
				<p><input id="txtBicepsEV" class="form-control input-md" type="text" value="<?php echo $medidas['biceps_esquerdo']; ?>" readonly></p>
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-4">
				<p><strong>Peito : </strong></p>
				<p><input id="txtPeitoV" class="form-control input-md" type="text" value="<?php echo $medidas['peito']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4">
				<p><strong>Antebraço Direito : </strong></p>
				<p><input id="txtAntDV" class="form-control input-md" type="text" value="<?php echo $medidas['antebraco_direito']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4">
				<p><strong>Antebraço Esquerdo : </strong></p>
				<p><input id="txtAntEV" class="form-control input-md" type="text" value="<?php echo $medidas['antebraco_esquerdo']; ?>" readonly></p>
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-4">
				<p><strong>Cintura : </strong></p>
				<p><input id="txtCinturaV" class="form-control input-md" type="text" value="<?php echo $medidas['cintura']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4">
				<p><strong>Coxa Direito : </strong></p>
				<p><input id="txtCoxaDV" class="form-control input-md" type="text" value="<?php echo $medidas['coxa_direita']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4">
				<p><strong>Coxa Esquerda : </strong></p>
				<p><input id="txtCoxaEV" class="form-control input-md" type="text" value="<?php echo $medidas['coxa_direita']; ?>" readonly></p>
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-4">
				<p><strong>Quadris : </strong></p>
				<p><input id="txtQuadrisV" class="form-control input-md" type="text" value="<?php echo $medidas['quadris']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4">
				<p><strong>Panturrilha Direito : </strong></p>
				<p><input id="txtPantDV" class="form-control input-md" type="text" value="<?php echo $medidas['Panturrilha_direita']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4">
				<p><strong>Panturrilha Esquerda : </strong></p>
				<p><input id="txtPantEV" class="form-control input-md" type="text" value="<?php echo $medidas['Panturrilha_esquerda']; ?>" readonly></p>
			</div>
		</div>
		<hr>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="../js/visualizarAvaliacao.js"></script>

</body>

</html>