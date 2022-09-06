<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- STYLE -->
  <link rel="stylesheet" href="css/navigation.css">
  
  <!-- Icons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

</head>
<body>

  <nav class="navigation">
      <div class="menu-toggle"></div>
      
      <ul class="list">

        <!-- Home -->

        <li class="list-item" style="--color:#f44336">
          <a href="index.php">
            <span class="icon">
              <ion-icon name="stats-chart-outline"></ion-icon>
            </span>
            <span class="text" lang="en">Dashboard</span>
          </a>
        </li>

        <!-- Functionary -->

        <li class="list-item" style="--color:#ffa117">
          <a href="functionary.php">
            <span class="icon">
              <ion-icon name="people-outline"></ion-icon>
              <!-- <ion-icon name="person-add-outline"></ion-icon> -->
            </span>
            <span class="text" lang="pt-br">Funcionários</span>
          </a>
        </li>

        <!-- Session Test -->
        <!-- Mobile -->

        <li class="list-item" style="--color:#24adff">
          <a href="mobile.php">
            <span class="icon">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </span>
            <span class="text" lang="en">Mobile</span>
          </a>
        </li>

        <!-- Tablet -->

        <li class="list-item" style="--color:#532afc">
          <a href="tablet.php">
            <span class="icon">
              <ion-icon name="tablet-portrait-outline"></ion-icon>
            </span>
            <span class="text" lang="en">Tablet</span>
          </a>
        </li>

        <!-- Desktops -->

        <li class="list-item" style="--color:#08fad3">
          <a href="desktop.php">
            <span class="icon">
              <ion-icon name="desktop-outline"></ion-icon>
            </span>
            <span class="text" lang="en">Desktops</span>
          </a>
        </li>

        <!-- User -->

        <li class="list-item" style="--color:#ffa117">
          <a href="user.php">
            <span class="icon">
              <ion-icon name="person-outline"></ion-icon>
            </span>
            <span class="text" lang="en">User</span>
          </a>
        </li>

        <!-- Logout -->

        <li class="list-item" style="--color:#b145e9">
          <a href="logout.php">
            <span class="icon">
              <ion-icon name="log-out-outline"></ion-icon>
            </span>
            <span class="text" lang="pt-br">Sair</span>
          </a>
        </li>

      </ul>

  </nav>

  <!-- SCRIPTS -->

  <!-- Navigation -->
  <script src="javascript/navigation.js"></script>

</body>
</html>