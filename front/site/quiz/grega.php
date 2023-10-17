<?php
if (!isset($_SESSION)) {
    session_start();
}

include_once('../../../back/config.php');

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
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-quiz/animations-css/grecia.css">
    <script src="js/animacoes.js" defer></script>
    <script src="js/quiz.js" defer></script>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
        }
    </style>
    <title>Quiz Grécia</title>
</head>

<body>
    <header>
        <nav>
            <ul class="lista-nav">
                <li id="link-home"><a href="../paginas/index.html">HOME</a></li>
                <li>
                    <a href="#">QUIZ <span id="seta-baixo">&darr;</span></a>
                    <ul class="dropdown">
                        <li id="margin-top-dropdown"><a href="egipcia.html">Egípcia</a></li>
                        <li class="link-dropdown" id="linkGrecoRomana"><a href="greco-romana.html">Greco-Romana</a></li>
                        <li class="link-dropdown" id="linkHindu"><a href="hindu.html">Hindu</a></li>
                        <li class="link-dropdown" id="linkIrlandesa"><a href="irlandesa.html">Irlandesa</a></li>
                        <li id="link-dropdown-excessao"><a href="mesopotamica.html">Mesopotâmica</a></li>
                        <li class="link-dropdown" id="linkNordica"><a href="nordica.html">Nórdica</a></li>
                        <li class="link-dropdown" id="linkRomana"><a href="romana.html">Romana</a></li>
                        <li class="link-dropdown" id="linkGeral"><a href="geral.html">Geral</a></li>
                    </ul>
                </li>
                <li id="link-mitologia"><a href="../paginas/grega.html">MITOLOGIA GREGA</a></li>
                <li><a href="../../../back/logout.php">SAIR</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <form action="grega.php" method="post" id="formulario_quiz">
            <section id="introducao">
                <h1>Antes de começar vamos explicar como ira funcionar o quiz:</h1>

                <input type="text" name="tipo_quiz" id="" disabled value="grega">

                <ol>
                    <li>O quiz terá 10 perguntas, essas perguntas serão separadas em 3 niveis: fácil, intermediário e díficil. Serão 3 perguntas fáceis, 3 perguntas intermediárias e 4 perguntas difíceis.</li>
                    <li>Cada pergunta terá 4 alternativas: A, B, C e D</li>
                    <li>Orientação: As respostas para as perguntas estarão todas nos textos da página da respectiva mitologia, então leia os textos antes de fazer o quiz!</li>
                    <li>E por último, é proibido pesquisar as respostas no google!</li>
                </ol>

                <h2>Eae, está preparado(a)? Então vamos começar!</h2>

                <input type="button" value="COMEÇAR" id="btnComecar">
            </section>

            <section id="secao-pergunta-1">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 1:</h1>
                    <p class="pergunta">Quem é considerado o rei dos deuses na mitologia grega?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Apolo</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Ares</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="certo">
                        <label>C - Zeus</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D -Dionísio</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta1">
                    </div>
                </div>
            </section>

            <section id="res-certa">
                <div id="fraseCerta">
                    <h1>Resposta Certa!</h1>
                </div>
                <div class="proximo">
                    <input type="button" value="Próximo" id="btnCerta1"> <span>&rarr;</span>
                </div>
            </section>

            <section id="res-errada">
                <div id="fraseErrada">
                    <h1>Resposta Errada!</h1>
                </div>
                <div class="proximo">
                    <input type="button" value="Próximo" id="btnErrada1"><span>&rarr;</span>
                </div>
            </section>

            <section id="secao-pergunta-2">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 2:</h1>
                    <p class="pergunta">Qual é o nome da deusa grega da sabedoria, da estratégia e da guerra justa?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Afrodite</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="certo">
                        <label>B - Atena</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Deméter</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Héstia</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta2">
                    </div>
                </div>
            </section>

            <section id="secao-pergunta-3">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 3:</h1>
                    <p class="pergunta">Qual é o nome do herói grego conhecido por sua força extraordinária e seus Doze Trabalhos?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Perseu</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Teseu</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Édipo</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="certo">
                        <label> D - Hércules</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta3">
                    </div>
                </div>
            </section>

            <section id="secao-pergunta-4">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 4:</h1>
                    <p class="pergunta">Explique o mito da criação do mundo na mitologia grega, incluindo os titãs e os deuses olímpicos.</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" id="" value="errado">
                        <label>Na mitologia grega, o mundo foi criado por um único deus, Zeus.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="certo">
                        <label>Na mitologia grega, o mundo começou com o Caos, seguido pelos titãs, que foram sucedidos pelos deuses olímpicos, liderados por Zeus.</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta4">
                    </div>
                </div>
            </section>

            <section id="secao-pergunta-5">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 5:</h1>
                    <p class="pergunta">Qual é a história do mito de Prometeu e por que ele é castigado por Zeus?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" id="" value="errado">
                        <label>Prometeu não é uma figura mitológica grega.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" id="" value="errado">
                        <label>Prometeu é recompensado por Zeus por seus serviços à humanidade.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" value="certo">
                        <label>Prometeu rouba o fogo dos deuses para dar aos humanos, o que enfurece Zeus, levando-o a punir Prometeu de maneira terrível.</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta5">
                    </div>
                </div>
            </section>

            <section id="secao-pergunta-6">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 6:</h1>
                    <p class="pergunta">Quem são os principais deuses do Olimpo na mitologia grega e quais são suas áreas de domínio?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label>Os principais deuses do Olimpo são Hades, Poseidon e Afrodite, que governam sobre a morte, o mar e o amor, respectivamente.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="certo">
                        <label>Os principais deuses do Olimpo são Zeus (deus dos céus e rei dos deuses), Hera (deusa do casamento e da família), Atena (deusa da sabedoria e da estratégia), Apolo (deus das artes e da música) e muitos outros, cada um com áreas de domínio específicas.</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta6">
                    </div>
                </div>
            </section>

            <section id="secao-pergunta-7">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 7:</h1>
                    <p class="pergunta">Explique a história de Ícaro na mitologia grega e como ela se relaciona com Dédalo.</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label>Ícaro não é uma figura mitológica grega.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label>Ícaro é um deus menor sem uma história relevante.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="certo">
                        <label>Ícaro é o filho de Dédalo, um habilidoso artesão e inventor. Eles tentaram escapar de Creta voando com asas feitas de penas e cera, mas Ícaro voou muito perto do sol e caiu no mar.</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta7">
                    </div>
                </div>
            </section>

            <section id="secao-pergunta-8">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 8:</h1>
                    <p class="pergunta">Explique a história de Ícaro na mitologia grega e como ela se relaciona com Dédalo.</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="certo">
                        <label>As Moiras são deusas do destino, que tecem, medem e cortam o fio da vida de cada mortal, determinando seu destino.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label>As Moiras são guerreiras que protegem os mortais em batalhas.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label>As Moiras são deusas do amor e da beleza na mitologia grega.</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta8">
                    </div>
                </div>
            </section>

            <section id="secao-pergunta-9">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 9:</h1>
                    <p class="pergunta">Explique o mito de Édipo na mitologia grega e como ele lida com seu destino trágico.</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label>Édipo não é uma figura mitológica grega.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label>Édipo é um herói que derrota monstros em várias jornadas.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="certo">
                        <label>Édipo é um homem que, sem saber, mata seu pai e se casa com sua mãe, cumprindo uma terrível profecia. Quando descobre a verdade, ele se cega e se exila.</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta9">
                    </div>
                </div>
            </section>

            <section id="secao-pergunta-10">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 10:</h1>
                    <p class="pergunta">Quem são os Argonautas e qual é a missão lendária que realizaram na mitologia grega?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>Os Argonautas são deuses menores sem uma missão lendária.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="certo">
                        <label>Os Argonautas são um grupo de heróis liderados por Jasão, que embarcaram na busca pelo Velocino de Ouro, uma missão épica repleta de desafios e aventuras.
                        </label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>Os Argonautas são monstros marinhos temidos pelos marinheiros gregos.</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="submit" value="Terminar" id="btnPergunta10" name="submit">
                    </div>
                </div>
            </section>
        </form>

        <section id="fim">
            <div id="congratulations">
                <img src="../../../back/imagens/mitologia-grega.jpg" alt="fundo-grega">
                <p id="acertos">Parabéns, Você acertou 9 de 10 questões!</p>
            </div>
            <div id="tabelaContainer"></div>
        </section>
    </main>

    <script>
        let tabelaContainer = document.getElementById("tabelaContainer");
        document.getElementById('formulario_quiz').addEventListener('submit', function() {

            // Coleta os dados do formulário.
            var formData = new FormData(this);

            // Crie uma instância do objeto XMLHttpRequest para fazer a solicitação AJAX.
            var xhr = new XMLHttpRequest();

            // Configure a solicitação AJAX.
            xhr.open('POST', 'http://localhost/SEPE/back/tabela.php', true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

            // Defina uma função a ser executada quando a solicitação estiver concluída.
            xhr.onload = function() {
                if (xhr.status >= 200 && xhr.status < 300) {
                    // A solicitação foi bem-sucedida. Manipule a resposta do servidor e insira a tabela.
                    tabelaContainer.innerHTML = xhr.responseText;
                } else {
                    // A solicitação falhou. Trate o erro aqui, se necessário.
                    console.log('Erro na solicitação');
                }
            };


            // Envie a solicitação com os dados do formulário.
            xhr.send(formData);
        });
    </script>
</body>

</html>