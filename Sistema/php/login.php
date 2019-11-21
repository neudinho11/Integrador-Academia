<?php
    require_once "conexaoBD.php";
?>

<?php

    if(isset($_POST["txtLogin"]) && strlen($_POST["txtLogin"]) > 0){
        $matricula = $_POST["txtLogin"];
        $senha = $_POST["txtSenha"];

        $sql = "SELECT id_usuario, matricula, senha, tipo_conta FROM usuario WHERE matricula = $matricula";
        $query = $conexao->prepare($sql);
        $query->execute();
        $dados = $query->fetchAll(PDO::FETCH_ASSOC);
        $total = $query->num_rows;
        $id = $dados["id_usuario"];

        if($total == 0){
            $sql = "SELECT id_treinador, matricula, senha, tipo_conta FROM treinador WHERE matricula = $matricula";
            $query = $conexao->prepare($sql);
            $query->execute();
            $dados = $query->fetchAll(PDO::FETCH_ASSOC);
            $total = $query->num_rows;
            $id = $dados["id_usuario"];
            if($total == 0){
                $_SESSION["erro"] = "Este e-mail não pertence a nenhum usuário.";
                $erro = 1;
            }
        }
        
        if($total != 0){
            if($dados["senha"] == $senha)
                $_SESSION["usuario"] = $id;
            else{
                $_SESSION["erro"] = "Senha incorreta.";
                $erro = 1;
            }
        }

        if($erro != 1 || !isset($erro)){
            if($dados["tipo_conta"] == "usuario"){
                header("Location: principalUser.php?id=$id");
            }else{
                header("Location: principalTrein.php?id=$id");
            }
        }else{
            header("Location: index.php?erro=e");
        }
    }

    $sql = "SELECT * FROM treinador WHERE matricula = $matricula AND senha = $senha";
    $query = $conexao->prepare($sql);
    $resultado = $query->execute();
    echo $resultado;
?>