<?php

session_start();
include "verificaLogin.php";
require_once "functions.php";
?>

<?php
$idU = $_SESSION["matricula"];

$conexao = conexaoBD();

$sql = "SELECT id_usuario FROM usuario WHERE matricula = :matricula";
$query = $conexao->prepare($sql);
$query->bindParam(":matricula", $_SESSION['matricula']);
$query->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);

$_SESSION["usuario"] = $user['id_usuario'];
$idU = $_SESSION["usuario"];

$tAtendimento = $_POST["tAtendimento"];
$treinadorSol = $_POST["treinadorSol"];
$diaSemana = $_POST["diaSemana"];
$turno = $_POST["turno"];
$horario = $_POST["horario"];

$sql = "INSERT INTO solicitacoes (tipo_atendimento, dia_semana, turno, horario) 
VALUES (:tipo_atendimento, :dia_semana, :turno, :horario)";
$query = $conexao->prepare($sql);
$query->bindParam(":tipo_atendimento", $tAtendimento);
$query->bindParam(":dia_semana", $diaSemana);
$query->bindParam(":turno", $turno);
$query->bindParam(":horario", $horario);
$resultado = $query->execute();
$idS = $conexao->lastInsertId();

$sql = "INSERT INTO trein_usua_solic (id_treinador, id_usuario, id_solicitacoes) 
VALUES (:id_treinador, :id_usuario, :id_solicitacoes)";
$query = $conexao->prepare($sql);
$query->bindParam(":id_treinador", $treinadorSol);
$query->bindParam(":id_usuario", $idU);
$query->bindParam(":id_solicitacoes", $idS);
$resultado = $query->execute();
$idAn = $conexao->lastInsertId();

if($tAtendimento == "avaliacao"){
    header("Location: listaAvaliacao.php");
}else{
    header("Location: listaTreino.php");
}

?>