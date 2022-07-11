<?php 

    include('protect.php');

    if(!empty($_GET['id'])){
        include_once('connection.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id = $id";

        $result = $mysqli -> query($sqlSelect);
        
        if($result -> num_rows > 0){
            while($user_data = mysqli_fetch_assoc($result)){
                $name = $user_data['name'];
                $user = $user_data['user'];
                $password = $user_data['password'];
            }
        } else {
            header('Location: user.php');
        }
    } else {
        header('Location: user.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
<div class="box">

    <a href="user.php">voltar</a>

        <form action="saveEdit.php" method="POST">

            <label for="name" class="labelInput">
                Nome completo
                <input type="text" name="name" id="name" value="<?php echo $name ?>" required>
            </label>

            <br>

            <label for="user" class="labelInput">
                usuario
                <input type="text" name="user" id="user" value="<?php echo $user ?>" required>
            </label>
            
            <br>

            <label for="password" class="labelInput">
                senha
                <input type="password" name="password" id="password" value="<?php echo $password ?>" required>
            </label>

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <input type="submit" name="update" id="update">
        </form>
    </div>
</body>
</html>