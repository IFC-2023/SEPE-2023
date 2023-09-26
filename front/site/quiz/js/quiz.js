const pg1 = document.getElementById("secao-pergunta-1");
const pg2 = document.getElementById("secao-pergunta-2");
const pg3 = document.getElementById("secao-pergunta-3");
const pg4 = document.getElementById("secao-pergunta-4");
const pg5 = document.getElementById("secao-pergunta-5");
const pg6 = document.getElementById("secao-pergunta-6");
const pg7 = document.getElementById("secao-pergunta-7");
const pg8 = document.getElementById("secao-pergunta-8");
const pg9 = document.getElementById("secao-pergunta-9");
const pg10 = document.getElementById("secao-pergunta-10");
const fim = document.getElementById("fim");
const resCerta = document.getElementById("res-certa");
const resErrada = document.getElementById("res-errada");
let contadorAcertos = 0;

function comecar() {
    const introducao = document.getElementById("introducao");
    const dropdown = document.querySelectorAll("ul li ul.dropdown a");

    introducao.style.display = "none";
    pg1.style.display = "grid";
}

document.getElementById("btnComecar").addEventListener("click", comecar);

function responder1() {
    let resposta = document.getElementsByName("questao1");
    let valorResposta = "";

    for (let c = 0; c < resposta.length; c++) {
        if (resposta[c].checked) {
            valorResposta = resposta[c].value;
            if (valorResposta === "certo") {
                pg1.style.display = "none";
                resCerta.style.display = "grid";
                contadorAcertos++
                setTimeout (() => {
                    resCerta.style.display = "none";
                    pg2.style.display = "grid";
                }, 1500);
            } else if (valorResposta === "errado") {
                pg1.style.display = "none";
                resErrada.style.display = "grid";
                setTimeout (() => {
                    resErrada.style.display = "none";
                    pg2.style.display = "grid";
                }, 1500);
            }
            break;
        }
    }
}

document.getElementById("btnPergunta1").addEventListener("click", responder1);

function responder2() {
    let resposta = document.getElementsByName("questao2");
    let valorResposta = "";

    for (let c = 0; c < resposta.length; c++) {
        if (resposta[c].checked) {
            valorResposta = resposta[c].value;
            if (valorResposta === "certo") {
                pg2.style.display = "none";
                resCerta.style.display = "grid";
                contadorAcertos++
                setTimeout(() => {
                    resCerta.style.display = "none";
                    pg3.style.display = "grid";
                }, 1500);
            } else if (valorResposta === "errado") {
                pg2.style.display = "none";
                resErrada.style.display = "grid";
                setTimeout(() => {
                    resErrada.style.display = "none";
                    pg3.style.display = "grid";
                }, 1500);
            }
            break;
        }
    }
}

document.getElementById("btnPergunta2").addEventListener("click", responder2);

function responder3() {
    let resposta = document.getElementsByName("questao3");
    let valorResposta = "";

    for (let c = 0; c < resposta.length; c++) {
        if (resposta[c].checked) {
            valorResposta = resposta[c].value;
            if (valorResposta === "certo") {
                pg3.style.display = "none";
                resCerta.style.display = "grid";

                setTimeout(() => {
                    contadorAcertos++
                    resCerta.style.display = "none";
                    pg4.style.display = "grid";
                }, 1500);

            } else if (valorResposta === "errado") {
                pg3.style.display = "none";
                resErrada.style.display = "grid";

                setTimeout(() => {
                    resErrada.style.display = "none";
                    pg4.style.display = "grid";
                }, 1500);
            }
            break;
        }
    }
}

document.getElementById("btnPergunta3").addEventListener("click", responder3);

function responder4() {
    let resposta = document.getElementsByName("questao4");
    let valorResposta = "";

    for (let c = 0; c < resposta.length; c++) {
        if (resposta[c].checked) {
            valorResposta = resposta[c].value;
            if (valorResposta === "certo") {
                pg4.style.display = "none";
                resCerta.style.display = "grid";
                contadorAcertos++
                setTimeout(() => {
                    resCerta.style.display = "none";
                    pg5.style.display = "grid";
                }, 1500);
            } else if (valorResposta === "errado") {
                pg4.style.display = "none";
                resErrada.style.display = "grid";
                setTimeout(() => {
                    resErrada.style.display = "none";
                    pg5.style.display = "grid";
                }, 1500);
            }
            break;
        }
    }
}

document.getElementById("btnPergunta4").addEventListener("click", responder4);

function responder5() {
    let resposta = document.getElementsByName("questao5");
    let valorResposta = "";

    for (let c = 0; c < resposta.length; c++) {
        if (resposta[c].checked) {
            valorResposta = resposta[c].value;
            if (valorResposta === "certo"){
                pg5.style.display = "none";
                resCerta.style.display = "grid";
                contadorAcertos++
                setTimeout(() => {
                    resCerta.style.display = "none";
                    pg6.style.display = "grid";
                }, 1500);
            } else if (valorResposta === "errado") {
                pg5.style.display = "none";
                resErrada.style.display = "grid";
                setTimeout(() => {
                    resErrada.style.display = "none";
                    pg6.style.display = "grid";
                }, 1500);
            }
            break;
        }
    }
}

document.getElementById("btnPergunta5").addEventListener("click", responder5);

function responder6() {
    let resposta = document.getElementsByName("questao6");
    let valorResposta = "";

    for (let c = 0; c < resposta.length; c++) {
        if (resposta[c].checked) {
            valorResposta = resposta[c].value;
            if (valorResposta === "certo"){
                pg6.style.display = "none";
                resCerta.style.display = "grid";
                contadorAcertos++
                setTimeout(() => {
                    resCerta.style.display = "none";
                    pg7.style.display = "grid";
                }, 1500);
            } else if (valorResposta === "errado") {
                pg6.style.display = "none";
                resErrada.style.display = "grid";
                setTimeout(() => {
                    resErrada.style.display = "none";
                    pg7.style.display = "grid";
                }, 1500);
            }
            break;
        }
    }
}

document.getElementById("btnPergunta6").addEventListener("click", responder6);

function responder7() {
    let resposta = document.getElementsByName("questao7");
    let valorResposta = "";

    for (let c = 0; c < resposta.length; c++) {
        if (resposta[c].checked) {
            valorResposta = resposta[c].value;
            if (valorResposta === "certo"){
                pg7.style.display = "none";
                resCerta.style.display = "grid";
                contadorAcertos++
                setTimeout(() => {
                    resCerta.style.display = "none";
                    pg8.style.display = "grid";
                }, 1500);
            } else if (valorResposta === "errado") {
                pg7.style.display = "none";
                resErrada.style.display = "grid";
                setTimeout(() => {
                    resErrada.style.display = "none";
                    pg8.style.display = "grid";
                }, 1500);
            }
            break;
        }
    }
}

document.getElementById("btnPergunta7").addEventListener("click", responder7);

function responder8() {
    let resposta = document.getElementsByName("questao8");
    let valorResposta = "";

    for (let c = 0; c < resposta.length; c++) {
        if (resposta[c].checked) {
            valorResposta = resposta[c].value;
            if (valorResposta === "certo"){
                pg8.style.display = "none";
                resCerta.style.display = "grid";
                contadorAcertos++
                setTimeout(() => {
                    resCerta.style.display = "none";
                    pg9.style.display = "grid";
                }, 1500);
            } else if (valorResposta === "errado") {
                pg8.style.display = "none";
                resErrada.style.display = "grid";
                setTimeout(() => {
                    resErrada.style.display = "none";
                    pg9.style.display = "grid";
                }, 1500);
            }
            break;
        }
    }
}

document.getElementById("btnPergunta8").addEventListener("click", responder8);

function responder9() {
    let resposta = document.getElementsByName("questao9");
    let valorResposta = "";

    for (let c = 0; c < resposta.length; c++) {
        if (resposta[c].checked) {
            valorResposta = resposta[c].value;
            if (valorResposta === "certo"){
                pg9.style.display = "none";
                resCerta.style.display = "grid";
                contadorAcertos++
                setTimeout(() => {
                    resCerta.style.display = "none";
                    pg10.style.display = "grid";
                }, 1500);
            } else if (valorResposta === "errado") {
                pg9.style.display = "none";
                resErrada.style.display = "grid";
                setTimeout(() => {
                    resErrada.style.display = "none";
                    pg10.style.display = "grid";
                }, 1500);
            }
            break;
        }
    }
}

document.getElementById("btnPergunta9").addEventListener("click", responder9);

function responder10() {
    let resposta = document.getElementsByName("questao10");
    let valorResposta = "";

    for (let c = 0; c < resposta.length; c++) {
        if (resposta[c].checked) {
            valorResposta = resposta[c].value;
            if (valorResposta === "certo"){
                pg10.style.display = "none";
                resCerta.style.display = "grid";
                contadorAcertos++
                setTimeout(() => {
                    resCerta.style.display = "none";
                    fim.style.display = "grid";
                }, 1500);
            } else if (valorResposta === "errado") {
                pg10.style.display = "none";
                resErrada.style.display = "grid";
                setTimeout(() => {
                    resErrada.style.display = "none";
                    fim.style.display = "grid";
                }, 1500);
            }
            break;
        }
    }
}

document.getElementById("btnPergunta10").addEventListener("click", responder10);

function resultado() {
if (contadorAcertos >= 8) {
    document.getElementById("acertos").innerHTML = `<strong>Parabéns!</strong> Você acertou <strong>${contadorAcertos}</strong> de 10 questões.`;
} else if (contadorAcertos >= 5 && contadorAcertos <= 7) {
    document.getElementById("acertos").innerHTML = `Está na média, mas dá pra melhorar! Você acertou <strong>${contadorAcertos}</strong> de 10 questões!`;
} else if (contadorAcertos >= 2 && contadorAcertos <= 4) {
    document.getElementById("acertos").innerHTML = `Estude novamente os textos e refaça o quiz! Você acertou apenas <strong>${contadorAcertos}</strong> de 10 questões!`;
} else {
    document.getElementById("acertos").innerHTML = `Vamos ligar o monitor e ler os textos, porque tá difícil! Você acertou apenas <strong>${contadorAcertos}</strong> de 10 questões!`;
    }
}

document.getElementById("btnPergunta10").addEventListener("click", resultado);