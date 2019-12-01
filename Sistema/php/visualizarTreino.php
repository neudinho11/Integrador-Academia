<?php
session_start();
require_once "functions.php";
$idU = $_SESSION["usuario"];
?>

<?php

$idTr = $_GET["idTr"];

$conexao = conexaoBD();
$sql = "SELECT * FROM treino WHERE id_treino = :id_treino";
$query = $conexao->prepare($sql);
$query->bindParam(":id_treino", $idTr);
$query->execute();
$treino = $query->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM trein_usua_treino WHERE id_treino = :id_treino";
$query = $conexao->prepare($sql);
$query->bindParam(":id_treino", $idTr);
$query->execute();
$tut = $query->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT parte_corpo, nome_exercicio, series, repeticoes, dia_semana FROM exercicio AS ex 
INNER JOIN treino_exercicio AS te ON ex.id_exercicio = te.id_exercicio
INNER JOIN treino AS tr ON te.id_treino = tr.id_treino
WHERE tr.id_treino = :id_treino";
$query = $conexao->prepare($sql);
$query->bindParam(":id_treino", $idTr);
$query->execute();
$exercicio = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Visualizar Treino</title>
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
			<h2>VISUALIZAR TREINO</h2>
		</legend>
		<div class="row">
			<div class="form-group col-md-1"><a class='btn btn-warning btn-xs' href="<?php echo "listaTreino.php?idU=$idU" ?>">Voltar</a></div>
			<div class="form-group col-md-11"></div>
		</div>

		<div class="row">
			<div class="form-group col-md-4">
				<p><strong>Data Criação : </strong></p>
				<p><input id="txtDataCri" name="txtDataCri" type="date" value="<?php echo $tut['data_criacao']; ?>" class="form-control input-md" readonly>
			</div>
			<div class="form-group col-md-4">
				<p><strong>Data Validade : </strong></p>
				<p><input id="txtDataV" name="txtDataVali" type="date" value="<?php echo $tut['data_validade']; ?>" class="form-control input-md" readonly></p>
			</div>
			<div class="form-group col-md-4">
				<p><strong>Dias de Treino : </strong></p>
				<p><input id="txtDiasTr" name="txtDiasTr" type="text" value="<?php echo $treino['dias_treino']; ?>" class="form-control input-md" readonly></p>
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-6">
				<p><strong>Objetivo : </strong></p>
				<p><textarea id="txtObj" name="txtObj" class="form-control" readonly><?php echo $treino['objetivo']; ?></textarea></p>
			</div>
			<div class="form-group col-md-6">
				<p><strong>Observações : </strong></p>
				<p><textarea id="txtObs" name="txtObs" type="text" class="form-control" readonly><?php echo $treino['observacoes']; ?></textarea></p>
			</div>
		</div>
		<hr>

		<legend class="positionElem">
			<h4><strong>EXERCICIOS</strong></h4>
		</legend>

		<?php
		foreach ($exercicio as $exerc) {
			echo "<hr><div class='row'><div class='form-group col-md-3'><label>Nome do exercicio: </label><input type='text' value='$exerc[nome_exercicio]' class='form-control input-md' readonly>
				</div><div class='form-group col-md-2'><label>Parte do corpo: </label><input type='text' value='$exerc[parte_corpo]' class='form-control input-md' readonly></div>
				<div class='form-group col-md-2'><label>Series: </label><input type='number' value='$exerc[series]' class='form-control input-md' readonly></div>
				<div class='form-group col-md-2'><label>Repetições: </label><input type='number' value='$exerc[repeticoes]' class='form-control input-md' readonly></div>
				<div class='form-group col-md-3'><label>Dia da semana: </label><input type='text' value='$exerc[dia_semana]' class='form-control input-md' readonly></div></div>";
		}
		?>

		<hr>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="../js/visualizarAvaliacao.js"></script>

</body>

</html>