
const pg1 = document.getElementById("secao-pergunta-1");
const pg2 = document.getElementById("secao-pergunta-2");
const pg3 = document.getElementById("secao-pergunta-3");
const pg4 = document.getElementById("secao-pergunta-4");
const pg5 = document.getElementById("secao-pergunta-5");
const resCerta = document.getElementById("res-certa");
const resErrada = document.getElementById("res-errada");

function comecar() {
    const introducao = document.getElementById("introducao");
    const dropdown = document.querySelectorAll("ul li ul.dropdown a");

    introducao.style.display = "none";
    pg1.style.display = "grid";
    if (comecar.onclick) {
        introducao.style.display = "none";
        pg1.style.display == 'grid';
    }

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
                setTimeout(() => {
                    resCerta.style.display = "none";
                    pg2.style.display = "grid";
                }, 2000);
            } 
            else if (valorResposta === "errado") {
                pg1.style.display = "none";
                resErrada.style.display = "grid";
                setTimeout(() => {
                    resErrada.style.display = "none";
                    pg2.style.display = "grid";
                }, 2000);
            }
    
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
                    resCerta.style.display = "none";
                    pg3.style.display = "grid";
                }, 2000);
            }
            else if (valorResposta === "errado") {
                pg2.style.display = "none";
                resErrada.style.display = "grid";
                setTimeout(() => {
                    resErrada.style.display = "none";
                    pg3.style.display = "grid";
                }, 2000);
            }
        }
    }
}
document.getElementById("btnPergunta2").addEventListener("click", responder2);

function responder3() {
    let resposta = document.getElementsByName("questao3");
    let valorResposta = ""; 
    
    for (let d = 0; d < resposta.length; d++) {
        if (resposta[d].checked) {
            valorResposta = resposta[d].value;
            if (valorResposta == 'certo') {
                pg3.style.display = 'none';
                resCerta.style.display = 'grid';
                setTimeout(() => {
                    resCerta.style.display = 'none';
                    pg4.style.display = 'grid';
                }, 2000);
            }
            else {
                pg3.style.display = "none";
                resErrada.style.display = "grid";
                setTimeout(() =>{
                    resErrada.style.display = "none";
                    pg4.style.display = "grid";
                }, 2000);
            }
        }
    }
}
document.getElementById("btnPergunta3").addEventListener("click", responder3);

function responder4() {
    let resposta = document.getElementsByName("questao4");
    let valorResposta = ""; 
    
    for (let o = 0; o < resposta.length; o++) {
        if (resposta[o].checked) {
            valorResposta = resposta[o].value;
            if (valorResposta == 'certo') {
                pg4.style.display = 'none';
                resCerta.style.display = 'grid';
                setTimeout(() => {
                    resCerta.style.display = 'none';
                    pg5.style.display = 'grid';
                }, 2000);
            }
            else {
                pg4.style.display = "none";
                resErrada.style.display = "grid";
                setTimeout(() =>{
                    resErrada.style.display = "none";
                    pg5.style.display = "grid";
                }, 2000);
            }
        }
    }
}
document.getElementById("btnPergunta4").addEventListener("click", responder4);