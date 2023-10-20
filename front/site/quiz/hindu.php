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
    <link rel="stylesheet" href="css-quiz/animations-css/nordica.css">
    <script src="js/animacoes.js" defer></script>
    <script src="js/quiz.js" defer></script>
    <title>Quiz Hindu</title>
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
                        <li class="link-dropdown" id="linkIrlandesa"><a href="irlandesa.html">Irlandesa</a></li>
                        <li class="link-dropdown" id="linkJaponesa"><a href="japonesa.html">Japonesa</a></li>
                        <li id="link-dropdown-excessao"><a href="mesopotamica.html">Mesopotâmica</a></li>
                        <li class="link-dropdown"id="linkHindu"><a href="nordica.html">Nórdica</a></li>
                        <li class="link-dropdown" id="linkRomana"><a href="romana.html">Romana</a></li>
                        <li class="link-dropdown" id="linkGeral"><a href="geral.html">Geral</a></li>
                    </ul>
                </li>
                <li id="link-mitologia"><a href="../paginas/romana.html">MITOLOGIA HINDU</a></li>
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
                    <p class="pergunta">Quem é o deus supremo na mitologia hindu?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="certo">
                        <label>A - Vishnu</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Shiva</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Brahma</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Krishna</label>
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
                    <p class="pergunta">Como os deuses da mitologia Hindu geralmente se locomovem?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Usando tapetes mágicos</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Montando em criaturas míticas aladas</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="certo">
                        <label>C - Utilizando animais como veículos</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Voando por conta própria</label>
                    </div>
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta2">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-3">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 3:</h1>
                    <p class="pergunta">Qual deus é frequentemente retratado como o Senhor Supremo e o Criador do 
                    Universo na mitologia Hindu?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Vishnu</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="certo">
                        <label>B - Brahma</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Shiva</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Ganesha</label>
                    </div>
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta3">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-4">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 4:</h1>
                    <p class="pergunta">Qual é a trindade divina na mitologia hindu e quais são os papéis principais de cada deus nessa trindade?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" id="" value="certo">
                        <label>A - Brahma (criação), Vishnu (preservação), Shiva (destruição)</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="errado">
                        <label>B - Brahma (criação), Vishnu (preservação), Shiva (destruição)</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="errado">
                        <label>C - Shiva (criação), Vishnu (preservação), Brahma (destruição)</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="errado">
                        <label>D - Brahma (criação), Shiva (preservação), Vishnu (destruição)</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta4">
                    </div>
                </div>
            </section>
            
            <section id="secao-pergunta-5">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 5:</h1>
                    <p class="pergunta">Qual deusa da mitologia Hindu é frequentemente associada à prosperidade, 
                    riqueza e fortuna?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Saraswati</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Parvati</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" value="errado">
                        <label>C - Durga</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" value="certo">
                        <label>D - Lakshmi</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta5">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-6">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 6:</h1>
                    <p class="pergunta" id="ajustePergunta6">Qual é o papel de Hanuman na mitologia hindu e por que ele é reverenciado?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Hanuman é o deus da guerra que liderou os exércitos divinos na batalha.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Hanuman é o deus da sabedoria que ensinou aos humanos os segredos do conhecimento divino.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="certo">
                        <label>C - Hanuman é um herói macaco que ajudou Rama a resgatar Sita e é reverenciado por sua devoção e força.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Hanuman é um deus da natureza que governa sobre os animais e as plantas.</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta6">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-7">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 7:</h1>
                    <p class="pergunta">Qual é o conceito de karma na mitologia hindu e como ele influencia a vida e o destino das pessoas?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - O karma é uma divindade que decide o destino de cada pessoa com base em seus atos passados.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="certo">
                        <label>B - O karma é uma força cósmica que governa o ciclo de nascimento, morte e reencarnação, onde as ações de uma pessoa em vidas passadas afetam sua situação atual.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - O karma é um ritual hindu realizado para buscar a bênção dos deuses.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - O karma é uma prática de meditação usada para alcançar a iluminação espiritual.</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta7">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-8">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 8:</h1>
                    <p class="pergunta" id="ajustePergunta8">Qual é a importância do épico Ramayana na mitologia Hindu e quem são os principais personagens?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - O Ramayana é um tratado filosófico sobre a natureza da realidade, e os principais 
                        personagens são Ganesha, Lakshmi e Ravana.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="certo">
                        <label>B - O Ramayana é um épico que narra a jornada do príncipe Rama para resgatar sua esposa Sita, e os principais personagens incluem Rama, Sita, Lakshmana e o devoto macaco Hanuman.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - O Ramayana é um tratado militar sobre as estratégias de guerra, e os principais 
                        personagens são Arjuna, Draupadi e Krishna.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - O Ramayana é um manual de práticas espirituais avançadas, e os principais personagens são Brahma, Vishnu e Shiva.</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta8">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-9">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 9:</h1>
                    <p class="pergunta">Quem é o deus Rama e qual é a importância de sua história no "Ramayana" na mitologia hindu?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Rama é um deus menor que não desempenha um papel significativo na mitologia hindu.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="certo">
                        <label>B - Rama é um deus menor que não desempenha um papel significativo na mitologia hindu.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Rama é uma divindade marinha que controla as águas e protege os pescadores.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Rama é uma divindade marinha que controla as águas e protege os pescadores.</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta9">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-10">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 10:</h1>
                    <p class="pergunta" id="ajustePergunta10">Rama é uma divindade marinha que controla as águas e protege os pescadores.</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="certo">
                        <label>A - As divindades animais representam os aspectos naturais e espirituais da vida, ensinando-nos a viver em harmonia com a natureza.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - As divindades animais são consideradas deuses menores e não têm grande significado na mitologia hindu.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - As divindades animais são consideradas deuses menores e não têm grande significado na mitologia hindu.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - As divindades animais são consideradas deuses menores e não têm grande significado na mitologia hindu.</label>
                    </div>

                    <?php $_SESSION['idMitologia'] = "3"; ?>
            
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