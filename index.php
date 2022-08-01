<?php
    include('connection.php');

    if(isset($_POST['user']) || isset($_POST['senha'])) {

        if(strlen($_POST['user']) == 0) {
            echo "Preencha seu usuário";
        } else if ($_POST['password'] == 0){
            echo "Preencha sua senha";
        } else {
            $user = $mysqli -> real_escape_string($_POST['user']);
            $password = $mysqli -> real_escape_string($_POST['password']);

            $sql_code = "SELECT * FROM usuarios WHERE user = '$user' AND password = '$password'";
            $slq_query = $mysqli -> query($sql_code) or die("Falha na execução do código SQL: " . $mysqli -> error);

            $quantity = $slq_query -> num_rows;
        
            if($quantity == 1) {
                $user = $slq_query -> fetch_assoc();

                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $user['id'];

                header("Location: dashboard.php");
            } else {
                echo "Falha ao logar! E-mail ou senha incorretos.";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <form action="" method="POST">

        <label for="user">
            User
            <input type="text" name="user">
        </label>

        <label for="password">
            Password
            <input type="password" name="password">
        </label>

        <button type="submit">Login</button>

    </form>

</body>
</html>