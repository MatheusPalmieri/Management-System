<?php

    include('SYSprotect.php');

    if(isset($_POST['submit'])){
    
        include_once('SYSconnection.php');

        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $office = $_POST['office'];
        $sector = $_POST['sector'];
        $cpf = $_POST['cpf'];
    
        $result = mysqli_query($mysqli, "INSERT INTO functionary(name, lastName, office, sector, cpf) VALUES ('$name', '$lastName', '$office', '$sector', '$cpf')");

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

            <label for="name" class="labelInput">
                Primeiro Nome
            </label>
                
            <input type="text" name="nome" id="nome" required>

            <br>

            <label for="lastName" class="labelInput">
                Sobrenome
            </label>
                
            <input type="text" name="lastName" id="sobrenome" required>
            
            <br>

            <label for="cargo" class="labelInput">
                Cargo
            </label>
                
            <input type="text" name="office" id="cargo" required>
            
            <br>

            <label for="setor" class="labelInput">
                Setor
            </label>
                
            <input type="text" name="sector" id="setor" required>
            
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