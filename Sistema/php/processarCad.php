<?php
    require_once "functions.php";
    include "verificaLogin.php";
?>

<?php
    $nome = $_POST["txtNome"];
    $email = $_POST["txtEmail"];
    $matricula = $_POST["txtMatricula"];
    $senha = $_POST["txtSenha"];
    $dataNasc = $_POST["txtDataNasc"];
    $sexo = $_POST["radSexo"];
    $tipoConta = $_POST["radTipoConta"];

    $conexao = conexaoBD();
    $senha = makeHash($senha);

    if($tipoConta == "usuario"){
        $sql = "INSERT INTO usuario (nome, matricula, email, senha, data_nascimento, sexo, tipo_conta) VALUES (:nome, :matricula, :email, :senha, :data_nascimento, :sexo, :tipo_conta)";
        $query = $conexao->prepare($sql);
        $query->bindParam(":nome", $nome);
        $query->bindParam(":matricula", $matricula);
        $query->bindParam(":email", $email);
        $query->bindParam(":senha", $senha);
        $query->bindParam(":data_nascimento", $dataNasc);
        $query->bindParam(":sexo", $sexo);
        $query->bindParam(":tipo_conta", $tipoConta);
        $resultado = $query->execute();
        $_SESSION['cadastro'] = true;
        header("Location: index.php");
    }else{
        $sql = "INSERT INTO treinador (nome, matricula, email, senha, data_nascimento, sexo, tipo_conta) VALUES (:nome, :matricula, :email, :senha, :data_nascimento, :sexo, :tipo_conta)";
        $query = $conexao->prepare($sql);
        $query->bindParam(":nome", $nome);
        $query->bindParam(":matricula", $matricula);
        $query->bindParam(":email", $email);
        $query->bindParam(":senha", $senha);
        $query->bindParam(":data_nascimento", $dataNasc);
        $query->bindParam(":sexo", $sexo);
        $query->bindParam(":tipo_conta", $tipoConta);
        $resultado = $query->execute();
        $_SESSION['cadastro'] = true;
        header("Location: index.php");
    }
    
?>