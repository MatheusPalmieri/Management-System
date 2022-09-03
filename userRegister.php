<?php

    include('protect.php');

    if(isset($_POST['submit'])){
    
        include_once('connection.php');

        $name = $_POST['name'];
        $user = $_POST['user'];
        $password = $_POST['password'];
    
        $result = mysqli_query($mysqli, "INSERT INTO user (name, user, password) VALUES ('$name', '$user', '$password')");

        header('Location: index.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Register User</title>
</head>
<body>
<div class="box">

    <a href="index.php">
        Back
    </a>
    <form method="POST">

        <label for="name" class="labelInput">
            Nome completo
        </label>
        
        <input type="text" name="name" id="name" required>

        <br>

        <label for="user" class="labelInput">
            usuario
        </label>
        
        <input type="text" name="user" id="user"required>
        
        <br>

        <label for="password" class="labelInput">
            senha
        </label>
        
        <input type="password" name="password" id="password" required>

        <input type="submit" name="submit" id="submit">
    </form>
</div>
</body>
</html>