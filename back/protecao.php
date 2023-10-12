<?php 

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['nome'])) {
    die("Você não está logado, por favor faça o login ou cadastre-se no site. <p> <a href=\"../../../back/login.php\">Logar</a> </p>");
}

?>