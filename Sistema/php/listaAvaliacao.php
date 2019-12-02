<?php
session_start();
include "verificaLogin.php";
require_once "functions.php";
?>

<?php

$tipo = $_SESSION['tipoLogin'];

$conexao = conexaoBD();

if ($tipo == "t") {
    $tipo = 0; //treinador

    $idU = $_GET["idU"];
    $_SESSION["usuario"] = $idU;
} else {
    $tipo = 1; //usuario

    $sql = "SELECT id_usuario FROM usuario WHERE matricula = :matricula";
    $query = $conexao->prepare($sql);
    $query->bindParam(":matricula", $_SESSION['matricula']);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);

    $_SESSION["usuario"] = $user['id_usuario'];
    $idU = $_SESSION["usuario"];
}

$sql = "SELECT u.nome AS usuario, u.matricula, t.nome AS treinador, tua.data_avaliacao, tua.id_avaliacao FROM trein_usua_aval AS tua
INNER JOIN usuario AS u on tua.id_usuario = u.id_usuario
INNER jOIN treinador AS t on tua.id_treinador = t.id_treinador
WHERE tua.id_usuario = :idU";
$query = $conexao->prepare($sql);
$query->bindParam(":idU", $idU);
$query->execute();
$avaliacoes = $query->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Avaliações
    </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../css/listaAvaliacao.css">
</head>

<body>

    <?php
    include "menu.php";
    include "modal.php";
    ?>

    <div class="container principal">
        <legend class="positionElem">
            <h2>AVALIAÇÕES</h2>
        </legend>

        <div class="row">
            <?php if ($tipo == 1) { //treinador 
                ?>
                <div class="form-group col-md-1"><a class='btn btn-warning btn-xs' href="principalTrein.php">Voltar</a></div>
                <div class="form-group col-md-10"></div>
                <div class="form-group col-md-1"><a class='btn btn-success btn-xs' href="avaliacao.php">Nova Avaliação</a></div>
            <?php } else { //usuario 
                ?>
                <div class="form-group col-md-1"><a class='btn btn-warning btn-xs' href="principalUser.php">Voltar</a></div>
                <div class="form-group col-md-10"></div>
                <div class="form-group col-md-1 pull-right"><button type="button" class='btn btn-success btn-xs' data-toggle="modal" data-target="#myModalcad">Solicitar Avaliação</button></div>
            <?php } ?>
        </div>

        <div id="listUser" class="row">
            <div class="table-responsive col-md-12">
                <table class="table table-striped" cellspacing="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th>USUARIO</th>
                            <th>MATRICULA</th>
                            <th>TREINADOR</th>
                            <th>DATA AVALIAÇÃO</th>
                            <th>AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($avaliacoes as $aval) {
                            echo "<tr>
                                    <td>$aval[usuario]</td>
                                    <td>$aval[matricula]</td>
                                    <td>$aval[treinador]</td>
                                    <td>$aval[data_avaliacao]</td>
                                    <td class='actions'>
                                        <a class='btn btn-primary btn-xs' href='visualizarAvaliacao.php?idA=$aval[id_avaliacao]'>Visualizar</a>
                                    </td>
                                </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="../js/listaAvaliacao.js"></script>
</body>

</html>