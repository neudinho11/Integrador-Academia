<?php

    function conexaoBD(){
        $dsn = "mysql:host=localhost;dbname=pi_academia";
        $usuario = "root";
        $senha = "";

        $PDO = new PDO($dsn, $usuario, $senha);

        return $PDO;
    }

    function makeHash($senha)
    {
        return sha1(md5($senha));
    }

    function logado()
    {
        if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true)
        {
            return false;
        }
     
        return true;
    }
?>