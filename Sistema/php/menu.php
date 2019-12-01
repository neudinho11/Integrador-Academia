<?php
session_start();
require_once "functions.php";
include "verificaLogin.php";

$matricula = $_SESSION["matricula"];
$conexao = conexaoBD();

$sql = "SELECT id_treinador FROM treinador WHERE matricula = :matricula";
$query = $conexao->prepare($sql);
$query->bindParam(":matricula", $matricula);
$resultado = $query->execute();
$trein = $query->fetch(PDO::FETCH_ASSOC);

if (empty($trein)) {
	$tipo = 0; //usuario
} else {
	$tipo = 1; //treinador
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#" style="color:white">Academia IF</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<?php //Usuario
					if ($tipo == 0) { ?>
						<li><a href="principalUser.php" style="color:white">Início</a></li>
						<li><a href="#" style="color:white">Avaliações</a></li>
						<li><a href="#" style="color:white">Treinos</a></li>
						<li><a href="anamnese.php" style="color:white">Anamnese</a></li>
						<li><a href="logout.php" style="color:white">Sair</a></li>
					<?php //Treinador
					}
					if ($tipo == 1) { ?>
						<li><a href="principalTrein.php" style="color:white">Início</a></li>
						<li><a href="#" style="color:white"></a></li>
						<li><a href="#" style="color:white"></a></li>
						<li><a href="logout.php" style="color:white">Sair</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</nav>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>