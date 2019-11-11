<?php
	require "processarLogin.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Anamnese</title>
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
	<link rel="stylesheet" type="text/css" href="../css/anamnese.css">
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('../images/img1.jpg');">
			<form class="form-horizontal form-cadastro corLabel" action="index.php">
				<legend class="positionElem">
					<h2>ANAMNESE</h2>
				</legend>
				<hr>
				<label>Objetivos com relação a atividades física na academia:</label><br>
				<div class="cor" required>
					<label>
						<input type="checkbox" name="obj" value="1"> Estética
					</label>
					<label>
						<input type="checkbox" name="obj" value="2"> Condicionamento físico
					</label>
					<label>
						<input type="checkbox" name="obj" value="3"> Lazer
					</label>
					<label>
						<input type="checkbox" name="obj" value="4"> Terapêutico
					</label>
					<label>
						<input type="checkbox" name="obj" value="4"> Saúde
					</label>
				</div>

				<label>Prática alguma outra atividade física regularmente?</label><br>
				<div class="cor">
					<label>
						<input type="radio" name="regularmente" id="regularmenteS" value="S" required> Sim
					</label>
					<label>
						<input type="radio" name="regularmente" id="regularmenteN" value="N" required> Não
					</label>
				</div>
				<div id="divRegular" class="wrap-input100 m-b-10 txtInput altDisplay">
					<input id="txtregularmente" name="txtregularmente" type="text" placeholder="Qual(ais)?" class="form-control input-md" required="">
					<input id="txtregularmenteF" name="txtregularmenteF" type="text" placeholder="Qual é a frequência semanal?" class="form-control input-md" required="">
				</div>


				<label>Possui alguma restrição a prática de atividade física?</label><br>
				<div class="cor">
					<label>
						<input type="radio" name="restricao" id="restricaoS" value="S" required> Sim
					</label>
					<label>
						<input type="radio" name="restricao" id="restricaoN" value="N" required> Não
					</label>
				</div>
				<div id="divRestricao" class="wrap-input100 m-b-10 altDisplay">
					<input id="txtrestricao" name="txtrestricao" type="text" placeholder="Qual?" class="form-control input-md" required="">
				</div>

				<label>Foi submetido a algum tipo de cirurgia?</label><br>
				<div class="cor">
					<label>
						<input type="radio" name="cirurgia" id="cirungiaS" value="S" required> Sim
					</label>
					<label>
						<input type="radio" name="cirurgia" id="cirungiaN" value="N" required> Não
					</label>
				</div>
				<div id="divCirungia" class="wrap-input100 m-b-10 altDisplay">
					<input id="txtcirurgia" name="txtcirurgia" type="text" placeholder="Especifique?" class="form-control input-md" required="">
				</div>

				<label>Possui algum tipo de alergia?</label><br>
				<div class="cor">
					<label>
						<input type="radio" name="alergia" id="alergiaS" value="S" required> Sim
					</label>
					<label>
						<input type="radio" name="alergia" id="alergiaN" value="N" required> Não
					</label>
				</div>
				<div id="divAlergia" class="wrap-input100 m-b-10 altDisplay">
					<input id="txtalergia" name="txtalergia" type="text" placeholder="Especifique?" class="form-control input-md" required="">
				</div>

				<label>Sofreu algum tipo de acidente ou lesão osteomuscular?</label><br>
				<div class="cor">
					<label>
						<input type="radio" name="osteomuscular" id="osteoS" value="S" required> Sim
					</label>
					<label>
						<input type="radio" name="osteomuscular" id="osteoN" value="N" required> Não
					</label>
				</div>
				<div id="divOsteo" class="wrap-input100 m-b-10 altDisplay">
					<input id="txtosteomuscular" name="txtosteomuscular" type="text" placeholder="Especifique?" class="form-control input-md" required="">
				</div>

				<label>Existe na família histórico de cardiopatia?</label><br>
				<div class="cor">
					<label>
						<input type="radio" name="cardiopatia" id="cardioS" value="S" required> Sim
					</label>
					<label>
						<input type="radio" name="cardiopatia" id="cardioN" value="N" required> Não
					</label>
				</div>
				<div id="divCardio" class="wrap-input100 m-b-10 altDisplay">
					<input id="txtcardiopatia" name="txtcardiopatia" type="text" placeholder="Especifique?" class="form-control input-md" required="">
				</div>

				<label>Utiliza regularmente algum tipo de medicamento?</label><br>
				<div class="cor">
					<label>
						<input type="radio" name="medicamento" id="medicS" value="S" required> Sim
					</label>
					<label>
						<input type="radio" name="medicamento" id="medicN" value="N" required> Não
					</label>
				</div>
				<div id="divMedic" class="wrap-input100 m-b-10 altDisplay">
					<input id="txtmedicamento" name="txtmedicamento" type="text" placeholder="Especifique?" class="form-control input-md" required="">
				</div>

				<label>Utiliza regularmente algum tipo de suplemento?</label><br>
				<div class="cor">
					<label>
						<input type="radio" name="suplemento" id="suplemS" value="S" required> Sim
					</label>
					<label>
						<input type="radio" name="suplemento" id="suplemN" value="N" required> Não
					</label>
				</div>
				<div id="divSuplem" class="wrap-input100 m-b-10 altDisplay">
					<input id="txtsuplemento" name="txtsuplemento" type="text" placeholder="Especifique?" class="form-control input-md" required="">
				</div>

				<label>Tem ou teve o hábito de fumar?</label><br>
				<div class="cor">
					<label>
						<input type="radio" name="fumar" value="S" required> Sim
					</label>
					<label>
						<input type="radio" name="fumar" value="N" required> Não
					</label>
				</div>

				<label>É diabético?</label><br>
				<div class="cor">
					<label>
						<input type="radio" name="diabético" value="S" required> Sim
					</label>
					<label>
						<input type="radio" name="diabético" value="N" required> Não
					</label>
				</div>

				<label>Possui diabéticos na família?</label><br>
				<div class="cor">
					<label>
						<input type="radio" name="diabéticoF" value="S" required> Sim
					</label>
					<label>
						<input type="radio" name="diabéticoF" value="N" required> Não
					</label>
				</div>

				<label>Apresenta frequentemente episódios de tontura ou sensação de desmaio?</label><br>
				<div class="cor">
					<label>
						<input type="radio" name="desmaio" value="S" required> Sim
					</label>
					<label>
						<input type="radio" name="desmaio" value="N" required> Não
					</label>
				</div>

				<label>Apresenta dores no peito com frequência?</label><br>
				<div class="cor">
					<label>
						<input type="radio" name="dores" value="S" required> Sim
					</label>
					<label>
						<input type="radio" name="dores" value="N" required> Não
					</label>
				</div>

				<label>Apresenta pressão arterial alta?</label><br>
				<div class="cor">
					<label>
						<input type="radio" name="pressao" value="S" required> Sim
					</label>
					<label>
						<input type="radio" name="pressao" value="N" required> Não
					</label>
				</div>
				<hr>
				<div class="positionElem">
					<button id="btnsalvarA" name="btnsalvarA" class="btn btn-success">Salvar</button>
				</div>
			</form>
		</div>
	</div>




	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../vendor/select2/select2.min.js"></script>
	<script src="../js/Anamnese.js"></script>

</body>

</html>