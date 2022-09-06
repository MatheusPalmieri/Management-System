<?php
    include('SYSconnection.php');

    if(isset($_POST['user']) || isset($_POST['password'])) {

        if(strlen($_POST['user']) == 0) {
            echo "Preencha o campo com seu usuário";
        } else if ($_POST['password'] == 0){
            echo "Preencha o campo com seu senha";
        } else {
            $user = $mysqli -> real_escape_string($_POST['user']);
            $password = $mysqli -> real_escape_string($_POST['password']);

            $sql_code = "SELECT * FROM user WHERE user = '$user' AND password = '$password'";
            $slq_query = $mysqli -> query($sql_code) or die("Falha na execução do código SQL: " . $mysqli -> error);

            $quantity = $slq_query -> num_rows;
        
            if($quantity == 1) {
                $user = $slq_query -> fetch_assoc();

                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $user['id'];

                header("Location: index.php");
            } else {
                echo "Falha ao logar! Usuário ou senha incorretos.";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Login</title>
</head>
<body>
    
    <form method="POST">

        <label for="user">Usuário</label>
        <input type="text" name="user">

        <label for="password">Senha</label>
        <input type="password" name="password">

        <button type="submit">Entrar</button>

    </form>

</body>
</html>