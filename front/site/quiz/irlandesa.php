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
    <link rel="stylesheet" href="css-quiz/animations-css/irlandesa.css">
    <script src="js/animacoes.js" defer></script>
    <script src="js/quiz.js" defer></script>
    <title>Quiz Irlanda</title>
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
                        <li class="link-dropdown" id="linkJaponesa"><a href="japonesa.html">Japonesa</a></li>
                        <li id="link-dropdown-excessao"><a href="mesopotamica.html">Mesopotâmica</a></li>
                        <li class="link-dropdown" id="linkNordica"><a href="nordica.html">Nórdica</a></li>
                        <li class="link-dropdown" id="linkRomana"><a href="romana.html">Romana</a></li>
                        <li class="link-dropdown" id="linkGeral"><a href="geral.html">Geral</a></li>
                    </ul>
                </li>
                <li id="link-mitologia"><a href="../paginas/romana.html">MITOLOGIA IRLANDA</a></li>
                <li id="link-sair"><a href="../../../back/logout.php">SAIR</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <form action="irlandesa.html" id="formulario_quiz" method="post">
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
                    <p class="pergunta">Quem é considerado o deus supremo da mitologia irlandesa?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Cernunnos</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Brigid</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="certo">
                        <label>C - Lugh</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D -Morrigan</label>
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
                    <p class="pergunta">Qual criatura mítica é conhecida por guardar tesouros escondidos em potes de ouro no final do arco-íris?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Banshee</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Pooka</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Selkie</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="certo">
                        <label>D - Leprechaun</label>
                    </div>
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta2">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-3">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 3:</h1>
                    <p class="pergunta">Que deusa da mitologia irlandesa é associada à terra, à fertilidade e ao gado?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Aine</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="certo">
                        <label>B - Danu</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Macha</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label> D - Epona</label>
                    </div>
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta3">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-4">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 4:</h1>
                    <p class="pergunta">Qual guerreiro lendário da mitologia irlandesa é conhecido por ter derrotado um dragão?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" id="" value="certo">
                        <label> A - Cu Chulainn</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="errado">
                        <label> B -Fionn Mac Cumhaill</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="errado">
                        <label> C - Diarmuid Ua Duibhne</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="errado">
                        <label> D - Oisín</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta4">
                    </div>
                </div>
            </section>
            
            <section id="secao-pergunta-5">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 5:</h1>
                    <p class="pergunta">Quem era o grande herói que, de acordo com a lenda, fundou o Fianna, uma ordem de guerreiros na mitologia irlandesa?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" id="" value="errado">
                        <label> A - Lugh</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" id="" value="errado">
                        <label> B - Cú Roí</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" value="errado">
                        <label> C - Manannán mac Lir</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" value="certo">
                        <label> D - Finn McCool</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta5">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-6">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 6:</h1>
                    <p class="pergunta" id="ajustePergunta6">Qual ser mítico irlandês é conhecido por ser um metamorfo capaz de assumir a forma de vários animais, incluindo um cavalo, um lobo e uma águia?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label> A - Selkie</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="certo">
                        <label> B - Pooka</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label> C - Leprechaun</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label> D - Banshee</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta6">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-7">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 7:</h1>
                    <p class="pergunta" id="ajustePergunta7">Qual mito irlandês relata a batalha entre os deuses dos Tuatha Dé Danann e os seres subterrâneos conhecidos como os Fir Bolg?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label> A - Lebor Gabála Érenn</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label> B - Táin Bó Cúailnge</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="certo">
                        <label> C - Cath Maige Tuired</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label> D - Deirdre of the Sorrows</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta7">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-8">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 8:</h1>
                    <p class="pergunta" id="ajustePergunta8">Qual criatura lendária é muitas vezes associada à música e é conhecida por tocar melodias hipnotizantes em uma harpa mágica?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label> A - Kelpie</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label> B - Sidhe</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label> C - Clurichaun</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="certo">
                        <label> D - Aos Sí</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta8">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-9">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 9:</h1>
                    <p class="pergunta">Qual é o nome da lendária espada de Nuada Airgetlám, o rei dos Tuatha Dé Danann?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="certo">
                        <label> A - Caladbolg</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label> B - Fragarach</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label> C - Claíomh Solais</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Excalibur</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta9">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-10">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 10:</h1>
                    <p class="pergunta" id="ajustePergunta10">Qual personagem da mitologia irlandesa é conhecido por possuir o caldeirão da abundância, que nunca se esvazia e é capaz de trazer os mortos de volta à vida?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Brigid</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="certo">
                        <label>B - The Dagda</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Lugh</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Cú Chulainn</label>
                    </div>

                    <?php $_SESSION['idMitologia'] = "4"; ?>
            
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