<?php
    include('SYSconnection.php');
    include('SYSprotect.php');
    include('SYSnavigation.php');

    $rowsQuantityinventory = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM inventory"));
    $rowsQuantityUser = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM user"));
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <!-- Title Page -->
    <title>Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/programmer.png" type="image/x-icon">

    <!-- STYLE -->
    <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
    <main>
        <h1>Dashboard</h1>

        <section class="container">
            <article class="card" style="--color:#25dfff">
                <div>
                    <h2>Inventário</h2>
                </div>
                <div>
                    <?php
                        echo "<span>" . $rowsQuantityinventory . "</span>";
                    ?>
                </div>
            </article>
            
            <article class="card" style="--color:#b145e9">
                <div>
                    <h2>Usuários</h2>
                </div>
                <div>
                    <?php
                        echo "<span>" . $rowsQuantityUser . "</span>";
                    ?>
                </div>
            </article>
        </section>
    </main>
</body>
</html>