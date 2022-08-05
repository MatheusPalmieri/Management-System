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
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/user.css">
  
</head>
<body>

<main>
    <h1>System User</h1>

    <section class="menu">
        <article>
            <a href="userRegister.php">
                <span class="icon-add register" style="--color:#ffa117">
                    <ion-icon name="person-add-outline"></ion-icon>
                    <p class="action">
                            Register
                    </p>
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
    
    <section class="table-management">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">User</th>
                    <th scope="col">Password</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<th scope='row' class='destaque'>" . $user_data["id"] . "</th>";
                        echo "<td>" . $user_data["name"] . "</td>";
                        echo "<td>" . $user_data["user"] . "</td>";
                        echo "<td>" . $user_data["password"] . "</td>";
                        echo "<td>" . "<a href='userEdit.php?id=$user_data[id]'>
                                            <span class='icon-action icon-add' style='--color:#3d4152'><ion-icon name='pencil-outline'></ion-icon></span>
                                        </a>" 
                                    . "<a href='userDelete.php?id=$user_data[id]' onClick='confirmDelete()' id='confirmDelete'>
                                            <span class='icon-action icon-add' style='--color:#FF2a07'><ion-icon name='trash-outline'></ion-icon></span>
                                        </a>" . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </section>
</main>

    <!-- SCRIPTS -->

    <script src="javascript/buttonFunctionary.js"></script>
    <script src="javascript/confirmDelete.js"></script>

</body>
</html>