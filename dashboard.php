<?php
    include('navigation.php');
    include('protect.php');
?>

<!DOCTYPE html>
<html lang="en">
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
                    <span>
                        <ion-icon name="add-outline"></ion-icon>
                    </span>
                    <span>231</span>
                </div>
            </article>
            
            <article class="card" style="--color:#f44336">
                <div>
                    <h2>Desktops</h2>
                </div>
                <div>
                    <ion-icon name="add-outline"></ion-icon>
                    <span>80</span>
                </div>
            </article>
        </section>
    </main>
</body>
</html>