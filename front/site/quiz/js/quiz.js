function comecar() {
    const introducao = document.getElementById("introducao");
    const pg1 = document.getElementById("secao-pergunta-1");

    introducao.style.display = "none";
    pg1.style.display = "grid";
}

document.getElementById("btnComecar").addEventListener("click", comecar);

function responder1() {
    let resposta = document.getElementsByName("questao1");
    let valorResposta = "";
    const pg1 = document.getElementById("secao-pergunta-1");
    const resCerta = document.getElementById("res-certa");
    const resErrada = document.getElementById("res-errada");

    for (let c = 0; c < resposta.length; c++) {
        if (resposta[c].checked) {
            valorResposta = resposta[c].value;
            if (valorResposta === "certo") {
                pg1.style.display = "none";
                resCerta.style.display = "grid";
            } else if (valorResposta === "errado") {
                pg1.style.display = "none";
                resErrada.style.display = "grid";
            }
            break;
        }
    }
}

document.getElementById("btnPergunta1").addEventListener("click", responder1);