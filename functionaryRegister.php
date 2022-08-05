<?php

    include('protect.php');

    if(isset($_POST['submit'])){
    
        include_once('connection.php');

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cargo = $_POST['cargo'];
        $gestor = $_POST['gestor'];
        $data_nascimento = $_POST['data_nascimento'];
        $cpf = $_POST['cpf'];
    
        $result = mysqli_query($mysqli, "INSERT INTO functionary(nome, sobrenome, cargo, gestor, data_nascimento, cpf) VALUES ('$nome', '$sobrenome', '$cargo', '$gestor', '$data_nascimento', '$cpf')");

        header('Location: functionary.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>functionary's Register</title>
</head>
<body>
<div class="box">

    <a href="functionary.php">Back</a>

        <form method="POST">

            <label for="nome" class="labelInput">
                Primeiro Nome
            </label>
                
            <input type="text" name="nome" id="nome" required>

            <br>

            <label for="sobrenome" class="labelInput">
                Sobrenome
            </label>
                
            <input type="text" name="sobrenome" id="sobrenome" required>
            
            <br>

            <label for="cargo" class="labelInput">
                Cargo
            </label>
                
            <input type="text" name="cargo" id="cargo" required>
            
            <br>

            <label for="gestor" class="labelInput">
                Gestor
            </label>
                
            <input type="text" name="gestor" id="gestor" required>
            
            <br>

            <label for="data_nascimento" class="labelInput">
                Data Nascimento
            </label>
                
            <input type="date" name="data_nascimento" id="data_nascimento" required>

            <br>

            <label for="cpf" class="labelInput">
                CPF
            </label>
            
            <input type="text" name="cpf" id="cpf" required>

            <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>