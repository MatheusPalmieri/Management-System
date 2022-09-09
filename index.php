<?php
    include('SYSconnection.php');
    include('SYSprotect.php');
    include('SYSnavigation.php');

    // $sqlFunctionary = "SELECT * FROM functionary";
    // $sqlMobile = "SELECT * FROM mobile";
    // $sqlUser = "SELECT * FROM user";
                        
    // if($result = mysqli_query($mysqli, $sql)) {
    //     $rowsQuantity = mysqli_num_rows($result);
    // }
    $rowsQuantityFunctionary = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM functionary"));
    $rowsQuantityMobile = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM mobile"));
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
            <article class="card" style="--color:#f44336">
                <div>
                    <h2>functionary's</h2>
                </div>
                <div>
                    <?php
                        echo "<span>" . $rowsQuantityFunctionary . "</span>";
                    ?>
                </div>
            </article>

            <article class="card" style="--color:#25dfff">
                <div>
                    <h2>Mobile</h2>
                </div>
                <div>
                    <?php
                        echo "<span>" . $rowsQuantityMobile . "</span>";
                    ?>
                </div>
            </article>
            
            <article class="card" style="--color:#b145e9">
                <div>
                    <h2>Users</h2>
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