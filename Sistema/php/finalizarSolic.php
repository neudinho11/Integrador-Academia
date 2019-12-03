<?php
session_start();
include "verificaLogin.php";
require_once "functions.php";
?>

<?php
$idS = $_GET["idS"];
$situacao = $_GET["s"];

if ($situacao == true) {
    $conexao = conexaoBD();
    $sql = "UPDATE solicitacoes SET situacao = 'concluido' WHERE id_solicitacoes = :idS";
    $query = $conexao->prepare($sql);
    $query->bindParam(":idS", $idS);
    $query->execute();
}

header("Location: principalT.php");


?>