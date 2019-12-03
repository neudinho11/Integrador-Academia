<?php
session_start();
require_once "functions.php";

include "verificaLogin.php";
?>

<?php

$conexao = conexaoBD();

$sql = "SELECT id_usuario FROM usuario WHERE matricula = :matricula";
$query = $conexao->prepare($sql);
$query->bindParam(":matricula", $_SESSION['matricula']);
$query->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);

$idU = $user['id_usuario'];
$_SESSION['usuario'] = $idU;

$sql = "SELECT u.nome AS usuario, u.matricula, t.nome AS treinador, tua.data_avaliacao, tua.id_avaliacao FROM trein_usua_aval AS tua
INNER JOIN usuario AS u on tua.id_usuario = u.id_usuario
INNER jOIN treinador AS t on tua.id_treinador = t.id_treinador
WHERE tua.id_usuario = :idU ORDER BY tua.id_avaliacao DESC LIMIT 1";
$query = $conexao->prepare($sql);
$query->bindParam(":idU", $idU);
$query->execute();
$avaliacao = $query->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT tut.data_criacao AS dc, tut.data_validade AS dv, u.nome AS usuario, u.matricula AS mat, t.nome AS treinador, tut.id_treino AS idTr 
FROM trein_usua_treino AS tut
INNER JOIN usuario AS u on tut.id_usuario = u.id_usuario
INNER jOIN treinador AS t on tut.id_treinador = t.id_treinador
WHERE tut.id_usuario = :idU ORDER BY tut.id_treino DESC LIMIT 1";
$query = $conexao->prepare($sql);
$query->bindParam(':idU', $idU);
$query->execute();
$treino = $query->fetch(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Usuario</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../css/principalUser.css">
</head>

<body>

    <?php
    include "menu.php";
    ?>
    <div class="row">
        <div class="col-sm-6 principal">
            <legend class="positionElem">
                <h2>ULTIMA AVALIAÇÃO</h2>
            </legend>
            <div class="row">
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
                            echo "<tr>
                                    <td>$avaliacao[usuario]</td>
                                    <td>$avaliacao[matricula]</td>
                                    <td>$avaliacao[treinador]</td>
                                    <td>$avaliacao[data_avaliacao]</td>
                                    <td class='actions'>
                                        <a class='btn btn-primary btn-xs' href='visualizarAvaliacao.php?idA=$avaliacao[id_avaliacao]'>Visualizar</a>
                                    </td>
                                </tr>";
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-sm-6 principal">
            <legend class="positionElem">
                <h2>ULTIMO TREINO</h2>
            </legend>
            <div class="row">
                <div class="table-responsive col-md-12">
                    <table class="table table-striped" cellspacing="0" cellspacing="0">
                        <thead>
                            <tr>
                                <th>USUARIO</th>
                                <th>MATRICULA</th>
                                <th>TREINADOR</th>
                                <th>DATA CRIAÇÃO</th>
                                <th>DATA VALIDADE</th>
                                <th>AÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            echo "<tr>
                                    <td>$treino[usuario]</td>
                                    <td>$treino[mat]</td>
                                    <td>$treino[treinador]</td>
                                    <td>$treino[dc]</td>
                                    <td>$treino[dv]</td>
                                    <td class='actions'>
                                        <a class='btn btn-primary btn-xs' href='visualizarTreino.php?idTr=$treino[idTr]'>Visualizar</a>
                                    </td>
                                </tr>";
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="../js/principalTrein.js"></script>
</body>

</html>