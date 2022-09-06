<?php

    include_once('SYSconnection.php');
    include('SYSprotect.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cargo = $_POST['cargo'];
        $setor = $_POST['setor'];
        $cpf = $_POST['cpf'];

        $sqlUpdate = "UPDATE functionary SET nome='$nome', sobrenome='$sobrenome', cargo='$cargo', setor='$setor', cpf='$cpf' WHERE {id='$id'}";

        $result = $mysqli -> query($sqlUpdate);
    }

    header('Location: functionary.php');

?>