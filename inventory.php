<?php 
    include('SYSnavigation.php');
    include('SYSconnection.php');
    include('SYSprotect.php');

    if(!empty($_GET['search'])) {
        $data = $_GET['search'];
        $sql = "SELECT * FROM inventory WHERE id LIKE '%$data%' or tipoDeEquipamento LIKE '%$data%' or nomenclatura LIKE '%$data%' ORDER BY id DESC";
    } else {
        $sql = "SELECT * FROM inventory ORDER BY id DESC";
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
    <link rel="stylesheet" href="css/inventory.css">

</head>
<body>
    <main>
        <h1>Inventário</h1>

        <section class="menu">
            <article>
                <a href="inventoryRegister.php" id="registerButton">
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
    
        <section id="container" class="table-management">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">tipoDeEquipamento</th>
                        <th scope="col">nomenclatura</th>
                        <th scope="col">marca</th>
                        <th scope="col">modelo</th>
                        <th scope="col">Serial Number</th>
                        <th scope="col">Processador</th>
                        <th scope="col">Memória</th>
                        <th scope="col">S.O.</th>
                        <th scope="col">Status</th>
                        <th scope="col">Fornecedor</th>
                        <th scope="col">CNPJ</th>
                        <th scope="col">Nº Nota Fiscal</th>
                        <th scope="col">Data Fiscal</th>
                        <th scope="col">Data Garantia</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Nome</th>
                        <th scope="col">C.P.F.</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Setor</th>
                        <th scope="col">Nº Linha</th>
                        <th scope="col">Plano</th>
                        <th scope="col">Operadora</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($user_data = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<th scope='row' class='destaque'>" . $user_data["id"] . "</th>";

                            echo "<td>" . $user_data["tipoDeEquipamento"] . "</td>";
                            echo "<td>" . $user_data["nomenclatura"] . "</td>";
                            echo "<td>" . $user_data["marca"] . "</td>";
                            echo "<td>" . $user_data["modelo"] . "</td>";
                            echo "<td>" . $user_data["serialNumberTAG"] . "</td>";
                            echo "<td>" . $user_data["processador"] . "</td>";
                            echo "<td>" . $user_data["memoria"] . "</td>";
                            echo "<td>" . $user_data["sistemaOperacional"] . "</td>";
                            echo "<td>" . $user_data["status"] . "</td>";
                            echo "<td>" . $user_data["fornecedor"] . "</td>";
                            echo "<td>" . $user_data["cnpj"] . "</td>";
                            echo "<td>" . $user_data["notaFiscal"] . "</td>";
                            echo "<td>" . $user_data["dataCompra"] . "</td>";
                            echo "<td>" . $user_data["dataGarantia"] . "</td>";
                            echo "<td>" . $user_data["valor"] . "</td>";
                            echo "<td>" . $user_data["nome"] . "</td>";
                            echo "<td>" . $user_data["cpf"] . "</td>";
                            echo "<td>" . $user_data["cargo"] . "</td>";
                            echo "<td>" . $user_data["setor"] . "</td>";
                            echo "<td>" . $user_data["numeroLinha"] . "</td>";
                            echo "<td>" . $user_data["plano"] . "</td>";
                            echo "<td>" . $user_data["operadora"] . "</td>";

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
    </main>

    <!-- SCRIPTS -->

    <script src="javascript/buttonAction.js"></script>
    <script src="javascript/redirect.js"></script>

</body>
</html>