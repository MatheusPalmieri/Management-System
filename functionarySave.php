<?php

    include_once('connection.php');
    include('protect.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cargo = $_POST['cargo'];
        $gestor = $_POST['gestor'];
        $data_nascimento = $_POST['data_nascimento'];
        $cpf = $_POST['cpf'];

        $sqlUpdate = "UPDATE functionary SET nome='$nome', sobrenome='$sobrenome', cargo='$cargo', gestor='$gestor', data_nascimento='$data_nascimento', cpf='$cpf' WHERE {id='$id'}";

        $result = $mysqli -> query($sqlUpdate);
    }

    header('Location: functionary.php');

?>