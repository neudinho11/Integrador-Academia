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
?>