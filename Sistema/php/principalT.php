<?php
session_start();
require_once "functions.php";

include "verificaLogin.php";
?>

<?php

$conexao = conexaoBD();

$sql = "SELECT id_treinador FROM treinador WHERE matricula = :matricula";
$query = $conexao->prepare($sql);
$query->bindParam(":matricula", $_SESSION['matricula']);
$query->execute();
$treinador = $query->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT u.id_usuario, u.nome, u.matricula, u.email, s.id_solicitacoes, s.tipo_atendimento, s.dia_semana, s.turno, s.situacao
FROM trein_usua_solic as tus
INNER JOIN usuario AS u ON tus.id_usuario = u.id_usuario
INNER JOIN solicitacoes AS s ON tus.id_solicitacoes = s.id_solicitacoes
WHERE id_treinador = :id_treinador AND s.situacao = 'solicitado'";
$query = $conexao->prepare($sql);
$query->bindParam(":id_treinador", $treinador['id_treinador']);
$query->execute();
$solicitacao = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Treinador</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../css/principalTrein.css">
</head>

<body>

    <?php
    include "menu.php";
    ?>

    <div class="container principal">
        <legend class="positionElem">
            <h2>SOLICITAÇÕES</h2>
        </legend>

        <div id="listUser" class="row">
            <div class="table-responsive col-md-12">
                <table class="table table-striped" cellspacing="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NOME</th>
                            <th>MATRICULA</th>
                            <th>E-MAIL</th>
                            <th>ATENDIMENTO</th>
                            <th>DIA</th>
                            <th>TURNO</th>
                            <th>AVALIAÇÃO</th>
                            <th>TREINO</th>
                            <th>FINALIZAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($solicitacao as $solic) {
                            echo "<tr>
                                        <td>$solic[nome]</td>
                                        <td>$solic[matricula]</td>
                                        <td>$solic[email]</td>
                                        <td>$solic[tipo_atendimento]</td>
                                        <td>$solic[dia_semana]</td>
                                        <td>$solic[turno]</td>";
                            if ($solic['tipo_atendimento'] == "avaliacao") {
                                echo "<td><a class='btn btn-primary btn-xs' href='avaliacao.php?idU=$solic[id_usuario]&g=true'>Avaliação</a></td>
                                <td><a class='btn btn-primary btn-xs' href='#' disabled>Treino</a></td>";
                            }
                            if ($solic['tipo_atendimento'] == "treino") {
                                echo "<td><a class='btn btn-primary btn-xs' href='#' disabled>Avaliação</a></td>
                                <td><a class='btn btn-primary btn-xs' href='treino.php?idU=$solic[id_usuario]&g=true'>Treino</a></td>";
                            }
                            if ($solic['tipo_atendimento'] == "avaliacao e treino") {
                                echo "<td><a class='btn btn-primary btn-xs' href='avaliacao.php?idU=$solic[id_usuario]&g=true'>Avaliação</a></td>
                                            <td><a class='btn btn-primary btn-xs' href='treino.php?idU=$solic[id_usuario]&g=true'>Treino</a></td>";
                            }

                            echo "<td class='actions'><a class='btn btn-success btn-xs' href='finalizarSolic.php?idS=$solic[id_solicitacoes]&s=true'>Finalizar</a></td>
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
        <script type="text/javascript" src="../js/principalTrein.js"></script>
</body>

</html>