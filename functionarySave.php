<?php

    include_once('SYSconnection.php');
    include('SYSprotect.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $office = $_POST['office'];
        $sector = $_POST['sector'];
        $cpf = $_POST['cpf'];

        $sqlUpdate = "UPDATE functionary SET name='$name', lastName='$lastName', office='$office', sector='$sector', cpf='$cpf' WHERE {id='$id'}";

        $result = $mysqli -> query($sqlUpdate);
    }

    header('Location: functionary.php');

?>