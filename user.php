<?php 
    include('navigation.php');
    include('connection.php');
    include('protect.php');

    if(!empty($_GET['search'])) {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or name LIKE '%$data%' or user LIKE '%$data%' ORDER BY id DESC";
    } else {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    
    $result = $mysqli -> query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Title Page -->
    <title>User</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/programmer.png" type="image/x-icon">

    <!-- STYLE -->
    <link rel="stylesheet" href="css/style.css">
  
</head>
<body>

    <h1>System Users</h1>

    <a href="create.php">Criar novo usuário</a>
    <br>
    <br>
    
    <input type="search" name="search" id="search" placeholder="search">
    <button onclick="searchData()">Pesquisar</button>
    <button onclick="searchClearData()">Limpar</button>

    <br>
    <br>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>User</th>
                <th>Password</th>
                <th>...</th>
            </tr>
        </thead>
        <tbody>

            <?php
                while($user_data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>" . $user_data["id"] . "</td>";
                    echo "<td>" . $user_data["name"] . "</td>";
                    echo "<td>" . $user_data["user"] . "</td>";
                    echo "<td>" . $user_data["password"] . "</td>";
                    echo "<td>" . "<a href='edit.php?id=$user_data[id]'>editar</a>" . "</td>";
                    echo "<td>" . "<a href='delete.php?id=$user_data[id]'>deletar</a>" . "</td>";
                    echo "</tr>";
                }
            ?>

        </tbody>
    </table>

    <script>
        var search = document.getElementById('search')

        search.addEventListener("keydown", (event) => {
            if(event.key === "Enter") {
                searchData()
            }
        })

        function searchData() {
            window.location = 'user.php?search=' + search.value
        }

        function searchClearData() {
            window.location = 'user.php'
        }
    </script>
</body>
</html>