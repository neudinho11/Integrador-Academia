<?php
require_once "functions.php";
?>

<?php

$idU = $_GET["idU"];
$_SESSION["usuario"] = $idU;

$conexao = conexaoBD();
$sql = "SELECT * FROM anamnese WHERE id_usuario = :id_usuario";
$query = $conexao->prepare($sql);
$query->bindParam(":id_usuario", $idU);
$query->execute();
$anamnese = $query->fetch(PDO::FETCH_ASSOC);

function valid($val)
{
	if ($val == "Sim")
		return true;
	else
		return false;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Visualizar Anamnese</title>
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
			<h2>VISUALIZAR ANAMNESE</h2>
		</legend>
		<div class="row">
			<div class="form-group col-md-1"><a class='btn btn-warning btn-xs' href="<?php echo "listaAvaliacao.php?idU=$idU" ?>">Voltar</a></div>
			<div class="form-group col-md-11"></div>
		</div>

		<div class="row">
			<div class="form-group col-md-4"></div>
			<div class="form-group col-md-4">
				<p><strong>Objetivos com relação a atividades física na academia: </strong></p>
				<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['objetivo']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4"></div>
		</div>

		<div class="row">
			<div class="form-group col-md-4"></div>
			<div class="form-group col-md-4">
				<p><strong>Prática alguma outra atividade física regularmente? </strong></p>
				<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['pratica_atv_fis']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4"></div>
		</div>

		<?php if (valid($anamnese['pratica_atv_fis'])) { ?>
			<div class="row">
				<div class="form-group col-md-4"></div>
				<div class="form-group col-md-4">
					<p><strong>Qual(ais)? : </strong></p>
					<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['quais_atv_fis']; ?>" readonly></p>
				</div>
				<div class="form-group col-md-4"></div>
			</div>

			<div class="row">
				<div class="form-group col-md-4"></div>
				<div class="form-group col-md-4">
					<p><strong>Qual é a frequência semanal? </strong></p>
					<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['frequencia_smnl_atv_fis']; ?>" readonly></p>
				</div>
				<div class="form-group col-md-4"></div>
			</div>
		<?php } ?>

		<div class="row">
			<div class="form-group col-md-4"></div>
			<div class="form-group col-md-4">
				<p><strong>Possui alguma restrição a prática de atividade física? </strong></p>
				<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['retricoes']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4"></div>
		</div>

		<?php if (valid($anamnese['retricoes'])) { ?>
			<div class="row">
				<div class="form-group col-md-4"></div>
				<div class="form-group col-md-4">
					<p><strong>Qual? </strong></p>
					<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['espec_retricoes']; ?>" readonly></p>
				</div>
				<div class="form-group col-md-4"></div>
			</div>
		<?php } ?>

		<div class="row">
			<div class="form-group col-md-4"></div>
			<div class="form-group col-md-4">
				<p><strong>Foi submetido a algum tipo de cirurgia?</strong></p>
				<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['cirurgia']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4"></div>
		</div>

		<?php if (valid($anamnese['cirurgia'])) { ?>
			<div class="row">
				<div class="form-group col-md-4"></div>
				<div class="form-group col-md-4">
					<p><strong>Especifique? </strong></p>
					<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['espec_cirurgia']; ?>" readonly></p>
				</div>
				<div class="form-group col-md-4"></div>
			</div>
		<?php } ?>

		<div class="row">
			<div class="form-group col-md-4"></div>
			<div class="form-group col-md-4">
				<p><strong>Possui algum tipo de alergia?</strong></p>
				<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['alergia']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4"></div>
		</div>

		<?php if (valid($anamnese['alergia'])) { ?>
			<div class="row">
				<div class="form-group col-md-4"></div>
				<div class="form-group col-md-4">
					<p><strong>Especifique? </strong></p>
					<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['espec_alergia']; ?>" readonly></p>
				</div>
				<div class="form-group col-md-4"></div>
			</div>
		<?php } ?>

		<div class="row">
			<div class="form-group col-md-4"></div>
			<div class="form-group col-md-4">
				<p><strong>Sofreu algum tipo de acidente ou lesão osteomuscular?</strong></p>
				<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['problema_osteomuscular']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4"></div>
		</div>

		<?php if (valid($anamnese['problema_osteomuscular'])) { ?>
			<div class="row">
				<div class="form-group col-md-4"></div>
				<div class="form-group col-md-4">
					<p><strong>Especifique? </strong></p>
					<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['espec_osteomuscular']; ?>" readonly></p>
				</div>
				<div class="form-group col-md-4"></div>
			</div>
		<?php } ?>

		<div class="row">
			<div class="form-group col-md-4"></div>
			<div class="form-group col-md-4">
				<p><strong>Existe na família histórico de cardiopatia?</strong></p>
				<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['cardiopatia']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4"></div>
		</div>

		<?php if (valid($anamnese['cardiopatia'])) { ?>
			<div class="row">
				<div class="form-group col-md-4"></div>
				<div class="form-group col-md-4">
					<p><strong>Especifique? </strong></p>
					<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['espec_cardiopatia']; ?>" readonly></p>
				</div>
				<div class="form-group col-md-4"></div>
			</div>
		<?php } ?>

		<div class="row">
			<div class="form-group col-md-4"></div>
			<div class="form-group col-md-4">
				<p><strong>Utiliza regularmente algum tipo de medicamento?</strong></p>
				<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['medicamento']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4"></div>
		</div>

		<?php if (valid($anamnese['medicamento'])) { ?>
			<div class="row">
				<div class="form-group col-md-4"></div>
				<div class="form-group col-md-4">
					<p><strong>Especifique? </strong></p>
					<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['espec_medicamento']; ?>" readonly></p>
				</div>
				<div class="form-group col-md-4"></div>
			</div>
		<?php } ?>

		<div class="row">
			<div class="form-group col-md-4"></div>
			<div class="form-group col-md-4">
				<p><strong>Utiliza regularmente algum tipo de suplemento?</strong></p>
				<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['suplemento']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4"></div>
		</div>

		<?php if (valid($anamnese['suplemento'])) { ?>
			<div class="row">
				<div class="form-group col-md-4"></div>
				<div class="form-group col-md-4">
					<p><strong>Especifique? </strong></p>
					<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['espec_suplemento']; ?>" readonly></p>
				</div>
				<div class="form-group col-md-4"></div>
			</div>
		<?php } ?>

		<div class="row">
			<div class="form-group col-md-4"></div>
			<div class="form-group col-md-4">
				<p><strong>Tem ou teve o hábito de fumar?</strong></p>
				<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['fumar']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4"></div>
		</div>

		<div class="row">
			<div class="form-group col-md-4"></div>
			<div class="form-group col-md-4">
				<p><strong>É diabético?</strong></p>
				<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['diabetico']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4"></div>
		</div>

		<div class="row">
			<div class="form-group col-md-4"></div>
			<div class="form-group col-md-4">
				<p><strong>Possui diabéticos na família?</strong></p>
				<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['diabetico_familia']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4"></div>
		</div>

		<div class="row">
			<div class="form-group col-md-4"></div>
			<div class="form-group col-md-4">
				<p><strong>Apresenta frequentemente episódios de tontura/desmaio?</strong></p>
				<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['tontura_desmaio']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4"></div>
		</div>

		<div class="row">
			<div class="form-group col-md-4"></div>
			<div class="form-group col-md-4">
				<p><strong>Apresenta dores no peito com frequência?</strong></p>
				<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['dores_peito']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4"></div>
		</div>

		<div class="row">
			<div class="form-group col-md-4"></div>
			<div class="form-group col-md-4">
				<p><strong>Apresenta pressão arterial alta?</strong></p>
				<p><input class="form-control input-md" type="text" value="<?php echo $anamnese['pressao_arterial']; ?>" readonly></p>
			</div>
			<div class="form-group col-md-4"></div>
		</div>

		<hr>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="../js/visualizarAvaliacao.js"></script>

</body>

</html>