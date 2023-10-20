<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-quiz/animations-css/geral.css">
    <script src="js/animacoes.js" defer></script>
    <script src="js/quiz.js" defer></script>
    <title>Quiz Geral</title>
</head>
<body>
    <header>
        <nav>
            <ul class="lista-nav">
                <li id="link-home"><a href="../paginas/index.php">HOME</a></li>
                <li>
                    <a href="#">QUIZ <span id="seta-baixo">&darr;</span></a>
                    <ul class="dropdown">
                        <li id="margin-top-dropdown"><a href="egipcia.html">Egípcia</a></li>
                        <li class="link-dropdown" id="linkGrecia"><a href="grega.php">Grécia</a></li>
                        <li class="link-dropdown"id="linkHindu"><a href="hindu.html">Hindu</a></li>
                        <li class="link-dropdown" id="linkIrlandesa"><a href="irlandesa.html">Irlandesa</a></li>
                        <li class="link-dropdown" id="linkJaponesa"><a href="japonesa.html">Japonesa</a></li>
                        <li id="link-dropdown-excessao"><a href="mesopotamica.html">Mesopotâmica</a></li>
                        <li class="link-dropdown" id="linkNordica"><a href="nordica.html">Nórdica</a></li>
                        <li class="link-dropdown" id="linkRomana"><a href="romana.html">Romana</a></li>
                    </ul>
                </li>
                <li id="link-sair"><a href="../../../back/logout.php">SAIR</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <form action="" id="formulario_quiz" method="post">
            <section id="introducao">
                <h1>Antes de começar vamos explicar como ira funcionar o quiz:</h1>
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
                    <p class="pergunta">Qual dos seguintes ciclos é um dos principais ciclos da mitologia irlandesa?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Ciclo Mitológico</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Ciclo Feniano</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="certo">
                        <label>C - Ciclo Ulster</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Ciclo Histórico</label>
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
                    <p class="pergunta">Sobre a mitologia egipcia: Quais são os Neterus e sua ordem?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Geradores, Primordiais, Primeira Geração e Segunda Geração</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Primeira Geração, Segunda Geração, Genitores e Primeiro</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Progenitores, Primeira Geração, Segunda Geração e Terceira Geração</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="certo">
                        <label>D - Primordiais, Geradores, Primeira Geração e Segunda Geração</label>
                    </div>
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta2">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-3">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 3:</h1>
                    <p class="pergunta">Sobre a mitologia hindu: como também pode ser chamada a trindade dos principais deuses?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="certo">
                        <label>A - Trimurti</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Trimuri</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Muriti</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Muriri</label>
                    </div>
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta3">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-4">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 4:</h1>
                    <p class="pergunta">Dá mitologia mesopotamica: Os objetos e a tumba que abrigava o corpo do falecido indicava o que?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Como a pessoa faleceu</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="certo">
                        <label>B - Riqueza</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="errado">
                        <label>C - Terras</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="errado">
                        <label>D - Como era amado</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta4">
                    </div>
                </div>
            </section>
            
            <section id="secao-pergunta-5">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 5:</h1>
                    <p class="pergunta">Quantas mitologias apresentadas não tem influência na história?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" id="" value="certo">
                        <label>A - 0</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - 5</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" value="errado">
                        <label>C - 3</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" value="errado">
                        <label>D - 1</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta5">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-6">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 6:</h1>
                    <p class="pergunta">Como era a relação da vida dos romanos com a religião?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="certo">
                        <label>A - Durante muito tempo a vida dos romanos estava intimamente relacionada com a religião politeísta e, portanto, com os deuses do panteão romano. Eram eles que favoreciam as colheitas, a saúde, a proteção, a harmonia e a prosperidade entre os homens.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Na Roma Antiga, a religião tinha um papel mínimo na vida cotidiana dos romanos, que eram predominantemente secularizados e não tinham muita relação com os deuses.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="certo">
                        <label>C - Os romanos sempre mantiveram uma religião estritamente monoteísta, adorando apenas um deus supremo, e a vida cotidiana não estava diretamente relacionada a um panteão de divindades.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Os romanos eram completamente ateus e não se envolviam em práticas religiosas ou rituais, pois consideravam a religião irrelevante para suas vidas.</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta6">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-7">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 7:</h1>
                    <p class="pergunta">Qual é o objetivo principal da mitologia grega?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="certo">
                        <label> A - O objetivo principal era de explicar alguns fatos, como a origem da vida, a vida após a morte, ou até mesmo os fenômenos da natureza. Assim, a criação das narrativas fantásticas que englobam a mitologia grega foi a maneira encontrada pelos gregos para preservarem sua história.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label> B - A mitologia grega tinha como objetivo principal a promoção de uma única religião e moral específica, para orientar a conduta dos gregos em todos os aspectos de suas vidas.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label> C - A mitologia grega era exclusivamente uma forma de entretenimento, criada para divertir as pessoas com histórias fictícias e não tinha nenhum propósito mais profundo.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label> D - A mitologia grega foi desenvolvida para fins políticos, com o objetivo de consolidar o poder de líderes e governantes, fornecendo-lhes uma base mitológica para justificar seu domínio.</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta7">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-8">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 8:</h1>
                    <p class="pergunta">Como Odin, um dos maiores deuses da mitologia nordica, perdeu o olho?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Odin perdeu o olho em uma batalha contra um gigante do gelo, que arrancou seu olho durante o confronto. Isso aconteceu durante a lendária guerra dos nove reinos, uma guerra que envolveu todas as terras da mitologia nordica</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="certo">
                        <label>B - Odin arrancou o seu propio olho pois ele acreditava que a inteligência valia qualquer preço e às vezes era preciso fazer sacrifícios. Para desvendar as runas nórdicas, em uma ocasião, ele chegou a se enforcar, se esfaquear e passar mais de uma semana sem comer.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Odin perdeu o olho como parte de um acordo com um troll, que exigiu o olho como pagamento para salvar seu reino da destruição.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Odin perdeu o olho como punição por quebrar uma regra celestial, em que ele foi temporariamente cegado por um deus mais poderoso como castigo.</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta8">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-9">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 9:</h1>
                    <p class="pergunta">Sobre a mitologia japonesa, o que são as regioes?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - As "regiões" na mitologia japonesa se referem a divisões geográficas do Japão, sem qualquer significado espiritual ou mitológico.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - As "regiões" na mitologia japonesa representam diferentes períodos históricos da história do Japão, sem relação com divindades ou entidades míticas.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="certo">
                        <label>C - As "regiões" geralmente se referem a diferentes reinos ou domínios associados a deidades específicas, e muitas vezes são consideradas como lugares de poderes divinos ou locais de grande importância na cosmologia japonesa.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - As "regiões" na mitologia japonesa são apenas um conceito literário e poético, não tendo nenhuma base real ou mítica na tradição japonesa.</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta9">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-10">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 10:</h1>
                    <p class="pergunta">Uma similaridade entre todas as mitologias é o fato de:</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Todas as mitologias têm a mesma narrativa e história central, apenas com nomes de deuses e heróis diferentes.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="certo">
                        <label>B - Exercerem uma grande influencia nos seus respectivos povos</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Todas as mitologias são baseadas em eventos históricos reais, e não têm elementos míticos ou sobrenaturais.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Todas as mitologias compartilham os mesmos ensinamentos morais e éticos, sem variação nas lições transmitidas aos seus respectivos povos.</label>
                    </div>

                    <?php $_SESSION['idMitologia'] = "9"; ?>
            
                    <div class="buttonResponder">
                        <input type="button" value="Terminar" id="btnPergunta10">
                    </div>
                </div>
            </section>
        </form>

        <section id="fim">
            <h1>Fim, obrigado por participar!</h1>

            <p id="acertos"></p>
        </section>
    </main>
</body>
</html>