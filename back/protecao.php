<?php 

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['nome'], $_SESSION['idUsuario'])) {
    die("Erro: Você não está logado! <p><a href=\"../../../back/login.php\">Logar</p>");
}

?>