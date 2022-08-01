<?php

    include('protect.php');

    if(isset($_POST['submit'])){
    
        include_once('connection.php');

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $data_nascimento = $_POST['data_nascimento'];
        $cpf = $_POST['cpf'];
        $cargo = $_POST['cargo'];
        $gestor = $_POST['gestor'];
        // $registro = $_POST['registro'];
    
        $result = mysqli_query($mysqli, "INSERT INTO desktop(nome, sobrenome, data_nascimento, cpf, cargo, gestor) 
                                            VALUES ('$nome', '$sobrenome', '$data_nascimento', '$cpf', '$cargo', '$gestor')");

        header('Location: functionary.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastre User</title>
</head>
<body>
<div class="box">

    <a href="functionary.php">voltar</a>

        <form action="" method="POST">

            <label for="nome" class="labelInput">
                Primeiro Nome
                <input type="text" name="nome" id="nome" required>
            </label>

            <br>

            <label for="sobrenome" class="labelInput">
                Sobrenome
                <input type="text" name="sobrenome" id="sobrenome" required>
            </label>
            
            <br>

            <label for="data_nascimento" class="labelInput">
                Data Nascimento
                <input type="date" name="data_nascimento" id="data_nascimento" required>
            </label>
            
            <br>

            <label for="cpf" class="labelInput">
                CPF
                <input type="text" name="cpf" id="cpf" required>
            </label>
            
            <br>

            <label for="rg" class="labelInput">
                RG
                <input type="text" name="rg" id="rg" required>
            </label>
            
            <br>

            <label for="cargo" class="labelInput">
                Cargo
                <input type="text" name="cargo" id="cargo" required>
            </label>
            
            <br>

            <label for="gestor" class="labelInput">
                Gestor
                <input type="text" name="gestor" id="gestor" required>
            </label>



            <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>