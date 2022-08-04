<?php 
    include('navigation.php');
    include('connection.php');
    include('protect.php');

    if(!empty($_GET['search'])) {
        $data = $_GET['search'];
        $sql = "SELECT * FROM user WHERE id LIKE '%$data%' or name LIKE '%$data%' or user LIKE '%$data%' ORDER BY id DESC";
    } else {
        $sql = "SELECT * FROM user ORDER BY id DESC";
    }
    
    $result = $mysqli -> query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Title Page -->
    <title>System User</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/programmer.png" type="image/x-icon">

    <!-- STYLE -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/functionary.css">
  
</head>
<body>

<main>
    <h1>System User</h1>

    <section class="menu">
        <article>
            <a href="cadastre.php">
                <span class="icon-add" style="--color:#ffa117">
                    <span>
                        <ion-icon name="person-add-outline"></ion-icon>
                    </span>
                    <!-- <span class="action">
                        Register new user functionary
                    </span> -->
                </span>
            </a>
        </article>

        <article>

            <span class="icon-add" style="--color:#FF2a07" id="reset" onclick="searchClearData()">
                <ion-icon name="refresh-outline"></ion-icon>
            </span>

            <input type="search" name="search" id="search" placeholder="search">
            
            <span class="icon-add" style="--color:#0fa937" onclick="searchData()">
                <ion-icon name="search-outline"></ion-icon>
            </span>

        </article>
    </section>
    
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

</main>
    <!-- SCRIPTS -->

    <script src="javascript/buttonFunctionary.js"></script>

</body>
</html>