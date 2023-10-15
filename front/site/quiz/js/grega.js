const pg10 = document.getElementById("secao-pergunta-10");
const fim = document.getElementById("fim");
const resCerta = document.getElementById("res-certa");
const resErrada = document.getElementById("res-errada");

function enviarResposta() {
    let formData = new formData(document.getElementById("formulario_quiz"));
    fetch('http://localhost/SEPE/front/site/quiz/grega.php', {
        method: 'POST',
        body: formData
    })
    .then(function(response) {
        return response.text();
    })
    .then(function(data) {

      });
}