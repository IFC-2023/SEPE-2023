<?php
if (!isset($_SESSION)) {
    session_start();
}

include_once("config.php");

include('../../../back/protecao.php');

if (isset($_POST['submit'])) {
    $arrayContador = [];
    $q1 = $_POST['questao1'];
    $q2 = $_POST['questao2'];
    $q3 = $_POST['questao3'];
    $q4 = $_POST['questao4'];
    $q5 = $_POST['questao5'];
    $q6 = $_POST['questao6'];
    $q7 = $_POST['questao7'];
    $q8 = $_POST['questao8'];
    $q9 = $_POST['questao9'];
    $q10 = $_POST['questao10'];
    array_push($arrayContador, $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10);
    $contadorAcertos = array_reduce($arrayContador, function ($soma, $valor) {
        if ($valor === "certo") {
            return $soma + 1;
        }
    }, 0);

    $idUsuarioSession = $_SESSION['idUsuario'];
    $idMitologiaSession = $_SESSION['idMitologia'];
    $totalAcertos = $contadorAcertos;
    $verificacaoDados = "SELECT * FROM partida WHERE jogador_id = '" . intval($idUsuarioSession) . "' AND mitologia_id = " . intval($idMitologiaSession);
    $resultadoVerificacao = mysqli_query($conexao, $verificacaoDados);


    if ($resultadoVerificacao->num_rows > 0) {
        $updateDados = mysqli_query($conexao, "UPDATE partida SET pontuacao = '$contadorAcertos' WHERE jogador_id = '" . intval($idUsuarioSession) . "' AND mitologia_id = " . intval($idMitologiaSession));
    } else {
        $inserirDados = "INSERT INTO partida (pontuacao, jogador_id, mitologia_id) VALUES ('$contadorAcertos', '" . $_SESSION['idUsuario'] . "', '" . $_SESSION['idMitologia'] . "')";

        $resultado = mysqli_query($conexao, $inserirDados);
    }

    $verificacaoInsert = mysqli_query($conexao, "SELECT * FROM partida WHERE jogador_id = " . intval($idUsuarioSession) . " AND mitologia_id = " . intval($idMitologiaSession));

    if ($verificacaoInsert -> num_rows > 0) {
        header('Location: http://localhost/SEPE/front/site/quiz/resultados.php');
    }
}
?>