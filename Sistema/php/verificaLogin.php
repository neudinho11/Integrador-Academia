<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    if(!isset($_SESSION["matricula"])){
        header("Location: index.php");
        exit();
    }
?>