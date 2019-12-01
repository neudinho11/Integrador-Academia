<?php

session_start();
include "verificaLogin.php";
require_once "functions.php";
?>

<?php
$idU = $_SESSION["matricula"];

$obj = isset($_POST["obj"]) ? $_POST["obj"] : "";
$regularmente = isset($_POST["regularmente"]) ? $_POST["regularmente"] : "";
$txtregularmente = isset($_POST["txtregularmente"]) ? $_POST["txtregularmente"] : "";
$txtregularmenteF = isset($_POST["txtregularmenteF"]) ? $_POST["txtregularmenteF"] : "";
$restricao = isset($_POST["restricao"]) ? $_POST["restricao"] : "";
$txtrestricao = isset($_POST["txtrestricao"]) ? $_POST["txtrestricao"] : "";
$cirurgia = isset($_POST["cirurgia"]) ? $_POST["cirurgia"] : "";
$txtcirurgia = isset($_POST["txtcirurgia"]) ? $_POST["txtcirurgia"] : "";
$alergia = isset($_POST["alergia"]) ? $_POST["alergia"] : "";
$txtalergia = isset($_POST["txtalergia"]) ? $_POST["txtalergia"] : "";
$osteomuscular = isset($_POST["osteomuscular"]) ? $_POST["osteomuscular"] : "";
$txtosteomuscular = isset($_POST["txtosteomuscular"]) ? $_POST["txtosteomuscular"] : "";
$cardiopatia = isset($_POST["cardiopatia"]) ? $_POST["cardiopatia"] : "";
$txtcardiopatia = isset($_POST["txtcardiopatia"]) ? $_POST["txtcardiopatia"] : "";
$medicamento = isset($_POST["medicamento"]) ? $_POST["medicamento"] : "";
$txtmedicamento = isset($_POST["txtmedicamento"]) ? $_POST["txtmedicamento"] : "";
$suplemento = isset($_POST["suplemento"]) ? $_POST["suplemento"] : "";
$txtsuplemento = isset($_POST["txtsuplemento"]) ? $_POST["txtsuplemento"] : "";
$fumar = isset($_POST["fumar"]) ? $_POST["fumar"] : "";
$diabético = isset($_POST["diabético"]) ? $_POST["diabético"] : "";
$diabéticoF = isset($_POST["diabéticoF"]) ? $_POST["diabéticoF"] : "";
$desmaio = isset($_POST["desmaio"]) ? $_POST["desmaio"] : "";
$dores = isset($_POST["dores"]) ? $_POST["dores"] : "";
$pressao = isset($_POST["pressao"]) ? $_POST["pressao"] : "";

$conexao = conexaoBD();

$sql = "SELECT id_usuario FROM usuario WHERE matricula = :matricula";
    $query = $conexao->prepare($sql);
    $query->bindParam(":matricula", $idU);
    $resultado = $query->execute();
    $treinador = $query->fetch(PDO::FETCH_ASSOC);
    
    $idU= $treinador["id_usuario"];

$sql = "INSERT INTO anamnese (objetivo, pratica_atv_fis, retricoes, cirurgia, alergia, problema_osteomuscular, cardiopatia, medicamento, 
    suplemento, fumar, diabetico, diabetico_familia, tontura_desmaio, dores_peito, pressao_arterial, quais_atv_fis, frequencia_smnl_atv_fis, 
    espec_retricoes, espec_cirurgia, espec_alergia, espec_osteomuscular, espec_cardiopatia, espec_medicamento, espec_suplemento, id_usuario) 
    VALUES (:objetivo, :pratica_atv_fis, :retricoes, :cirurgia, :alergia, :problema_osteomuscular, :cardiopatia, :medicamento, :suplemento, :fumar,
     :diabetico, :diabetico_familia, :tontura_desmaio, :dores_peito, :pressao_arterial, :quais_atv_fis, :frequencia_smnl_atv_fis, :espec_retricoes,
      :espec_cirurgia, :espec_alergia, :espec_osteomuscular, :espec_cardiopatia, :espec_medicamento, :espec_suplemento, :id_usuario)";
$query = $conexao->prepare($sql);
$query->bindParam(":objetivo", $obj);
$query->bindParam(":pratica_atv_fis", $regularmente);
$query->bindParam(":retricoes", $restricao);
$query->bindParam(":cirurgia", $cirurgia);
$query->bindParam(":alergia", $alergia);
$query->bindParam(":problema_osteomuscular", $osteomuscular);
$query->bindParam(":cardiopatia", $cardiopatia);
$query->bindParam(":medicamento", $medicamento);
$query->bindParam(":suplemento", $suplemento);
$query->bindParam(":fumar", $fumar);
$query->bindParam(":diabetico", $diabético);
$query->bindParam(":diabetico_familia", $diabéticoF);
$query->bindParam(":tontura_desmaio", $desmaio);
$query->bindParam(":dores_peito", $dores);
$query->bindParam(":pressao_arterial", $pressao);
$query->bindParam(":quais_atv_fis", $txtregularmente);
$query->bindParam(":frequencia_smnl_atv_fis", $txtregularmenteF);
$query->bindParam(":espec_retricoes", $txtrestricao);
$query->bindParam(":espec_cirurgia", $txtcirurgia);
$query->bindParam(":espec_alergia", $txtalergia);
$query->bindParam(":espec_osteomuscular", $txtosteomuscular);
$query->bindParam(":espec_cardiopatia", $txtcardiopatia);
$query->bindParam(":espec_medicamento", $txtmedicamento);
$query->bindParam(":espec_suplemento", $txtsuplemento);
$query->bindParam(":id_usuario", $idU);
$resultado = $query->execute();
$idAn = $conexao->lastInsertId();


header("Location: visualizarAnamnese.php?idU=$idU");


?>