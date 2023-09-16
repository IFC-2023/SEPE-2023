function mouseSair() {
    let elementoHome = document.getElementById("link-home");
    elementoHome.classList.add("mouseSaiu");
    setTimeout(() => {
        elementoHome.classList.remove("mouseSaiu");
    }, 300);
}

document.getElementById("link-home").addEventListener("mouseleave", mouseSair);

function mouseSairGrecia() {
    let elementoGrecia = document.getElementById("link-grecia");
    elementoGrecia.classList.add("mouseSaiuGrecia");
    setTimeout(() => {
        elementoGrecia.classList.remove("mouseSaiuGrecia");
    }, 300)
}

document.getElementById("link-grecia").addEventListener("mouseleave", mouseSairGrecia);

function sairEgipcia() {
    let elemento = document.getElementById("margin-top-dropdown");
    elemento.classList.add("saiuEgipcia");

    setTimeout(() => {
        elemento.classList.remove("saiuEgipcia");
    }, 300);
}

document.getElementById("margin-top-dropdown").addEventListener("mouseleave", sairEgipcia);

function sairFenicia() {
    let elementoFenicia = document.getElementById("linkFenicia");
    elementoFenicia.classList.add("saiuFenicia");
    setTimeout(() => {
        elementoFenicia.classList.remove("saiuFenicia");
    }, 300);
}

document.getElementById("linkFenicia").addEventListener("mouseleave", sairFenicia);

function sairGeral() {
    let elementoGeral = document.getElementById("linkGeral");
    elementoGeral.classList.add("saiuGeral");
    setTimeout(() => {
        elementoGeral.classList.remove("saiuGeral");
    }, 300);
}

document.getElementById("linkGeral").addEventListener("mouseleave", sairGeral);

function sairGr() {
    let elementoGr = document.getElementById("linkGrecoRomana");
    elementoGr.classList.add("saiuGr");
    setTimeout(() => {
        elementoGr.classList.remove("saiuGr");
    }, 300);
}

document.getElementById("linkGrecoRomana").addEventListener("mouseleave", sairGr);

function sairHindu() {
    let elementoHindu = document.getElementById("linkHindu");
    elementoHindu.classList.add("saiuHindu");
    setTimeout(() =>  {
        elementoHindu.classList.remove("saiuHindu");
    }, 300);
}

document.getElementById("linkHindu").addEventListener("mouseleave", sairHindu);

function sairNordica() {
    let elementoNordica = document.getElementById("linkNordica");
    elementoNordica.classList.add("saiuNordica");
    setTimeout(() => {
        elementoNordica.classList.remove("saiuNordica");
    }, 300);
}

document.getElementById("linkNordica").addEventListener("mouseleave", sairNordica);

function sairRomana() {
    let elementoRomana = document.getElementById("linkRomana");
    elementoRomana.classList.add("saiuRomana");
    setTimeout(() => {
        elementoRomana.classList.remove("saiuRomana");
    }, 300);
}

document.getElementById("linkRomana").addEventListener("mouseleave", sairRomana);


function linkMesopotamiaSair() {
    let elementoMesopotamia = document.getElementById("link-dropdown-excessao");
    elementoMesopotamia.classList.add("saiuMesopotamia");

    setTimeout(() => {
        elementoMesopotamia.classList.remove("saiuMesopotamia");
    }, 300);
}

document.getElementById("link-dropdown-excessao").addEventListener("mouseleave", linkMesopotamiaSair);
