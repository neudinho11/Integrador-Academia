<?php
    session_start();

    $login = $_POST["l"];
    $senha = $_POST["s"];

    if(!isset($_SESSION["autenticado"]) || $_SESSION["autenticado"] != true){
        header("Location: index.php?e=autenticacao");
    }
    else if($login == "123" && $senha == "123"){
        $_SESSION["autenticado"] = true;
        header("Location: principal.php");
    }
    else{
        header("Location: index.php?e=login");
    }
?>