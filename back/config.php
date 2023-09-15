<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'root';
    $dbName = 'sepe';


    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // if ($conexao->connect_errno) {
    //     echo "erro";
    // }

    // else {
    //     echo "conexão efetuada com sucesso";
    // }

?>