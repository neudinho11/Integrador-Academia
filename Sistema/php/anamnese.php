<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Anamnese</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="../css/anamnese.css">
</head>

<body>

	<?php
	include "menu.php";
	?>

	<div class="container formAnamnese">
		<form id="form_Anam" action="" method="POST">
			<legend class="positionElem">
				<h2>ANAMNESE</h2>
			</legend>

			<div class="row">
				<div class="form-group col-md-2"></div>
				<div class="form-group col-md-10">
					<label>Objetivos com relação a atividades física na academia:</label><br>
					<div required>
						<label>
							<input class="rad" type="checkbox" name="obj" value="Estetica"> Estética
						</label>
						<label>
							<input class="rad" type="checkbox" name="obj" value="Condicionamento_Fisico"> Condicionamento físico
						</label>
						<label>
							<input class="rad" type="checkbox" name="obj" value="Lazer"> Lazer
						</label>
						<label>
							<input class="rad" type="checkbox" name="obj" value="Terapeutico"> Terapêutico
						</label>
						<label>
							<input class="rad" type="checkbox" name="obj" value="Saude"> Saúde
						</label>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-1"></div>
				<div class="form-group col-md-5">
					<label>Prática alguma outra atividade física regularmente?</label><br>
					<div>
						<label>
							<input class="rad" type="radio" name="regularmente" id="regularmenteS" value="Sim" required> Sim
						</label>
						<label>
							<input class="rad" type="radio" name="regularmente" id="regularmenteN" value="Nao" required> Não
						</label>
					</div>
					<div id="divRegular" class="wrap-input100 m-b-10 txtInput altDisplay">
						<input id="txtregularmente" name="txtregularmente" type="text" placeholder="Qual(ais)?" class="form-control input-md" required="">
						<input id="txtregularmenteF" name="txtregularmenteF" type="text" placeholder="Qual é a frequência semanal?" class="form-control input-md" required="">
					</div>
				</div>
				<div class="form-group col-md-6">
					<label>Possui alguma restrição a prática de atividade física?</label><br>
					<div>
						<label>
							<input class="rad" type="radio" name="restricao" id="restricaoS" value="Sim" required> Sim
						</label>
						<label>
							<input class="rad" type="radio" name="restricao" id="restricaoN" value="Nao" required> Não
						</label>
					</div>
					<div id="divRestricao" class="wrap-input100 m-b-10 altDisplay">
						<input id="txtrestricao" name="txtrestricao" type="text" placeholder="Qual?" class="form-control input-md" required="">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-1"></div>
				<div class="form-group col-md-5">
					<label>Foi submetido a algum tipo de cirurgia?</label><br>
					<div>
						<label>
							<input class="rad" type="radio" name="cirurgia" id="cirungiaS" value="Sim" required> Sim
						</label>
						<label>
							<input class="rad" type="radio" name="cirurgia" id="cirungiaN" value="Nao" required> Não
						</label>
					</div>
					<div id="divCirungia" class="wrap-input100 m-b-10 altDisplay">
						<input id="txtcirurgia" name="txtcirurgia" type="text" placeholder="Especifique?" class="form-control input-md" required="">
					</div>
				</div>
				<div class="form-group col-md-6">
					<label>Possui algum tipo de alergia?</label><br>
					<div>
						<label>
							<input class="rad" type="radio" name="alergia" id="alergiaS" value="Sim" required> Sim
						</label>
						<label>
							<input class="rad" type="radio" name="alergia" id="alergiaN" value="Nao" required> Não
						</label>
					</div>
					<div id="divAlergia" class="wrap-input100 m-b-10 altDisplay">
						<input id="txtalergia" name="txtalergia" type="text" placeholder="Especifique?" class="form-control input-md" required="">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-1"></div>
				<div class="form-group col-md-5">
					<label>Sofreu algum tipo de acidente ou lesão osteomuscular?</label><br>
					<div>
						<label>
							<input class="rad" type="radio" name="osteomuscular" id="osteoS" value="Sim" required> Sim
						</label>
						<label>
							<input class="rad" type="radio" name="osteomuscular" id="osteoN" value="Nao" required> Não
						</label>
					</div>
					<div id="divOsteo" class="wrap-input100 m-b-10 altDisplay">
						<input id="txtosteomuscular" name="txtosteomuscular" type="text" placeholder="Especifique?" class="form-control input-md" required="">
					</div>
				</div>
				<div class="form-group col-md-6">
					<label>Existe na família histórico de cardiopatia?</label><br>
					<div>
						<label>
							<input class="rad" type="radio" name="cardiopatia" id="cardioS" value="Sim" required> Sim
						</label>
						<label>
							<input class="rad" type="radio" name="cardiopatia" id="cardioN" value="Nao" required> Não
						</label>
					</div>
					<div id="divCardio" class="wrap-input100 m-b-10 altDisplay">
						<input id="txtcardiopatia" name="txtcardiopatia" type="text" placeholder="Especifique?" class="form-control input-md" required="">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-1"></div>
				<div class="form-group col-md-5">
					<label>Utiliza regularmente algum tipo de medicamento?</label><br>
					<div>
						<label>
							<input class="rad" type="radio" name="medicamento" id="medicS" value="Sim" required> Sim
						</label>
						<label>
							<input class="rad" type="radio" name="medicamento" id="medicN" value="Nao" required> Não
						</label>
					</div>
					<div id="divMedic" class="wrap-input100 m-b-10 altDisplay">
						<input id="txtmedicamento" name="txtmedicamento" type="text" placeholder="Especifique?" class="form-control input-md" required="">
					</div>
				</div>
				<div class="form-group col-md-6">
					<label>Utiliza regularmente algum tipo de suplemento?</label><br>
					<div>
						<label>
							<input class="rad" type="radio" name="suplemento" id="suplemS" value="Sim" required> Sim
						</label>
						<label>
							<input class="rad" type="radio" name="suplemento" id="suplemN" value="Nao" required> Não
						</label>
					</div>
					<div id="divSuplem" class="wrap-input100 m-b-10 altDisplay">
						<input id="txtsuplemento" name="txtsuplemento" type="text" placeholder="Especifique?" class="form-control input-md" required="">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-1"></div>
				<div class="form-group col-md-5">
					<label>Tem ou teve o hábito de fumar?</label><br>
					<div>
						<label>
							<input class="rad" type="radio" name="fumar" value="Sim" required> Sim
						</label>
						<label>
							<input class="rad" type="radio" name="fumar" value="Nao" required> Não
						</label>
					</div>
				</div>
				<div class="form-group col-md-6">
					<label>É diabético?</label><br>
					<div>
						<label>
							<input class="rad" type="radio" name="diabético" value="Sim" required> Sim
						</label>
						<label>
							<input class="rad" type="radio" name="diabético" value="Nao" required> Não
						</label>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-1"></div>
				<div class="form-group col-md-5">
					<label>Possui diabéticos na família?</label><br>
					<div>
						<label>
							<input class="rad" type="radio" name="diabéticoF" value="Sim" required> Sim
						</label>
						<label>
							<input class="rad" type="radio" name="diabéticoF" value="Nao" required> Não
						</label>
					</div>
				</div>
				<div class="form-group col-md-6">
					<label>Apresenta frequentemente episódios de tontura/desmaio?</label><br>
					<div>
						<label>
							<input class="rad" type="radio" name="desmaio" value="Sim" required> Sim
						</label>
						<label>
							<input class="rad" type="radio" name="desmaio" value="Nao" required> Não
						</label>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-1"></div>
				<div class="form-group col-md-5">
					<label>Apresenta dores no peito com frequência?</label><br>
					<div>
						<label>
							<input class="rad" type="radio" name="dores" value="Sim" required> Sim
						</label>
						<label>
							<input class="rad" type="radio" name="dores" value="Nao" required> Não
						</label>
					</div>
				</div>
				<div class="form-group col-md-6">
					<label>Apresenta pressão arterial alta?</label><br>
					<div>
						<label>
							<input class="rad" type="radio" name="pressao" value="Sim" required> Sim
						</label>
						<label>
							<input class="rad" type="radio" name="pressao" value="Nao" required> Não
						</label>
					</div>
				</div>
			</div>

			<hr>
			<div class="positionElem">
				<button id="btnsalvarA" name="btnsalvarA" class="btn btn-success">Salvar</button>
			</div>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/anamnese.js"></script>
</body>

</html>