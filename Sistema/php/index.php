<?php
session_start();

$erroLogin = false;
if (isset($_GET["e"]) && $_GET["e"] == "login")
	$erroLogin = true;

$erroAutenticacao = false;
if (isset($_GET["e"]) && $_GET["e"] == "autenticacao")
	$erroAutenticacao = true;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Login</title>
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
	<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('../images/img1.jpg');">
			<div class="wrap-login100 p-t-135 p-b-60 divPrincipal">
				<form class="login100-form validate-form p-l-10 p-r-10 p-t-10 p-b-10">
					<div class="login100-form-avatar">
						<img src="../images/logo.jpg" alt="AVATAR">
					</div>

					<div class="wrap-input100 validate-input m-b-10 p-t-5" data-validate="Informe a matricula">
						<input id="txtLogin" class="input100" type="text" name="username" placeholder="Matricula">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate="Informe a senha">
						<input id="txtSenha" class="input100" type="password" name="pass" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button id="btnLogin" class="login100-form-btn">
							Login
						</button>
					</div>
				</form>



				<?php
				if ($erroLogin) {
					echo "<div class='alert alert-danger' role='alert'>E-mail e/ou senha incorreto</div>";
				} else if ($erroAutenticacao) {
					echo "<div class='alert alert-danger' role='alert'>Efetue o login primeiro</div>";
				}
				?>


				<div class="text-center w-full p-t-25 p-b-20">
					<a href="newSenha.php" class="txt1" id="linkSenha">
						Esqueceu sua senha?
					</a>
				</div>
				<div class="text-center w-full p-t-25">
					<button class="btn btn-secondary">
						<a class="txt1" href="cadastro.php">Cadastre-se</a>
					</button>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../vendor/select2/select2.min.js"></script>
	<script src="../js/index.js"></script>

</body>

</html>