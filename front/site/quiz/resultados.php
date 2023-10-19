<?php
if (isset($_POST['submit'])) {
    $recebendoId = "SELECT * FROM partida WHERE mitologia_id = 1";
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