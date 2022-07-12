<?php

    include('protect.php');

    if(isset($_POST['submit'])){
    
        include_once('connection.php');

        $name = $_POST['name'];
        $user = $_POST['user'];
        $password = $_POST['password'];
    
        $result = mysqli_query($mysqli, "INSERT INTO usuarios(name, user, password) VALUES ('$name', '$user', '$password')");

        header('Location: user.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
<div class="box">

    <a href="user.php">voltar</a>

        <form action="" method="POST">

            <label for="name" class="labelInput">
                Nome completo
                <input type="text" name="name" id="name" required>
            </label>

            <br>

            <label for="user" class="labelInput">
                usuario
                <input type="text" name="user" id="user"required>
            </label>
            
            <br>

            <label for="password" class="labelInput">
                senha
                <input type="password" name="password" id="password"required>
            </label>



            <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>