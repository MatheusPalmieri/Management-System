<?php 

    include('protect.php');

    if(!empty($_GET['id'])){
        include_once('connection.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM functionary WHERE id = $id";

        $result = $mysqli -> query($sqlSelect);
        
        if($result -> num_rows > 0){
            while($user_data = mysqli_fetch_assoc($result)){
                $nome = $user_data['nome'];
                $sobrenome = $user_data['sobrenome'];
                $data_nascimento = $user_data['data_nascimento'];
                $cargo = $user_data['cargo'];
                $gestor = $user_data['gestor'];
                $cpf = $user_data['cpf'];
            }
        } else {
            header('Location: functionary.php');
        }
    } else {
        header('Location: functionary.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Functionary</title>
</head>
<body>
<div class="box">

    <a href="functionary.php">Back</a>

        <form action="functionarySave.php" method="POST">

            <label for="name" class="labelInput">
                Nome
            </label>
            
            <input type="text" name="name" id="name" value="<?php echo $nome ?>" required>

            <br>

            <label for="user" class="labelInput">
                Sobrenome
            </label>
            
            <input type="text" name="user" id="user" value="<?php echo $sobrenome ?>" required>

            <br>

            <label for="text" class="labelInput">
                Cargo
            </label>
            
            <input type="text" name="password" id="password" value="<?php echo $cargo ?>" required>

            <br>

            <label for="password" class="labelInput">
                Gestor
            </label>
            
            <input type="text" name="password" id="password" value="<?php echo $gestor ?>" required>

            <br>

            <label for="password" class="labelInput">
                Data de Nascimento
            </label>
            
            <input type="text" name="password" id="password" value="<?php echo $data_nascimento ?>" required>

            <br>

            <label for="password" class="labelInput">
                CPF
            </label>
            
            <input type="text" name="text" value="<?php echo $cpf ?>" required>

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <input type="submit" name="update" id="update">
        </form>
</div>
</body>
</html>