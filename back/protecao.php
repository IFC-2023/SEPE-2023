<?php 

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['nome'])) {
    die("Erro: Você não está logado! <p><a href=\"../../../back/login.php\">Logar</p>");
}

?>