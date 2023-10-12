let egito = document.getElementById("margin-top-dropdown");
let irlandesa = document.getElementById("linkIrlandesa");
let grecia = document.getElementById("linkGrecia");
let geral = document.getElementById("linkGeral");
let japonesa = document.getElementById("linkJaponesa");
let hindu = document.getElementById("linkHindu");
let nordica = document.getElementById("linkNordica");
let romana = document.getElementById("linkRomana");
let mesopotamia = document.getElementById("link-dropdown-excessao");
let quiz = document.getElementById("link-quiz");

function mouseSair() {
    let elementoHome = document.getElementById("link-home");
    elementoHome.classList.add("mouseSaiu");
    setTimeout(() => {
        elementoHome.classList.remove("mouseSaiu");
    }, 300);
}

document.getElementById("link-home").addEventListener("mouseleave", mouseSair);

function mouseSairMitologia() {
    let elementoGrecia = document.getElementById("link-mitologia");
    elementoGrecia.classList.add("mouseSaiuMitologia");
    setTimeout(() => {
        elementoGrecia.classList.remove("mouseSaiuMitologia");
    }, 300)
}

document.getElementById("link-mitologia").addEventListener("mouseleave", mouseSairMitologia);

if (egito !== null) {
    function sairEgipcia() {
        let elemento = document.getElementById("margin-top-dropdown");
        elemento.classList.add("saiuEgipcia");

        setTimeout(() => {
            elemento.classList.remove("saiuEgipcia");
        }, 300);
    }

    document.getElementById("margin-top-dropdown").addEventListener("mouseleave", sairEgipcia);
}

if (irlandesa !== null) {
    function sairIrlanda() {
        let elementoIrlandesa = document.getElementById("linkIrlandesa");
        elementoIrlandesa.classList.add("saiuIrlandesa");
        setTimeout(() => {
            elementoIrlandesa.classList.remove("saiuIrlandesa");
        }, 300);
    }

    document.getElementById("linkIrlandesa").addEventListener("mouseleave", sairIrlanda);
}

if (grecia !== null) {
    function sairGrecia() {
        let elementoGrecia = document.getElementById(`linkGrecia`);
        elementoGrecia.classList.add("saiuGrecia");
        setTimeout(() => {
            elementoGrecia.classList.remove("saiuGrecia");
        }, 300);
    }

    document.getElementById("linkGrecia").addEventListener("mouseleave", sairGrecia);
}

if (geral !== null) {
    function sairGeral() {
        let elementoGeral = document.getElementById("linkGeral");
        elementoGeral.classList.add("saiuGeral");
        setTimeout(() => {
            elementoGeral.classList.remove("saiuGeral");
        }, 300);
    }

    document.getElementById("linkGeral").addEventListener("mouseleave", sairGeral);
}

if (gR !== null) {
    function sairGr() {
        let elementoGr = document.getElementById("linkGrecoRomana");
        elementoGr.classList.add("saiuGr");
        setTimeout(() => {
            elementoGr.classList.remove("saiuGr");
        }, 300);
    }

    document.getElementById("linkGrecoRomana").addEventListener("mouseleave", sairGr);
}

if (hindu !== null) {
    function sairHindu() {
        let elementoHindu = document.getElementById("linkHindu");
        elementoHindu.classList.add("saiuHindu");
        setTimeout(() =>  {
            elementoHindu.classList.remove("saiuHindu");
        }, 300);
    }

    document.getElementById("linkHindu").addEventListener("mouseleave", sairHindu);
}

if (nordica !== null) {
    function sairNordica() {
        let elementoNordica = document.getElementById("linkNordica");
        elementoNordica.classList.add("saiuNordica");
        setTimeout(() => {
            elementoNordica.classList.remove("saiuNordica");
        }, 300);
    }

    document.getElementById("linkNordica").addEventListener("mouseleave", sairNordica);
}

if (romana !== null) {
    function sairRomana() {
        let elementoRomana = document.getElementById("linkRomana");
        elementoRomana.classList.add("saiuRomana");
        setTimeout(() => {
            elementoRomana.classList.remove("saiuRomana");
        }, 300);
    }

    document.getElementById("linkRomana").addEventListener("mouseleave", sairRomana);
}

if (mesopotamia !== null) {
    function linkMesopotamiaSair() {
        let elementoMesopotamia = document.getElementById("link-dropdown-excessao");
        elementoMesopotamia.classList.add("saiuMesopotamia");

        setTimeout(() => {
            elementoMesopotamia.classList.remove("saiuMesopotamia");
        }, 300);
    }

    document.getElementById("link-dropdown-excessao").addEventListener("mouseleave", linkMesopotamiaSair);
}

if (quiz !== null) {
    function linkQuizSair() {
        let elementoQuiz = document.getElementById("link-quiz");
        elementoQuiz.classList.add("saiuQuiz");

        setTimeout(() => {
            elementoQuiz.classList.remove("saiuQuiz");
        }, 300);
    }

    document.getElementById("link-quiz").addEventListener("mouseleave", linkQuizSair);
}
