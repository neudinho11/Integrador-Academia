<?php
    session_start();
    include "verificaLogin.php";
    require_once "functions.php";
?>

<?php
    $idU = $_SESSION["usuario"];
    $idT = $_SESSION["matricula"];

    $dataC = $_POST["txtDataCri"];
    $dataV = $_POST["txtDataVali"];
    $diasT = $_POST["txtDiasTr"];
    $obj = $_POST["txtObj"];
    $obs = $_POST["txtObs"];
    $ttlExerc = $_POST["ttlExerc"];

    for($i = 0; $i <= $ttlExerc; $i++){
        $nome[$i] = $_POST["nome$i"];
        $parte[$i] = $_POST["parte$i"];
        $series[$i] = $_POST["series$i"];
        $repet[$i] = $_POST["repet$i"];
        $dia[$i] = $_POST["dia$i"];
        
    }
    echo "<br><br><br><br>". $_POST["ttlExerc"];
    

    $conexao = conexaoBD();

    $sql = "SELECT id_treinador FROM treinador WHERE matricula = :matricula";
    $query = $conexao->prepare($sql);
    $query->bindParam(":matricula", $idT);
    $resultado = $query->execute();
    $treinador = $query->fetch(PDO::FETCH_ASSOC);
    
    $idT= $treinador["id_treinador"];

    $sql = "INSERT INTO treino (dias_treino, objetivo, observacoes) VALUES (:dias_treino, :objetivo, :observacoes)";
    $query = $conexao->prepare($sql);
    $query->bindParam(":dias_treino", $diasT);
    $query->bindParam(":objetivo", $obj);
    $query->bindParam(":observacoes", $obs);
    $resultado = $query->execute();
    $idTr = $conexao->lastInsertId();

    $sql = "INSERT INTO trein_usua_treino (data_criacao, data_validade, id_treinador, id_usuario, id_treino) 
    VALUES (:data_criacao, :data_validade, :id_treinador, :id_usuario, :id_treino)";
    $query = $conexao->prepare($sql);
    $query->bindParam(":data_criacao", $dataC);
    $query->bindParam(":data_validade", $dataV);
    $query->bindParam(":id_treinador", $idT);
    $query->bindParam(":id_usuario", $idU);
    $query->bindParam(":id_treino", $idTr);
    $resultado = $query->execute();

    for($i = 0; $i <= $ttlExerc; $i++){
        $sql = "INSERT INTO exercicio (parte_corpo, nome_exercicio, series, repeticoes, dia_semana) 
        VALUES (:parte_corpo, :nome_exercicio, :series, :repeticoes, :dia_semana)";
        $query = $conexao->prepare($sql);
        $query->bindParam(":parte_corpo", $nome[$i]);
        $query->bindParam(":nome_exercicio", $parte[$i]);
        $query->bindParam(":series", $series[$i]);
        $query->bindParam(":repeticoes", $repet[$i]);
        $query->bindParam(":dia_semana", $dia[$i]);
        $resultado = $query->execute();
        $idEx = $conexao->lastInsertId();

        $sql = "INSERT INTO treino_exercicio (id_treino, id_exercicio) 
        VALUES (:id_treino, :id_exercicio)";
        $query = $conexao->prepare($sql);
        $query->bindParam(":id_treino", $idTr);
        $query->bindParam(":id_exercicio", $idEx);
        $resultado = $query->execute();
    }
    

    header("Location: visualizarTreino.php?idTr=$idTr");

?>