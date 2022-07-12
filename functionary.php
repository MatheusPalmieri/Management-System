<?php 
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>

    <h1>Cadatrar</h1>

    <a href="cadastre.php">Criar novo usuário</a>
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
                    echo "<td>" . $user_data["rg"] . "</td>";
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

    <a href="painel.php">painel</a>

    <script>
        var search = document.getElementById('search')

        search.addEventListener("keydown", (event) => {
            if(event.key === "Enter") {
                searchData()
            }
        })

        function searchData() {
            window.location = 'functionary.php?search=' + search.value
        }

        function searchClearData() {
            window.location = 'functionary.php'
        }
    </script>
</body>
</html>