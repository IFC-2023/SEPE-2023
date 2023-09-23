const pg1 = document.getElementById("secao-pergunta-1");
const pg2 = document.getElementById("secao-pergunta-2");
const resCerta = document.getElementById("res-certa");
const resErrada = document.getElementById("res-errada");

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
                setTimeout (() => {
                    resCerta.style.display = "none";
                    pg2.style.display = "grid";
                }, 3000);
            } else if (valorResposta === "errado") {
                pg1.style.display = "none";
                resErrada.style.display = "grid";
                setTimeout (() => {
                    resErrada.style.display = "none";
                    pg2.style.display = "grid";
                }, 3000);
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
                setTimeout(() => {
                }, 3000);
            }
        }
    }
}

document.getElementById("btnPergunta2").addEventListener("click", responder2);