<?php
if (!isset($_SESSION)) {
    session_start();
}

include_once('config.php');

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

    $totalAcertos = $contadorAcertos;
    $mitologia_nome = $_POST['tipo_quiz'];
    $mitologia_id = '';

    if ($mitologia_nome === 'grega') {
        $mitologia_id = '1';
    } else if ($mitologia_nome === 'egipcia') {
        $mitologia_id = '2';
    } else if ($mitologia_nome === 'hindu') {
        $mitologia_id = '3';
    } else if ($mitologia_nome === 'irlandesa') {
        $mitologia_id = '4';
    } else if ($mitologia_nome === 'japonesa') {
        $mitologia_id = '5';
    } else if ($mitologia_nome === 'mesopotamica') {
        $mitologia_id = '6';
    } else if ($mitologia_nome === 'nordica') {
        $mitologia_id = '7';
    } else if ($mitologia_nome === 'romana') {
        $mitologia_id = '8';
    } else if ($mitologia_nome === 'geral') {
        $mitologia_id = '9';
    }

    $inserirDados = "INSERT INTO partida (pontuacao, jogador_id, mitologia_id) VALUES ('$contadorAcertos', '" . $_SESSION['idUsuario'] . "', '$mitologia_id')";

    $resultado = mysqli_query($conexao, $inserirDados);

$recebendoId = "SELECT * FROM partida WHERE mitologia_id = " . intval($mitologia_id);
$result = mysqli_query($conexao, $recebendoId);
$objetosPartida = [];

while ($row = mysqli_fetch_assoc($result)) {
    $objetosPartida[] = array(
        "id" => $row['id'],
        "pontuacao" => $row['pontuacao'],
        "idJogador" => $row['jogador_id']
    );
}

function compararDecrescente($a, $b)
{
    if ($a['pontuacao'] == $b['pontuacao']) {
        return 0;
    }
    return ($a['pontuacao'] < $b['pontuacao']) ? 1 : -1;
}

usort($objetosPartida, 'compararDecrescente');

$idUsuario = '';
$qtdAcertos = '';

echo "<table id='tabela'>";
echo "<thead>";
echo "<th>Colocação</th>";
echo "<th>Nome</th>";
echo "<th>Pontuação</th>";
echo "</thead>";
for ($c = 0; $c < count($objetosPartida); $c++) {
    $idNum = intval($objetosPartida[$c]['idJogador']);
    $consultaIdTabela = "SELECT apelido FROM jogador WHERE id = $idNum";
    $resultadoNome = mysqli_query($conexao, $consultaIdTabela);
    if (!$resultadoNome) {
        die("Erro: " . mysqli_error($conexao));
    }
    $rowNome = mysqli_fetch_assoc($resultadoNome);
    $nome = $rowNome['apelido'];
    echo "<tr>";
    echo "<td>" . $c + 1 . "</td>";
    echo "<td>" . $nome . "</td>";
    echo "<td>" . $objetosPartida[$c]['pontuacao'] . "/10</td>";
    echo "</tr>";
}
echo "</table>";
}
?>
