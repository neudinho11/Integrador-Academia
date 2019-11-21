<?php
require_once "conexaoBD.php";
?>

<?php
class Usuario
{
    public $id_usuario;
    public $nome;
    public $matricula;
    public $email;
    public $senha;
    public $data_nascimento;
    public $sexo;
    public $tipo_conta;
}

$sql = "SELECT * FROM usuario";
$query = $conexao->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_CLASS, "Usuario");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Treinador
    </title>
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
            <h2>USUARIOS</h2>
        </legend>

        <div id="listUser" class="row">
            <div class="table-responsive col-md-12">
                <table class="table table-striped" cellspacing="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>MATRICULA</th>
                            <th>E-MAIL</th>
                            <th>DATA NASC.</th>
                            <th>SEXO</th>
                            <th>AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($usuarios as $user) {
                            echo "<tr>
                                        <td>$user->id_usuario</td>
                                        <td>$user->nome</td>
                                        <td>$user->matricula</td>
                                        <td>$user->email</td>
                                        <td>$user->data_nascimento</td>
                                        <td>$user->sexo</td>
                                        <td class='actions'>
                                            <a class='btn btn-success btn-xs' href='avaliacao.php?id=$user->id_usuario'>Nova Avaliação</a>
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
    <script type="text/javascript" src="../js/principalTrein.js"></script>
</body>

</html>