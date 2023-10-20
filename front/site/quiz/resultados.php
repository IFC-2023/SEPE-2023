<?php
if (!isset($_SESSION)) {
    session_start();
}

include_once("../../../back/config.php");

$idMitologiaSession = $_SESSION['idMitologia'];
$recebendoId = "SELECT * FROM partida WHERE mitologia_id = " . intval($idMitologiaSession);
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

$imagem = '';
if ($idMitologiaSession === '1') {
    $imagem = '../../../back/imagens/mitologia-grega.jpg';
} else if ($idMitologiaSession === '2') {
    $imagem = '../../../back/imagens/mitologia-egipcia.jpg';
} else if ($idMitologiaSession === '3') {
    $imagem = '../../../back/imagens/mitologia-hindu.jpg';
} else if ($idMitologiaSession === '4') {
    $imagem = '../../../back/imagens/irlandesa/brigid-1.jpg';
} else if ($idMitologiaSession === '5') {
    $imagem = '../../../back/imagens/Prince_Hanzoku_terrorised_by_a_nine-_tailed_fox.jpg';
} else if ($idMitologiaSession === '6') {
    $imagem = '../../../back/imagens/mitologia-mesopotamica.jpg';
} else if ($idMitologiaSession === '7') {
    $imagem = '../../../back/imagens/mitologia-nordica.jpg';
} else if ($idMitologiaSession === '8') {
    $imagem = '../../../back/imagens/mitologia-romana.jpg';
} else if ($idMitologiaSession === '9') {
    $imagem = '../../../back/imagens/';
} else {
    echo "Id errado";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-quiz/resultados.css">
    <title>Resultados</title>
</head>

<body>

    <main>
        <section id="fim">
            <div id="congratulations">
                <img <?php echo "src=$imagem" ?> alt="" id="imagemMitologia">
                <p id="acertos"></p>
            </div>
        </section>

        <section>
            <?php
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
            ?>
        </section>
    </main>

    <script>
        let idCorMain = <?php echo $idMitologiaSession; ?>;
        let main = document.getElementsByTagName("main")[0]; // Acesse o primeiro elemento

        if (idCorMain === 1) {
            main.style.backgroundColor = "#342cc4";
        } else if (idCorMain === 2) {
            main.style.backgroundColor = "#BF8C60";
        } else if (idCorMain === 3) {
            main.style.backgroundColor = "#639FA6";
        } else if (idCorMain === 4) {
            main.style.backgroundColor = "#169b62";
        } else if (idCorMain === 5) {
            main.style.backgroundColor = "#CF435F";
        } else if (idCorMain === 6) {
            main.style.backgroundColor = "#9c612a";
        } else if (idCorMain === 7) {
            main.style.backgroundColor = "#639FA6";
        } else if (idCorMain === 8) {
            main.style.backgroundColor = "#639FA6";
        } else if (idCorMain === 9) {
            main.style.backgroundColor = "#800080";
        }
    </script>

</body>

</html>