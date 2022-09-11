<?php 
    include('SYSnavigation.php');
    include('SYSconnection.php');
    include('SYSprotect.php');

    if(!empty($_GET['search'])) {
        $data = $_GET['search'];
        $sql = "SELECT * FROM banco WHERE id LIKE '%$data%' or name LIKE '%$data%' or nomenclatura LIKE '%$data%' ORDER BY id DESC";
    } else {
        $sql = "SELECT * FROM banco ORDER BY id DESC";
    }
    
    $result = $mysqli -> query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <!-- Title Page -->
    <title>Inventário</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/programmer.png" type="image/x-icon">

    <!-- STYLE -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/functionary.css">

    
</head>
<body>

    <main>
        <h1>Inventário</h1>

        <section class="menu">
            <article>
                <!-- <a href="functionaryRegister.php"> -->
                <a id="functionaryRegister">
                    <span class="icon-add register" style="--color:#ffa117">
                        <ion-icon name="person-add-outline"></ion-icon>
                        <p class="action">Register</p>
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
                        <th scope="col">Setor</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($user_data = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<th scope='row' class='destaque'>" . $user_data["id"] . "</th>";
                            echo "<td>" . $user_data["name"] . " " . $user_data["lastName"] . "</td>";
                            echo "<td>" . $user_data["office"] . "</td>";
                            echo "<td>" . $user_data["sector"] . "</td>";
                            echo "<td>" . $user_data["cpf"] . "</td>";
                            echo "<td>" . "<a href='functionaryEdit.php?id=$user_data[id]'>
                                                <span class='icon-action icon-add' style='--color:#3d4152'><ion-icon name='pencil-outline'></ion-icon></span>
                                            </a>" 
                                        . "<a onClick='confirmDelete()' href='functionaryDelete.php?id=$user_data[id]'>
                                                <span class='icon-action icon-add' style='--color:#FF2a07'><ion-icon name='trash-outline'></ion-icon></span>
                                            </a>" . "</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </section>

        <!-- Register -->

        <section id="registerMenu" class="func">

            <button class="buttonRegister"> x </button>

            <form method="POST">

                <label for="name" class="labelInput">Primeiro Nome</label>
                <input type="text" name="name" id="nome" required>

                <br>

                <label for="lastName" class="labelInput">Sobrenome</label>
                <input type="text" name="lastName" id="sobrenome" required>

                <br>

                <label for="office" class="labelInput">Cargo</label>
                <input type="text" name="office" id="cargo" required>

                <br>

                <label for="sector" class="labelInput">Setor</label>
                <input type="text" name="sector" id="setor" required>

                <br>

                <label for="cpf" class="labelInput">CPF</label>
                <input type="text" name="cpf" id="cpf" required>

                <input type="submit" name="submit" id="submit" class="submitRegisterAdd">

            </form>
        </section>

    </main>

    <!-- SCRIPTS -->

    <script src="javascript/buttonAction.js"></script>

</body>
</html>