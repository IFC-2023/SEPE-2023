<?php
if (!isset($_SESSION)) {
    session_start();
}

include_once("../../../back/config.php");
include_once("../../../back/processar.php");

$sessaoAcertos = $_SESSION['acertos'];
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
    $imagem = '../../../back/imagens/japonesa/Prince_Hanzoku_terrorised_by_a_nine-_tailed_fox.jpg';
} else if ($idMitologiaSession === '6') {
    $imagem = '../../../back/imagens/mitologia-mesopotamica.webp';
} else if ($idMitologiaSession === '7') {
    $imagem = '../../../back/imagens/mitologia-nordica.webp';
} else if ($idMitologiaSession === '8') {
    $imagem = '../../../back/imagens/mitologia-romana.webp';
} else if ($idMitologiaSession === '9') {
    $imagem = '../../../back/imagens/';
} else {
    echo "Id errado";
}

$_SESSION['IdMitologia'] = '';
$_SESSION['acertos'] = '';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-quiz/animations-css/resultados.css">
    <script src="js/animacoes.js" defer></script>
    <title>Resultados</title>
    <style>
        #acertos {
            color: #000;
            position: relative;
            bottom: 50px;
            background-color: rgba(255, 255, 255, 0.959);
            left: 103px;
            width: 562px;
            height: 45px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }
    </style>
</head>

<body>

    <header>
        <nav>
            <ul class="lista-nav">
                <li id="link-home"><a href="../paginas/index.php">HOME</a></li>
                <li>
                    <a href="#">QUIZ <span id="seta-baixo">&darr;</span></a>
                    <ul class="dropdown">
                        <li id="margin-top-dropdown"><a href="egipcia.php">Egípcia</a></li>
                        <li class="link-dropdown" id="linkGrecia"><a href="grega.php">Grega</a></li>
                        <li class="link-dropdown" id="linkHindu"><a href="hindu.php">Hindu</a></li>
                        <li class="link-dropdown" id="linkIrlandesa"><a href="irlandesa.php">Irlandesa</a></li>
                        <li class="link-dropdown" id="linkJaponesa"><a href="japonesa.php">Japonesa</a></li>
                        <li id="link-dropdown-excessao"><a href="mesopotamica.php">Mesopotâmica</a></li>
                        <li class="link-dropdown" id="linkNordica"><a href="nordica.php">Nórdica</a></li>
                        <li class="link-dropdown" id="linkRomana"><a href="romana.php">Romana</a></li>
                    </ul>
                </li>
                <li id="link-sair"><a href="../../../back/logout.php">SAIR</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="fim">
            <div id="congratulations">
                <img <?php echo "src=$imagem" ?> alt="" id="imagemMitologia">
                <div id="acertos">
                    <p id="parabens">Parabéns, você acertou
                        <?php echo "$sessaoAcertos" ?> de 10!
                    </p>
                </div>
            </div>

            <div id="div_tabela">
                <h1>Ranking</h1>
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
                    echo "<td>" . ($c + 1) . "</td>";
                    echo "<td>" . $nome . "</td>";
                    echo "<td>" . $objetosPartida[$c]['pontuacao'] . "/10</td>";
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>
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