<?php
    require_once "functions.php";
?>

<?php
    $idT = $_GET["idT"];
    $idU = $_GET["idU"];
    $data = $_POST["txtDataAval"];
    $pressao = $_POST["txtPressao"];
    $peso = floatval($_POST["txtPeso"]);
    $altura = floatval($_POST["txtAltura"]);
    $imc = $peso / ($altura * $altura);
    $pescoco = floatval($_POST["txtPescoco"]);
    $bicepsD = floatval($_POST["txtBicepsD"]);
    $bicepsE = floatval($_POST["txtBicepsD"]);
    $peito = floatval($_POST["txtPeito"]);
    $antD = floatval($_POST["txtAntD"]);
    $antE = floatval($_POST["txtAntE"]);
    $cintura = floatval($_POST["txtCintura"]);
    $coxaD = floatval($_POST["txtCoxaD"]);
    $coxaE = floatval($_POST["txtCoxaE"]);
    $quadris = floatval($_POST["txtQuadris"]);
    $pantD = floatval($_POST["txtPantD"]);
    $pantE = floatval($_POST["txtPantE"]);

    $conexao = conexaoBD();

    $sql = "INSERT INTO avaliacao (pressao_arterial, peso, altura, imc) VALUES (:pressao_arterial, :peso, :altura, :imc)";
    $query = $conexao->prepare($sql);
    $query->bindParam(":pressao_arterial", $pressao);
    $query->bindParam(":peso", $peso);
    $query->bindParam(":altura", $altura);
    $query->bindParam(":imc", $imc);
    $resultado = $query->execute();
    $idA = $conexao->lastInsertId();

    $sql = "INSERT INTO trein_usua_aval (data_avaliacao, id_treinador, id_usuario, id_avaliacao) 
    VALUES (:data_avaliacao, :id_treinador, :id_usuario, :id_avaliacao)";
    $query = $conexao->prepare($sql);
    $query->bindParam(":data_avaliacao", $data);
    $query->bindParam(":id_treinador", $idT);
    $query->bindParam(":id_usuario", $idU);
    $query->bindParam(":id_avaliacao", $idA);
    $resultado = $query->execute();
    echo "data: " . $data . "<br/>";
    echo "idT: " . $idT . "<br/>";
    echo "idU: " . $idU . "<br/>";
    echo "idA: " . $idA . "<br/>";

    $sql = "INSERT INTO medidas (pescoco, biceps_direito, biceps_esquerdo, antebraco_direito, antebraco_esquerdo, peito, cintura, quadris, coxa_direita, Coxa_esquerda, Panturrilha_direita, Panturrilha_esquerda, id_avaliacao) 
    VALUES (:pescoco, :biceps_direito, :biceps_esquerdo, :antebraco_direito, :antebraco_esquerdo, :peito, :cintura, :quadris, :coxa_direita, :Coxa_esquerda, :Panturrilha_direita, :Panturrilha_esquerda, :id_avaliacao)";
    $query = $conexao->prepare($sql);
    $query->bindParam(":pescoco", $pescoco);
    $query->bindParam(":biceps_direito", $bicepsD);
    $query->bindParam(":biceps_esquerdo", $bicepsE);
    $query->bindParam(":antebraco_direito", $antD);
    $query->bindParam(":antebraco_esquerdo", $antE);
    $query->bindParam(":peito", $peito);
    $query->bindParam(":cintura", $cintura);
    $query->bindParam(":quadris", $quadris);
    $query->bindParam(":coxa_direita", $coxaD);
    $query->bindParam(":Coxa_esquerda", $coxaE);
    $query->bindParam(":Panturrilha_direita", $pantD);
    $query->bindParam(":Panturrilha_esquerda", $pantE);
    $query->bindParam(":id_avaliacao", $IdA);
    $resultado = $query->execute();
    

    //header("Location: visualizarAvaliacao.php?idT=$idT&idU=$idU");

    
?>