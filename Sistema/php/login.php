<?php
    require_once "functions.php";
?>

<?php

    $matricula = isset($_POST["txtLogin"]) ? $_POST["txtLogin"] : "";
    $senha = isset($_POST["txtSenha"]) ? $_POST["txtSenha"] : "";

    $senha = makeHash($senha);

    $conexao = conexaoBD();

        $sql = "SELECT id_usuario, matricula, senha FROM usuario WHERE matricula = $matricula";
        $query = $conexao->prepare($sql);
        $query->execute();
        $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

        if(count($usuarios) <= 0){
            $sql = "SELECT id_treinador, matricula, senha FROM treinador WHERE matricula = $matricula";
            $query = $conexao->prepare($sql);
            $query->execute();
            $treinadores = $query->fetchAll(PDO::FETCH_ASSOC);
            if(count($treinadores) <= 0){
                header("Location: index.php?e=true");
            }else{
                $treinador = $treinadores[0];
                session_start();
                $_SESSION['logado'] = true;
                header('Location: principalTrein.php?id=$treinador[id_treinador]'); //pode ser aki*************
            }
        }else{
            $user = $usuarios[0];
            session_start();
            $_SESSION['logado'] = true;
            header('Location: principalUser.php?id=$user[id_usuario]');
        }
?>

<?php/*

    if(isset($_POST["txtLogin"]) && strlen($_POST["txtLogin"]) > 0){

        $conexao = conexaoBD();

        $matricula = $_POST["txtLogin"];
        $senha = $_POST["txtSenha"];

        $sql = "SELECT id_usuario, matricula, senha, tipo_conta FROM usuario WHERE matricula = $matricula";
        $query = $conexao->prepare($sql);
        $query->execute();
        $dados = $query->fetchAll(PDO::FETCH_ASSOC);

        if(count($dados) > 0){
            $id = $dados["id_usuario"];
        }else{
            $sql = "SELECT id_treinador, matricula, senha, tipo_conta FROM treinador WHERE matricula = $matricula";
            $query = $conexao->prepare($sql);
            $query->execute();
            $dados = $query->fetchAll(PDO::FETCH_ASSOC);
            if(count($dados) <= 0){
                $_SESSION["erro"] = "Este e-mail não pertence a nenhum usuário.";
                $erro = 1;
            }else{
                $id = $dados["id_treinador"];
            }
        }
        
        if(count($dados) > 0){
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
*/?>