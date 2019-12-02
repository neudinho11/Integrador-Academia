<?php
require_once "functions.php";
include "verificaLogin.php";

$conexao = conexaoBD();
$sql = "SELECT id_treinador, nome FROM treinador";
$query = $conexao->prepare($sql);
$query->execute();
$treinadores = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>

	<div class="modal fade" id="myModalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
					<h3 class="modal-title text-center" id="myModalLabel">SOLICITAR ATENDIMENTO</h3>
				</div>
				<div class="modal-body">
					<form method="POST" action="processarSolic.php" enctype="multipart/form-data">
						<div class="form-group">
							<label for="tAtendimento">Tipo Atendimento: </label>
							<select class="form-control" name="tAtendimento" id="tAtendimento">
								<option>Selecione um atendimento</option>
								<option value='avaliacao'>Avaliação</option>
								<option value='treino'>Treino</option>
							</select>
						</div>
						<div class="form-group">
							<label for="treinadorSol">Treinador: </label>
							<select class="form-control" name="treinadorSol" id="treinadorSol">
								<option>Selecione um treinador</option>
								<?php
								foreach ($treinadores as $trein) {
									echo "<option value='$trein[id_treinador]'>$trein[nome]</option>";
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<label for="diaSemana">Dia da semana: </label>
							<select class="form-control" name="diaSemana" id="diaSemana">
								<option>Selecione um dia</option>
								<option value='segunda'>Segunda</option>
								<option value='terca'>Terça</option>
								<option value='quarta'>Quarta</option>
								<option value='quinta'>Quinta</option>
								<option value='sexta'>Sexta</option>
							</select>
						</div>
						<div class="form-group">
							<label for="turno">Turno: </label>
							<select class="form-control" name="turno" id="turno">
								<option>Selecione um turno</option>
								<option value='matutino'>Matutino</option>
								<option value='vespertino'>Vespertino</option>
								<option value='Noturno'>Noturno</option>
							</select>
						</div>
						<div class="form-group">
							<label for="horario">Horario: </label>
							<select class="form-control" name="horario" id="horario">
								<option>Selecione um horario</option>
								<option value='07:00'>07:00</option>
								<option value='08:00'>08:00</option>
								<option value='09:00'>09:00</option>
								<option value='10:00'>10:00</option>
								<option value='11:00'>11:00</option>
								<option value='13:00'>13:00</option>
								<option value='14:00'>14:00</option>
								<option value='15:00'>15:00</option>
								<option value='16:00'>16:00</option>
								<option value='17:00'>17:00</option>
								<option value='19:00'>19:00</option>
								<option value='20:00'>20:00</option>
								<option value='21:00'>21:00</option>
							</select>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-success">Solicitar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/listaAvaliacao.js"></script>
</body>

</html>