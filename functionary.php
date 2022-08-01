<?php 
    include('navigation.php');
    include('connection.php');
    include('protect.php');

    if(!empty($_GET['search'])) {
        $data = $_GET['search'];
        $sql = "SELECT * FROM desktop WHERE id LIKE '%$data%' or nome LIKE '%$data%' or sobrenome LIKE '%$data%' ORDER BY id DESC";
    } else {
        $sql = "SELECT * FROM desktop ORDER BY id DESC";
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
                <span class="icon-add" style="--color:#ffa117">
                    <a href="cadastre.php">
                        <span>
                            <ion-icon name="person-add-outline"></ion-icon>
                        </span>
                        <!-- <span class="action">
                            Register new user functionary
                        </span> -->
                    </a>
                </span>
            </article>

            <article>

                <span class="icon-add" style="--color:#FF2a07" id="reset">
                    <span onclick="searchClearData()">
                    <!-- <span onSubmit={this.handleSubmit}> -->
                        <ion-icon name="refresh-outline"></ion-icon>
                    </span>
                </span>

                <input type="search" name="search" id="search" placeholder="search">
                
                <span class="icon-add" style="--color:#0fa937">
                    <span onclick="searchData()">
                        <ion-icon name="search-outline"></ion-icon>
                    </span>
                </span>

            </article>
        </section>

    </main>

    
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>CPF</th>
                <th>RG</th>
                <th>Cargo</th>
                <th>Gestor</th>
                <th>Registro</th>
                <th>...</th>
            </tr>
        </thead>
        <tbody>

            <?php
                while($user_data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>" . $user_data["nome"] . " " . $user_data["sobrenome"] . "</td>";
                    echo "<td>" . $user_data["data_nascimento"] . "</td>";
                    echo "<td>" . $user_data["cpf"] . "</td>";
                    echo "<td>" . $user_data["cargo"] . "</td>";
                    echo "<td>" . $user_data["gestor"] . "</td>";
                    echo "<td>" . "xxx" . "</td>";
                    echo "<td>" . "<a href='edit.php?id=$user_data[id]'>editar</a>" . "</td>";
                    echo "<td>" . "<a href='delete.php?id=$user_data[id]'>deletar</a>" . "</td>";
                    echo "</tr>";
                }
            ?>

        </tbody>
    </table>

    <!-- SCRIPTS -->

    <!-- Navigation -->
    <script src="javascript/buttonFunctionary.js"></script>

</body>
</html>