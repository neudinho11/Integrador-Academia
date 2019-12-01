<?php

session_start();

require_once "functions.php";

if (empty($_POST['txtLogin']) || empty($_POST['txtSenha'])) {
    header("Location: index.php");
    exit();
}
?>

<?php

$matricula = $_POST["txtLogin"];
$senha = $_POST["txtSenha"];
$senha = makeHash($senha);

$conexao = conexaoBD();

$sql = "SELECT id_usuario, matricula FROM usuario WHERE matricula = :matricula";
$query = $conexao->prepare($sql);
$query->bindParam(":matricula", $matricula);
$query->execute();
$usuario = $query->fetch(PDO::FETCH_ASSOC);

if (empty($usuario)) {
    $sql = "SELECT id_treinador, matricula FROM treinador WHERE matricula = :matricula";
    $query = $conexao->prepare($sql);
    $query->bindParam(":matricula", $matricula);
    $query->execute();
    $treinadores = $query->fetch(PDO::FETCH_ASSOC);

    if (empty($treinadores)) {
        $_SESSION['erro'] = true;
        header("Location: index.php");
    } else {
        $_SESSION['matricula'] = $matricula;
        $_SESSION['tipoLogin'] = "t";
        header('Location: principalTrein.php');
    }
} else {
    $_SESSION['matricula'] = $matricula;
    $_SESSION['tipoLogin'] = "u";
    header('Location: principalUser.php');
}
?>