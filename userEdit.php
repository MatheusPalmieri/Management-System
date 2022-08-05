<?php 

    include('protect.php');

    if(!empty($_GET['id'])){
        include_once('connection.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM user WHERE id = $id";

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
    <title>Edit User</title>
</head>
<body>
<div class="box">

    <a href="user.php">Back</a>

        <form action="userSave.php" method="POST">

            <label for="name" class="labelInput">
                Nome completo
            </label>
            
            <input type="text" name="name" id="name" value="<?php echo $name ?>" required>

            <br>

            <label for="user" class="labelInput">
                usuario
            </label>
            
            <input type="text" name="user" id="user" value="<?php echo $user ?>" required>
            
            <br>

            <label for="password" class="labelInput">
                senha
            </label>
            
            <input type="password" name="password" id="password" value="<?php echo $password ?>" required>

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <input type="submit" name="update" id="update">
        </form>
</div>
</body>
</html>