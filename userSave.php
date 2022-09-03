<?php

    include_once('connection.php');
    include('protect.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $user = $_POST['user'];
        $password = $_POST['password'];

        $sqlUpdate = "UPDATE user SET name='$name', user='$user', password='$password' WHERE id='$id'";

        $result = $mysqli -> query($sqlUpdate);
    }

    header('Location: index.php');

?>