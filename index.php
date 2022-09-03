<?php
    // include('navigation.php');
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
    <link rel="stylesheet" href="css/navigation.css">
  
</head>
<body>
    <main>

        <!-- <nav>
            <div class="direct" onclick="openPage('A', 'content')">Content A</div>
            <div class="direct" onclick="openPage('B', 'content')">Content B</div>
            <div class="direct" onclick="openPage('C', 'content')">Content C</div>
        </nav> -->

        <nav class="navigation">
            
            <!-- Button Toggle -->

            <div class="menu-toggle" tabindex="0"></div>
            
            <ul class="list">

                <!-- test -->
                <li class="list-item" style="--color:#ffa117">
                <a onclick="openPage('user', 'content')">
                    <span class="icon">
                    <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <span class="text">User</span>
                </a>
                </li>

                <!-- Home -->

                <li class="list-item" style="--color:#f44336">
                <a href="index.php">
                    <span class="icon">
                    <ion-icon name="stats-chart-outline"></ion-icon>
                    </span>
                    <span class="text">Dashboard</span>
                </a>
                </li>

                <!-- Functionary -->

                <li class="list-item" style="--color:#ffa117">
                <a href="functionary.php">
                    <span class="icon">
                    <ion-icon name="people-outline"></ion-icon>
                    <!-- <ion-icon name="person-add-outline"></ion-icon> -->
                    </span>
                    <span class="text">Functionary</span>
                </a>
                </li>

                <!-- User -->

                <li class="list-item" style="--color:#ffa117">
                <a href="user.php">
                    <span class="icon">
                    <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <span class="text">User</span>
                </a>
                </li>

                <!-- Logout -->

                <li class="list-item" style="--color:#b145e9">
                <a href="logout.php">
                    <span class="icon">
                    <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="text">Logout</span>
                </a>
                </li>

            </ul>
        </nav>

  <!-- SCRIPTS -->

  <!-- Navigation -->




        <!-- <h1>Dashboard</h1> -->

        <section id="content" class="content">



        </section>

    <!--  
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
    -->
    </main>

    <!-- Script -->
    <script src="javascript/content.js"></script>
    <script src="javascript/navigation.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

</body>
</html>