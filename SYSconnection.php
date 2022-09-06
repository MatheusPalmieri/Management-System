<?php
    $host = 'Localhost';
    $username = 'root';
    $password = '';
    $dataBase = 'Management-System';

    $mysqli = new mysqli($host, $username, $password, $dataBase);

    // if($mysqli->error) {
    //     die('Falha ao conectar ao banco de dados: ' . $mysqli -> error);
    // }
?>