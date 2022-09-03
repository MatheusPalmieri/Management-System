<?php
    $host = 'Localhost';
    $username = 'root';
    $password = '';
    $dataBase = 'management-system';

    $mysqli = new mysqli($host, $username, $password, $dataBase);

    // if($mysqli->error) {
    //     die('Falha ao conectar ao banco de dados: ' . $mysqli -> error);
    // }
?>