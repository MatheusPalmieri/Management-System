<?php 
    include('navigation.php');
    include('connection.php');
    include('protect.php');

    if(!empty($_GET['search'])) {
        $data = $_GET['search'];
        $sql = "SELECT * FROM functionary WHERE id LIKE '%$data%' or nome LIKE '%$data%' or sobrenome LIKE '%$data%' ORDER BY id DESC";
    } else {
        $sql = "SELECT * FROM functionary ORDER BY id DESC";
    }
    
    $result = $mysqli -> query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <!-- Title Page -->
    <title>Functionary</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/programmer.png" type="image/x-icon">

    <!-- STYLE -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/functionary.css">

    
</head>
<body>

    <main>
        <h1>Functionary's</h1>

        <section class="menu">
            <article>
                <a href="cadastre.php">
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
                        <th scope="col">Nome</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Gestor</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($user_data = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<th scope='row' class='destaque'>" . $user_data["id"] . "</th>";
                            echo "<td>" . $user_data["nome"] . " " . $user_data["sobrenome"] . "</td>";
                            echo "<td>" . $user_data["cargo"] . "</td>";
                            echo "<td>" . $user_data["gestor"] . "</td>";
                            echo "<td>" . $user_data["data_nascimento"] . "</td>";
                            echo "<td>" . $user_data["cpf"] . "</td>";
                            echo "<td>" . "<a href='edit.php?id=$user_data[id]'>
                                                <span class='icon-action icon-add' style='--color:#3d4152'><ion-icon name='pencil-outline'></ion-icon></span>
                                            </a>" 
                                        . "<a href='delete.php?id=$user_data[id]'>
                                                <span class='icon-action icon-add' style='--color:#FF2a07'><ion-icon name='trash-outline'></ion-icon></span>
                                            </a>" . "</td>";
                            echo "</tr>";
                        }
                    ?>
                    </tr>
                </tbody>
            </table>
        </section>

    </main>

    <!-- SCRIPTS -->

    <script src="javascript/buttonFunctionary.js"></script>

</body>
</html>