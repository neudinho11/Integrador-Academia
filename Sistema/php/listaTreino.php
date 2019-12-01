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

$sql = "SELECT tut.data_criacao AS dc, tut.data_validade AS dv, u.nome AS usuario, u.matricula AS mat, t.nome AS treinador, tut.id_treino AS idTr 
FROM trein_usua_treino AS tut
INNER JOIN usuario AS u on tut.id_usuario = u.id_usuario
INNER jOIN treinador AS t on tut.id_treinador = t.id_treinador
WHERE tut.id_usuario = :idU";
$query = $conexao->prepare($sql);
$query->bindParam(':idU', $idU);
$query->execute();
$treinos = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Treinos</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../css/listaAvaliacao.css">
</head>

<body>

    <?php
    include "menu.php";
    ?>

    <div class="container principal">
        <legend class="positionElem">
            <h2>TREINOS</h2>
        </legend>

        <div class="row">
            <?php if ($tipo == 1) { //treinador 
                ?>
                <div class="form-group col-md-1"><a class='btn btn-warning btn-xs' href="principalTrein.php">Voltar</a></div>
                <div class="form-group col-md-10"></div>
                <div class="form-group col-md-1"><a class='btn btn-primary btn-xs' href="treino.php">Novo Treino</a></div>
            <?php } else { //usuario 
                ?>
                <div class="form-group col-md-1"><a class='btn btn-warning btn-xs' href="principalUser.php">Voltar</a></div>
                <div class="form-group col-md-10"></div>
                <div class="form-group col-md-1"><a class='btn btn-primary btn-xs' href="#">Solicitar Treino</a></div>
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
                            <th>DATA CRIAÇÃO</th>
                            <th>DATA VALIDADE</th>
                            <th>AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($treinos as $treino) {
                            echo "<tr>
                                    <td>$treino[usuario]</td>
                                    <td>$treino[mat]</td>
                                    <td>$treino[treinador]</td>
                                    <td>$treino[dc]</td>
                                    <td>$treino[dv]</td>
                                    <td class='actions'>
                                        <a class='btn btn-success btn-xs' href='visualizarTreino.php?idTr=$treino[idTr]'>Visualizar</a>
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